<?php

class Attendance_Model extends CI_Model 
{

	public function attendance_adduser($data) 
	{
		$this->db->insert("user_attendance", $data);
		return $this->db->insert_id();
	}

	public function get_all_users($datatable) 
	{
		$datatable->db_order();

		$datatable->db_search(array(
			)
		);

		return $this->db
			->select("users.ID, users.username, users.first_name, users.last_name,
				users.email, users.avatar, users.online_timestamp")
			
			->limit($datatable->length, $datatable->start)
			->get("users");
	}

	public function get_usergroups() 
	{
		return $this->db->query("SELECT ug.ID as ID, ug.name as name,u.username as username,uu.groupid,uu.userid from user_groups ug,users u,user_group_users uu WHERE ug.ID=uu.groupid AND u.ID=uu.userid group by ug.name");
	}

	public function get_team_members($id) 
	{
		return $this->db
			->query("SELECT ug.ID as ID, ug.name,u.username ,uu.groupid,uu.userid from user_groups ug,users u,user_group_users uu WHERE ug.ID=uu.groupid AND u.ID=uu.userid AND ug.id=$id");
	}

	public function get_users() 
	{
		return $this->db
		->query("SELECT u.ID as ID, ug.name,u.username ,uu.groupid,uu.userid from user_groups ug,users u,user_group_users uu WHERE ug.ID=uu.groupid AND u.ID=uu.userid AND u.id");
	}

	
	public function update_attendance($id)
	{
		$this->db->where("ID", $id)->update("user_attendance", $data);
	}

	

}

?>