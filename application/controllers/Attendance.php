<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model("Attendance_model");
		

		if(!$this->user->loggedin) $this->template->error(lang("error_1"));

	
	}

	public function user() {
		$this->template->loadData("activeLink", 
			array("attendance" => array("user" => 1)));
           $usergroups = $this->Attendance_model->get_usergroups();
			$users = $this->Attendance_model->get_users();
			
			$this->template->loadContent("attendance/user.php", array(
				"usergroups" => $usergroups,
				"users" => $users,
				"page" => "user"
				)
			);
			
	}

	public function add_user() {
		if(!$this->common->has_permissions(array("admin", "project_admin", 
			"project_worker"), 
			$this->user)) {
			$this->template->error(lang("error_71"));
		}
		
		if($this->input->post('saveall'))
		{
		$name=$this->input->post('usersid');
		foreach($name as $key) {
		$date=$this->input->post('date');
		$user_groups=$this->input->post('user_groups');
	
		$day = $this->input->post('day');
		$attendance = $this->input->post('attendance');
		$data = $this->Attendance_model->attendance_adduser(array(
			"Date" => $date,
			"User_Group" => $user_groups,
			"Day" => $day,
			"Name" => $key,
			"Attendance" => $attendance
			)
		);
		}
	}
		$this->session->set_flashdata("globalmsg", 
			lang("success_67"));
		redirect(site_url("attendance/user"));
		
	}
   public function user_data($page) {

	$this->load->library("datatables");
	// $this->datatables->set_default_order("users.username", "desc");
		// Set page ordering options that can be used
		$this->datatables->ordering(
			array(
				 0 => array(
				 	"users.username" => 0
				 )
			)
		);
	if($page== "user") {
		$members = $this->Attendance_model->get_all_users($this->datatables);
		
	}
    $i=1;
	foreach($members->result() as $r) {
	$attendance = '<select name="attendance" id="attendance" class="form-control attendance" placeholder="Present" disabled>
	<option value="1">Present</option>
	<option value="2">Absent</option>
	<option value="3">Half Day</option>
	</select>';
	$offday = '<input type="checkbox" class="btn primary offday" name="offday" disabled>';
	$hours = '<input type="text" class="form-control time" name="hours" disabled>';
	$options = '<a class="edit" id="edit"><span class="glyphicon glyphicon-edit sidebar-icon sidebar-icon-red"></span></a><a href="<?php echo site_url("attendance/user")';
	
	$this->datatables->data[] = array(
		$i,
		$r->username,
		$attendance,
		$offday,
		$hours,
		$options
	   
		
	);
	$i++;
    }

	echo json_encode($this->datatables->process());
   }
	public function get_team_members($id) 
	{
		
		$users = $this->Attendance_model->get_team_members($id);

		$this->template->loadAjax("attendance/ajax_user.php", array(
			"users" => $users
			)
		);
	}
	public function get_team_table($id) 
	{
		
		$users = $this->Attendance_model->get_team_members($id);

		$this->template->loadAjax("attendance/ajax_filter_data.php", array(
			"users" => $users
			)
		);
	}

	public function update_attendance($id) {
		if(!$this->common->has_permissions(array("admin", "project_admin"), 
			$this->user)) {
			$this->template->error(lang("error_71"));
		}
		$id = intval($id);
		$att = $this->Attendance_model->get_attendance($id);
		if($att->num_rows() == 0) {
			$this->template->error(lang("error_149"));
		}
		$att = $att->row();
		if($this->input->post('save'))
		{
		
		$attendance = $this->input->post('attendance');
		$hours = $this->input->post('hours');
		$this->Attendance_model->update_attendance($id, array(
			"attendance" => $attendance,
			"offday" => "Yes",
			"hours" => $hours
			)
		);
	   }
	}
}

	?>

