<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model("user_model");
		$this->load->model("file_model");
		$this->load->model("team_model");
		$this->load->model("projects_model");

		if(!$this->user->loggedin) $this->template->error(lang("error_1"));

		// If the user does not have premium. 
		// -1 means they have unlimited premium
		if($this->settings->info->global_premium && 
			($this->user->info->premium_time != -1 && 
				$this->user->info->premium_time < time()) ) {
			$this->session->set_flashdata("globalmsg", lang("success_29"));
			redirect(site_url("funds/plans"));
		}
		if(!$this->common->has_permissions(array("admin", "project_admin",
		 "file_manage", "file_worker"), 
			$this->user)) 
		{
			$this->template->error(lang("error_71"));
		}
	}

	public function index($folder_parent = 0, $projectid = -1) 
	{
		$this->template->loadData("activeLink", 
			array("file" => array("general" => 1)));

		$projectid = intval($projectid);
		$folder_parent = intval($folder_parent);

		if($projectid == -1) {
			if($this->user->info->active_projectid > 0) {
				$projectid = $this->user->info->active_projectid;
			}
		}

		$folders = array();
		if($folder_parent > 0) {
			// Get folder structure
			$folders = $this->get_folders($folders, $folder_parent);
			$folders = array_reverse($folders);
		}

		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}


		$this->template->loadContent("files/index.php", array(
			"folders" => $folders,
			"folder_parent" => $folder_parent,
			"projectid" => $projectid,
			"projects" => $projects,
			"page" => "index"
			)
		);
	}
	
	public function image($folder_parent = 0, $projectid = -1) 
	{
		$this->template->loadData("activeLink", 
			array("file" => array("general" => 1)));

		$projectid = intval($projectid);
		$folder_parent = intval($folder_parent);

		if($projectid == -1) {
			if($this->user->info->active_projectid > 0) {
				$projectid = $this->user->info->active_projectid;
			}
		}

		$folders = array();
		if($folder_parent > 0) {
			// Get folder structure
			$folders = $this->get_folders($folders, $folder_parent);
			$folders = array_reverse($folders);
		}

		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}


		$this->template->loadContent("files/image.php", array(
			"folders" => $folders,
			"folder_parent" => $folder_parent,
			"projectid" => $projectid,
			"projects" => $projects,
			"page" => "image"
			)
		);
	}	
	public function restore($folder_parent =0, $projectid = -1) 
	{
		$this->template->loadData("activeLink",array("file" => array("restore" => 1)));

		$projectid = intval($projectid);
		$folder_parent = intval($folder_parent);

		if($projectid == -1) {
			if($this->user->info->active_projectid > 0) {
				$projectid = $this->user->info->active_projectid;
			}
		}
        
		$folders = array();
		if($folder_parent > 0) {
			// Get folder structure
			$folders = $this->get_folders($folders, $folder_parent);
			$folders = array_reverse($folders);
		}

		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}


		$this->template->loadContent("files/restore.php", array(
			"folders" => $folders,
			"folder_parent" => $folder_parent,
			"projectid" => $projectid,
			"page" => "restore",
			"projects" => $projects
			
			)
		);
	}	
	// function as been created for display it as thumbnail view
	public function file_page1($page, $folder_parent, $projectid = -1) {
		$upload_path = base_url().'/'.$this->settings->info->upload_path_relative.'/';
		// created a new model to display in form a thumbnail as get_all_files1
		$rs = $this->file_model
					->get_all_files1($folder_parent, $projectid);
		//setting add new file function
		echo "<div class='orderlist'>
		<ul class=''>
		<div class='row'>
			<div class='col-md-3 col-lg-3'>
			<a class='lightbox'>
			<div class='orderlist1'>
				<img src='/project_management/images/addfile.jpg' alt='image' class='image' height='150px' width='150px' data-toggle='modal' data-target='#myModal1' title='Add New Folder/File'>
				</div>
			</a>
			<div class='text_name'>Add New</div>
			</div>
			</div>
		 </ul>
	   </div>";		
	   
		foreach ($rs->result() as $r) {
			$src = $upload_path.$r->upload_file_name;
			$alt = $r->file_name;
			$lid = $r->ID;
			$size = $r->file_size;
			$type = $r->file_type;
			$upload_file_name = $r->upload_file_name;
			//for deleting a file when we click on delete button on file
			$delete_file = '<a href="'.site_url("files/delete_file/" . $r->ID . "/" . $this->security->get_csrf_hash()).'" class="btn btn-danger btn-sm trash" onclick="return confirm(\''.lang("ctn_508").'\')" title="'.lang("ctn_511").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-trash"></span></a>';
			//for deleting folder when we click on delete button on folder
			$delete_folder = '<a href="'.site_url("files/delete_folder/" . $r->ID . "/" . $this->security->get_csrf_hash()).'" class="btn btn-danger btn-xs trash" onclick="return confirm(\''.lang("ctn_508").'\')" title="'.lang("ctn_509").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-trash"></span></a>';
			//if the type as document 
			if($r->extension == '.docx') {
				 echo " <div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/document.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.psd') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/psd-file.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.xls' || $r->extension == '.xlsx') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/excel.jpg' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.pdf') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank' download>
                		<div class='orderlist1'>
                   			<img src='/images/pdf.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.ai') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/ai.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.txt') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank' download>
                		<div class='orderlist1'>
                   			<img src='/images/txt.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.csv') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/csv.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.zip') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/zip.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.rar') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/rar.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$delete_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			//if the type format of folder
			elseif($r->folder_flag) {
				echo "	
					<div id='$lid' class='orderlist'>
					<ul class=''>
					<div class='row'>
					<div class='col-md-3 col-lg-3'>
					<a class='' href='/project_management/index.php/files/$page/$r->ID/$projectid/'>
					<div class='orderlist1'>
						<img src='/images/folder.jpg' class='image' alt='folder' height='150px' width='150px'/>
						<span>$delete_folder</span>
					</div>
					<div class='text_name'>$alt</div>
					</a>
						</div>
						</div>
					 </ul>
				   </div>
				   ";
			}
			//if the type format in image
			else {
				if($type == 'image/png' || $type == 'image/jpeg') {
					echo " 
					<div id='$lid' class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
						<a class=''>
						<div class='orderlist1'>
							<img src='$src' alt='$alt' class='image zoom-img-open' id='zoom-img-open' data-id='$src,$lid' height='150px' width='150px'>
							<span>$delete_file</span>
							</div>
							<div class='text_name'>$alt</div>
						</a>
						</div>
						</div>
					 </ul>
				   </div>
				<!-- modal box while we click on image  -->
				   <div class='modal fade' id='myModal' role='dialog' width='100%'>
					<div class='modal-dialog'>
					
					  <!-- Modal content-->
					  <div class='modal-content'>
						<div class='modal-header'>
						  <button type='button' class='close' data-dismiss='modal' title='Close' style='color: #fff'>&times;</button>
						  <h4 class='modal-title'>View Image</h4>
						</div>
						<div class='modal-body'>
						<div class='row'>
						  <div class='col-md-7' style='text-align:center'>
						  <img src='' id='desc-zoom-img-show' />
					  </div>
					  <div class='col-md-5'>
						<iframe src='' id='desc-zoom-detail-show' width='100%' frameBorder='0' style='height: -webkit-fill-available'></iframe>
					  </div>
					  </div>
					  </div>
						<div class='modal-footer'>
						  <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						</div>
					  </div>
					</div>
				  </div>
				   ";
				}
			}
		}
	}
	
	public function file_restore_page($page, $folder_parent, $projectid = -1) {
		$upload_path = base_url().'/'.$this->settings->info->upload_path_relative.'/';
		// created a new model to display in form a thumbnail as get_all_deletedfiles
		$uri =  $_SERVER["REQUEST_URI"]; //it will print full url
		  $uriArray = explode('/', $uri); //convert string into array with explode
		  $id = $uriArray[6];
		//   echo $id;
		$rs = $this->file_model->get_all_deletedfiles($folder_parent, $projectid);
		$folderArray=array();
		foreach ($rs->result() as $r) {
			if($r->file_type=='Folder')
			{
				$folderArray[]=$r->ID;
			}
		}
		
		foreach ($rs->result() as $r) {
			if(in_array($r->folder_parent, $folderArray))
			{
			continue;
			}
			$src = $upload_path.$r->upload_file_name;
			$alt = $r->file_name;
			$lid = $r->ID;
			$folder_parent = $r->folder_parent;
			$size = $r->file_size;
			$type = $r->file_type;
			$upload_file_name = $r->upload_file_name;
			//for Restoring a file when we click on restore button on file
			$restore_file = '<a href="'.site_url("files/restore_file/" . $r->ID . "/" . $this->security->get_csrf_hash()).'" class="btn btn-primary btn-sm trash" onclick="return confirm(\''.lang("ctn_1622").'\')" title="'.lang("ctn_1623").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-retweet"></span></a>';
			//for Restoring folder when we click on restore button on folder
			$restore_folder = '<a href="'.site_url("files/restore_folder/" . $r->ID . "/" . $this->security->get_csrf_hash()).'" class="btn btn-primary btn-xs trash" onclick="return confirm(\''.lang("ctn_1622").'\')" title="'.lang("ctn_1623").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-retweet"></span></a>';
			//if the type as document 
		
			if($r->extension == '.docx') {
				 echo " <div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/document.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.psd') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/psd-file.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.xls' || $r->extension == '.xlsx') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/excel.jpg' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.pdf') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank' download>
                		<div class='orderlist1'>
                   			<img src='/images/pdf.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.ai') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/ai.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.txt') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank' download>
                		<div class='orderlist1'>
                   			<img src='/images/txt.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.csv') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/csv.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.zip') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/zip.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			if($r->extension == '.rar') {
				echo "<div class='orderlist'>
					<ul class=''>
					<div class='row'>
						<div class='col-md-3 col-lg-3'>
                		<a class='lightbox' href='/uploads/$upload_file_name' target='_blank'>
                		<div class='orderlist1'>
                   			<img src='/images/rar.png' alt='' class='image' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>";
			}
			//if the type format of folder
			elseif($r->folder_flag) {
			
			        echo "	
					<div id='$lid' class='orderlist'>
					<ul class=''>
					<div class='row'>
					<div class='col-md-3 col-lg-3'>
                 	<a class='' href='/index.php/files/$page/$r->ID/$projectid/'>
                 	<div class='orderlist1'>
						<img src='/images/folder.jpg' class='image' alt='folder' height='150px' width='150px'/>
						<span>$restore_folder</span>
					</div>
					<div class='text_name'>$alt</div>
					</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>
            	   ";
				
			    }
            	//if the type format in image
            	elseif($type == 'image/png' || $type == 'image/jpeg') {
            		echo " 
            		<div id='$lid' class='orderlist'>
					<ul class=''>
					<div class='row'>
					    <div class='col-md-3 col-lg-3'>
                		<a class=''>
                		<div class='orderlist1'>
                   			<img src='$src' alt='$alt' class='image zoom-img-open' id='zoom-img-open' data-id='$src,$lid' height='150px' width='150px'>
                   			<span>$restore_file</span>
                   			</div>
                   			<div class='text_name'>$alt</div>
                		</a>
                		</div>
                		</div>
           			 </ul>
            	   </div>
            	<!-- modal box while we click on image  -->
            	   <div class='modal fade' id='myModal' role='dialog' width='100%'>
				    <div class='modal-dialog'>
				    
				      <!-- Modal content-->
				      <div class='modal-content'>
				        <div class='modal-header'>
				          <button type='button' class='close' data-dismiss='modal' title='Close' style='color: #fff'>&times;</button>
				          <h4 class='modal-title'>View Image</h4>
				        </div>
				        <div class='modal-body'>
				        <div class='row'>
				          <div class='col-md-5'>
				          <img src='' id='desc-zoom-img-show' />
				      </div>
				      <div class='col-md-7'>
				        <iframe src='' id='desc-zoom-detail-show' width='100%' height='520px' frameBorder='0'></iframe>
				      </div>
				      </div>
				      </div>
				        <div class='modal-footer'>
				          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
            	   ";
				}
		}
	}

	public function file_page($page, $folder_parent, $projectid = -1) 
	{
		$folder_parent = intval($folder_parent);
		$projectid = intval($projectid);
		if($projectid == -1) {
			if($this->user->info->active_projectid > 0) {
				$projectid = $this->user->info->active_projectid;
			}
		}

		$this->load->library("datatables");

		$this->datatables->set_default_order("project_files.file_name", "asc");

		// Set page ordering options that can be used
		$this->datatables->ordering(
			array(
				 0 => array(
				 	"project_files.file_name" => 0
				 ),
				 1 => array(
				 	"projects.name" => 0
				 ),
				 2 => array(
				 	"project_files.file_type" => 0
				 ),
				 3 => array(
				 	"projects.name" => 0
				 )
			)
		);

		if($page == "index") {
			if($projectid > 0) {
				$this->datatables->set_total_rows(
					$this->file_model->get_files_total($projectid, 
						$folder_parent, $this->user->info->ID)
				);
				$files = $this->file_model->get_files($projectid, 
					$folder_parent, $this->user->info->ID, $this->datatables);
			} elseif($projectid == 0) {
				$this->datatables->set_total_rows(
					$this->file_model
					->get_files_user_noproject_total($this->user->info->ID, 
							$folder_parent)
				);
				$files = $this->file_model
				->get_files_user_noproject($this->user->info->ID, 
						$folder_parent,$this->datatables);
			} else {
				$this->datatables->set_total_rows(
					$this->file_model
					->get_files_user_projects_total($this->user->info->ID, 
						$folder_parent)
				);
				$files = $this->file_model
				->get_files_user_projects($this->user->info->ID, 
						$folder_parent,$this->datatables);
			}
		} elseif($page == "all") {
			if(!$this->common->has_permissions(array("admin", "project_admin",
			 "file_manage"), 
				$this->user)) 
			{
				$this->template->error(lang("error_71"));
			}
			$this->datatables->set_total_rows(
				$this->file_model
				->get_all_files_total($folder_parent, $projectid)
			);
			$files = $this->file_model
				->get_all_files($folder_parent, $projectid, $this->datatables);
		}

		foreach($files->result() as $r) {
			if(isset($r->project_name)) {
				$project_name = $r->project_name;
			} else {
				$project_name = lang("ctn_46");
			}
			if($r->folder_flag) {
				//before that site_url("files/".$page."/" . $r->ID . "/" . $projectid . "/") it goes to current page path, that in datatables format now it show in thumbnails view
				$options = '<a href="'.site_url("files/image/" . $r->ID . "/" . $projectid . "/").'" class="btn btn-primary btn-xs">'.lang("ctn_506").'</a> ';
				if($r->userid == $this->user->info->ID || ($this->common->has_team_permissions(array("admin"), $r)) || ($this->common->has_permissions(array("admin", "project_admin", "file_manage"), $this->user)) ) {
					$options .= '<a href="'.site_url("files/edit_folder/" . $r->ID).'" class="btn btn-warning btn-xs" title="'.lang("ctn_507").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-cog"></span></a> <a href="'.site_url("files/delete_folder/" . $r->ID . "/" . $this->security->get_csrf_hash()).'" class="btn btn-danger btn-xs" onclick="return confirm(\''.lang("ctn_508").'\')" title="'.lang("ctn_509").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-trash"></span></a>';
				}

				$this->datatables->data[] = array(
					$r->file_name,
					date($this->settings->info->date_picker_format, $r->timestamp),
					lang("ctn_472"),
					$project_name,
					$this->common->get_user_display(array("username" => $r->username, "avatar" => $r->avatar, "online_timestamp" => $r->online_timestamp)),
					$options
				);
			} else {
				$options = '<a href="'.site_url("files/view_file/" . $r->ID).'" target="_blank" class="btn btn-info btn-xs">'.lang("ctn_493").'</a> ';
				if($r->userid == $this->user->info->ID || ($this->common->has_team_permissions(array("admin"), $r)) || ($this->common->has_permissions(array("admin", "project_admin", "file_manage"), $this->user)) ) {
					$options .= '<a href="'.site_url("files/edit_file/" . $r->ID).'" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="'.lang("ctn_510").'"><span class="glyphicon glyphicon-cog"></span></a> <a href="'.site_url("files/delete_file/" . $r->ID . "/" . $this->security->get_csrf_hash()).'" class="btn btn-danger btn-xs" onclick="return confirm(\''.lang("ctn_508").'\')" title="'.lang("ctn_511").'" data-toggle="tooltip" data-placement="bottom"><span class="glyphicon glyphicon-trash"></span></a>';
				}
				$url = base_url().'/'.$this->settings->info->upload_path_relative.'/'.$r->upload_file_name;
				if(!empty($r->file_url)) {
					$url = $r->file_url;
				}
				$this->datatables->data[] = array(
					$r->file_name,
					date($this->settings->info->date_picker_format, $r->timestamp),
					$r->file_type,
					$project_name,
					$this->common->get_user_display(array("username" => $r->username, "avatar" => $r->avatar, "online_timestamp" => $r->online_timestamp)),
					$options

				);
			}
		}
		echo json_encode($this->datatables->process());
		
	}


	public function all($folder_parent = 0, $projectid = -1) 
	{
		if(!$this->common->has_permissions(array("admin", "project_admin",
		 "file_manage"), 
			$this->user)) 
		{
			$this->template->error(lang("error_71"));
		}
		$this->template->loadData("activeLink", 
			array("file" => array("all" => 1)));

		$folder_parent = intval($folder_parent);
		$projectid = intval($projectid);

		if($projectid == -1) {
			if($this->user->info->active_projectid > 0) {
				$projectid = $this->user->info->active_projectid;
			}
		}

		$folders = array();
		if($folder_parent > 0) {
			// Get folder structure
			$folders = $this->get_folders($folders, $folder_parent);
			$folders = array_reverse($folders);
		}
		
		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}

		$this->template->loadContent("files/index.php", array(
			"folders" => $folders,
			"folder_parent" => $folder_parent,
			"projectid" => $projectid,
			"page" => "all",
			"projects" => $projects
			)
		);
	}

	public function get_folders($folders, $folder_parent) 
	{
		$folder = $this->file_model->get_folder($folder_parent);
		if($folder->num_rows() == 0) {
			return $folders;
		} else {
			$folder = $folder->row();
			$folders[] = $folder;
			if($folder->folder_parent > 0) {
				return $this->get_folders($folders, $folder->folder_parent);
			} else {
				return $folders;
			}
		}
	}

	public function add_file($folderid = 0) 
	{
		$this->template->loadData("activeLink", 
			array("file" => array("general" => 1)));
		
		$folderid = intval($folderid);
		$default_projectid = 0;
		if($folderid > 0) {
			// Get default project and folder
			$folder = $this->file_model->get_folder($folderid);
			if($folder->num_rows() > 0) {
				$folder = $folder->row();
				$default_projectid = $folder->projectid;
			}
		}

		// If user is Admin, Project-Admin or File manager let them
		// view all projects
		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}

		$this->template->loadContent("files/add_file.php", array(
			"projects" => $projects,
			"default_projectid" => $default_projectid,
			"folderid" => $folderid
			)
		);
	}

	public function get_folders_for_project() 
	{
		$projectid = intval($this->input->get("projectid"));
		$folderid = intval($this->input->get("folderid"));
		if($projectid > 0) {
			$project = $this->projects_model->get_project($projectid);
			if($project->num_rows() == 0) {
				$this->template->error(lang("error_72"));
			}
			$project = $project->row();
		} else {
			$projectid = 0;
		}

		// Get folders
		$folders = $this->file_model->get_folders($projectid);
		$this->template->loadAjax("files/ajax_get_folders.php", array(
			"folders" => $folders,
			"folderid" => $folderid
			),1
		);
	}


	public function add_file_process() 
	{
		$this->load->library("upload");

		$name = $this->common->nohtml($this->input->post("name"));
		$file_url = $this->common->nohtml($this->input->post("file_url"));
		$file_note = $this->lib_filter->go($this->input->post("file_note"));
		$projectid = intval($this->input->post("projectid"));
		$folderid = intval($this->input->post("folderid"));

		if($folderid <=0) {
			$folderid = 0;
		}
		if($projectid <=0) {
			$projectid = 0;
		}

		$folder_flag = intval($this->input->post("folder_flag"));
		$folder_name = $this->common->nohtml($this->input->post("folder_name"));

		if($folder_flag) {
			if(empty($folder_name)) {
				$this->template->error(lang("error_91"));
			}
		}

		if($projectid > 0) {
			$project = $this->projects_model->get_project($projectid);
			if($project->num_rows() == 0) {
				$this->template->error(lang("error_72"));
			}
			$project = $project->row();
		}

		$this->common->check_permissions(
			"Add File", 
			array("admin", "project_admin", "file_manage", "project_worker"), // User Roles
			array("admin", "file"),  // Team Roles
			$projectid
		);

		if($folderid > 0) {
			$folder = $this->file_model->get_folder($folderid);
			if($folder->num_rows() == 0) {
				$this->template->error(lang("error_92"));
			}
			$folder = $folder->row();
			if($folder->projectid != $projectid) {
				$this->template->error(lang("error_93"));
			}
		}

		// Upload
		if(empty($file_url) && !$folder_flag) 
		{
			$this->upload->initialize(array(
			   "upload_path" => $this->settings->info->upload_path,
		       "overwrite" => FALSE,
		       "max_filename" => 300,
		       "encrypt_name" => TRUE,
		       "remove_spaces" => TRUE,
		       "allowed_types" => $this->settings->info->file_types,
		       "max_size" => $this->settings->info->file_size,
				)
			);

			if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->template->error(lang("error_94") . "<br /><br />" .
                    	 $this->upload->display_errors());
            }

            $data = $this->upload->data();

            $fileid = $this->file_model->add_file(array(
            	"file_name" => $name,
            	"upload_file_name" => $data['file_name'],
            	"projectid" => $projectid,
            	"folder_parent" => $folderid,
            	"file_type" => $data['file_type'],
            	"extension" => $data['file_ext'],
            	"file_size" => $data['file_size'],
            	"userid" => $this->user->info->ID,
            	"timestamp" => time()
            	)
            );

            // File Note
            if(!empty($file_note)) {
            	$this->file_model->add_file_note(array(
            		"fileid" => $fileid,
            		"userid" => $this->user->info->ID,
            		"note" => $file_note,
            		"timestamp" => time()
            		)
            	);
            }
		}
		if(!empty($file_url) && !$folder_flag) {
			$fileid = $this->file_model->add_file(array(
            	"file_name" => $name,
            	"projectid" => $projectid,
            	"folder_parent" => $folderid,
            	"file_type" => "External URL",
            	"file_size" => 0,
            	"file_url" => $file_url,
            	"userid" => $this->user->info->ID,
            	"timestamp" => time()
            	)
            );

            // File Note
            if(!empty($file_note)) {
            	$this->file_model->add_file_note(array(
            		"fileid" => $fileid,
            		"userid" => $this->user->info->ID,
            		"note" => $file_note,
            		"timestamp" => time()
            		)
            	);
            }
		}
		if($folder_flag) {
			$fileid = $this->file_model->add_file(array(
            	"file_name" => $folder_name,
            	"projectid" => $projectid,
            	"file_type" => "Folder",
            	"folder_parent" => $folderid,
            	"folder_flag" => 1,
            	"userid" => $this->user->info->ID,
            	"timestamp" => time()
            	)
            );
		}


		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1021"). "<a href='" 
			. site_url("files/view_file/" . $fileid) . "'>".lang("ctn_1022")."</a>" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);

		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_42"));
		if($folderid > 0) {
			//previously while add new file it gone to home page i.e., redirect(site_url("files/index/" . $folderid)), now it will go to current page where we create a folder
			redirect(site_url("files/image/" . $folderid));
		} else {
			// redirect(site_url("files"));
			redirect(site_url("files/all"));
		}

	}
	
	public function restore_folder($id, $hash) 
	{
		$this->template->loadData("activeLink", 
		array("file" => array("general" => 1)));

		if($hash != $this->security->get_csrf_hash()) {
			$this->template->error(lang("error_6"));
		}
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_100"));
		}
		$file = $file->row();

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_227"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		// make sure not a folder
		if(!$file->folder_flag) {
			$this->template->error(lang("error_99"));
		}
		/* update delete_status as No the folder will restore*/
		
	   $query = $this->file_model->get_delete_file($id);
       $deleteFileArray = array();
		foreach ($query->result() as $r=>$value) {
		$deleteFileArray[] = $value->ID;
		
		}
		
		$this->file_model->update_parent_child_files($deleteFileArray,array (
        	"delete_status" => 'No'
        	)
		);
		
		
		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1026") . " ($file->folder_name)" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);
		$previous = $_SERVER['HTTP_REFERER'];
		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_174"));
		redirect($previous);

	}
	
	public function restore_file($id, $hash) 
	{
		if($hash != $this->security->get_csrf_hash()) {
			$this->template->error(lang("error_6"));
		}
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_227"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		// make sure not a folder
		if($file->folder_flag) {
			$this->template->error(lang("error_96"));
		}

		/* by setting Restore status No it doesn't show on front end while we click Restore button, but it actually updating a status only */
		$query = $this->file_model->get_delete_file($id);
       $deleteFileArray = array();
		foreach ($query->result() as $r=>$value) {
		$deleteFileArray[] = $value->ID;
		
		}
	
		$this->file_model->update_parent_child_files($deleteFileArray,array(
        	"delete_status" => 'No'
        	)
		);

		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1025") . " ($file->file_name)" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);
		$previous = $_SERVER['HTTP_REFERER'];
		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_174"));
		redirect($previous);
		/* previously they redirect the page to files, but now while we click on restore it will redirect to current folder or file */
		// redirect(site_url("files"));

	}

	public function edit_file($id, $all=0) 
	{
		$all = intval($all);
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();
		// make sure not a folder
		if($file->folder_flag) {
			$this->template->error(lang("error_96"));
		}

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_97"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		$this->template->loadData("activeLink", 
			array("file" => array("general" => 1)));
		

		// If user is Admin, Project-Admin or File manager let them
		// view all projects
		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}

		$folders = null;
		if($file->projectid > 0) {
			$folders = $this->file_model->get_folders($file->projectid);
		}

		$this->template->loadContent("files/edit_file.php", array(
			"file" => $file,
			"projects" => $projects,
			"folders" => $folders,
			"all" => $all
			)
		);

	}

	public function edit_file_process($id, $all=0) 
	{
		$id = intval($id);
		$all = intval($all);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();
		// make sure not a folder
		if($file->folder_flag) {
			$this->template->error(lang("error_96"));
		}

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				"Edit File", 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}


		$this->load->library("upload");

		$name = $this->common->nohtml($this->input->post("name"));
		$file_url = $this->common->nohtml($this->input->post("file_url"));
		$file_note = $this->lib_filter->go($this->input->post("file_note"));
		$projectid = intval($this->input->post("projectid"));
		$folderid = intval($this->input->post("folderid"));

		if($folderid <=0) {
			$folderid = 0;
		}
		if($projectid <=0) {
			$projectid = 0;
		}

		if($projectid > 0) {
			$project = $this->projects_model->get_project($projectid);
			if($project->num_rows() == 0) {
				$this->template->error(lang("error_72"));
			}
			$project = $project->row();
		}

		// Get user permissions for the new project we are trying to edit the file to
		if($projectid != $file->projectid) {
			$this->common->check_permissions(
				lang("error_97"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid,
				lang("error_98")
			);
		}

		if($folderid > 0) {
			$folder = $this->file_model->get_folder($folderid);
			if($folder->num_rows() == 0) {
				$this->template->error(lang("error_92"));
			}
			$folder = $folder->row();
			if($folder->projectid != $projectid) {
				$this->template->error(lang("error_93"));
			}
		}

		// Upload
		if(empty($file_url) && $_FILES['userfile']['size'] > 0)
		{
			$this->upload->initialize(array(
			   "upload_path" => $this->settings->info->upload_path,
		       "overwrite" => FALSE,
		       "max_filename" => 300,
		       "encrypt_name" => TRUE,
		       "remove_spaces" => TRUE,
		       "allowed_types" => $this->settings->info->file_types,
		       "max_size" => $this->settings->info->file_size,
				)
			);

			if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->template->error(lang("error_94")."<br /><br />" .
                    	 $this->upload->display_errors());
            }

            $data = $this->upload->data();

            $this->file_model->update_file($id, array(
            	"file_name" => $name,
            	"upload_file_name" => $data['file_name'],
            	"projectid" => $projectid,
            	"folder_parent" => $folderid,
            	"file_type" => $data['file_type'],
            	"extension" => $data['file_ext'],
            	"file_size" => $data['file_size'],
            	"userid" => $this->user->info->ID,
            	"timestamp" => time()
            	)
            );          
		} elseif(!empty($file_url)) {
			$this->file_model->update_file($id, array(
            	"file_name" => $name,
            	"projectid" => $projectid,
            	"folder_parent" => $folderid,
            	"file_type" => "External URL",
            	"file_size" => 0,
            	"file_url" => $file_url,
            	"userid" => $this->user->info->ID,
            	"timestamp" => time()
            	)
            );
		} else {
			$this->file_model->update_file($id, array(
            	"file_name" => $name,
            	"projectid" => $projectid,
            	"folder_parent" => $folderid,
            	"userid" => $this->user->info->ID,
            	"timestamp" => time()
            	)
            );
		}

	

		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1023") . " <a href='" 
			. site_url("files/view_file/" . $id) . "'>".lang("error_22")."</a>" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);

		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_43"));
		if($all == 0) {
			if($folderid > 0) {
				redirect(site_url("files/index/" . $folderid));
			} else {
				redirect(site_url("files"));
			}
		} else {
			if($folderid > 0) {
				redirect(site_url("files/all/" . $folderid));
			} else {
				redirect(site_url("files/all"));
			}
		}
	}

	public function edit_folder($id, $all=0) 
	{
		$id = intval($id);
		$all = intval($all);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();
		// make sure not a folder
		if(!$file->folder_flag) {
			$this->template->error(lang("error_99"));
		}

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_97"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		$this->template->loadData("activeLink", 
			array("file" => array("general" => 1)));
		
		// If user is Admin, Project-Admin or File manager let them
		// view all projects
		if($this->common->has_permissions(
			array("admin", "project_admin", "file_manage"), $this->user
			)
		) {
			$projects = $this->projects_model->get_all_active_projects();
		} else {
			$projects = $this->projects_model
				->get_projects_user_all_no_pagination($this->user->info->ID, 
					"(pm2.admin = 1 OR pm2.file = 1)");
		}

		$folders = null;
		if($file->projectid > 0) {
			$folders = $this->file_model->get_folders($file->projectid);
		}

		$this->template->loadContent("files/edit_folder.php", array(
			"file" => $file,
			"projects" => $projects,
			"folders" => $folders,
			"all" => $all
			)
		);

	}

	public function edit_folder_process($id, $all) 
	{
		$id = intval($id);
		$all = intval($all);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();
		// make sure not a folder
		if(!$file->folder_flag) {
			$this->template->error(lang("error_99"));
		}

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_97"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}


		$name = $this->common->nohtml($this->input->post("name"));
		$projectid = intval($this->input->post("projectid"));
		$folderid = intval($this->input->post("folderid"));

		if($folderid <=0) {
			$folderid = 0;
		}
		if($projectid <=0) {
			$projectid = 0;
		}

		if($projectid > 0) {
			$project = $this->projects_model->get_project($projectid);
			if($project->num_rows() == 0) {
				$this->template->error(lang("error_72"));
			}
			$project = $project->row();
		}

		// Get user permissions for the new project we are trying to edit the file to
		if($projectid != $file->projectid) {
			$this->common->check_permissions(
				lang("error_97"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid,
				lang("error_98")
			);
		}
	

		if($folderid > 0) {
			$folder = $this->file_model->get_folder($folderid);
			if($folder->num_rows() == 0) {
				$this->template->error(lang("error_92"));
			}
			$folder = $folder->row();
			if($folder->projectid != $projectid) {
				$this->template->error(lang("error_93"));
			}
		}

	
		$this->file_model->update_file($id, array(
        	"file_name" => $name,
        	"projectid" => $projectid,
        	"folder_parent" => $folderid,
        	"userid" => $this->user->info->ID,
        	"timestamp" => time()
        	)
        );
		

		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1024") . " <a href='" 
			. site_url("files/view_file/" . $id) . "'>".lang("ctn_1022")."</a>" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);

		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_43"));
		if($all == 0) {
			if($folderid > 0) {
				redirect(site_url("files/index/" . $folderid));
			} else {
				redirect(site_url("files"));
			}
		} else {
			if($folderid > 0) {
				redirect(site_url("files/all/" . $folderid));
			} else {
				redirect(site_url("files/all"));
			}
		}
	}

	public function delete_file($id, $hash) 
	{
		if($hash != $this->security->get_csrf_hash()) {
			$this->template->error(lang("error_6"));
		}
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();
        
		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_227"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		// make sure not a folder
		if($file->folder_flag) {
			$this->template->error(lang("error_96"));
		}

		/* Delete file, previously file as delete from the upload local path, now it doesn't delete on local storage */
		/*
		if(!empty($file->upload_file_name)) {
			@unlink($this->settings->info->upload_path . "/" . $file->upload_file_name);
		}
		*/
		/* this model is used to delete the data from database for particular id, but now as a requirement it upadate the delete_status as yes */
		// $this->file_model->delete_file($id);
		/* by setting delete status yes it doesn't show on front end while we click delete button, but it actually updating a status only */
		/* instead of deleting a update_file delete status */
		// $this->file_model->delete_file($id);
		$query = $this->file_model->get_delete_file($id);
        $deleteFileArray = array();
		foreach ($query->result() as $r=>$value) {
		$deleteFileArray[] = $value->ID;
		
		}
		// print_r($deleteFileArray);
		$id = implode(",",$deleteFileArray);
		// echo $var;
		// exit;
		$this->file_model->update_parent_child_files($id,array(
        	"delete_status" => 'Yes'
        	)
		);
	

		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1025") . " ($file->file_name)" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);
		$previous = $_SERVER['HTTP_REFERER'];
		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_44"));
		redirect($previous);
		/* previously they redirect the page to files, but now while we click on delete it will redirect to current folder or file */
		// redirect(site_url("files"));

	}

	public function delete_folder($id,$hash) 
	{
		if($hash != $this->security->get_csrf_hash()) {
			$this->template->error(lang("error_6"));
		}
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_100"));
		}
		$file = $file->row();

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_227"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		// make sure not a folder
		if(!$file->folder_flag) {
			$this->template->error(lang("error_99"));
		}
		/* instead of deleting a update_file delete status */
		// $this->file_model->delete_file($id);
	   $query = $this->file_model->get_delete_file($id);
       $deleteFileArray = array();
		foreach ($query->result() as $r=>$value) {
		$deleteFileArray[] = $value->ID;
		
		}
	
		$this->file_model->update_parent_child_files($deleteFileArray,array(
        	"delete_status" => 'Yes'
        	)
		);
		
		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1026") . " ($file->folder_name)" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);
		$previous = $_SERVER['HTTP_REFERER'];
		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_45"));
		redirect($previous);

	}

	public function view_file($id) 
	{
		$this->template->loadData("activeLink", 
			array("file" => array("general" => 1)));
		
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_95"));
		}
		$file = $file->row();

		// Get user permissions
		$projectid = $file->projectid;
		// For this section we place team_member outside because we 
		// need it for View File view page
		$team_member = $this->team_model
				->get_member_of_project($this->user->info->ID, $projectid);
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_228"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin", "file"),  // Team Roles
				$projectid
			);
		}

		// make sure not a folder
		if($file->folder_flag) {
			$this->template->error(lang("error_96"));
		}

		$notes = $this->file_model->get_file_notes($id);

		$this->template->loadContent("files/view_file.php", array(
			"file" => $file,
			"notes" => $notes,
			"team_member" => $team_member->row()
			)
		);
	}

	public function delete_file_note($id, $hash) 
	{
		if($hash != $this->security->get_csrf_hash()) {
			$this->template->error(lang("error_6"));
		}
		$id = intval($id);
		$note = $this->file_model->get_file_note($id);
		if($note->num_rows() == 0) {
			$this->template->error(lang("error_101"));
		}
		$note = $note->row();

		$this->file_model->delete_file_note($id);
		$projectid = 0;

		// Get user permission
		if($note->userid != $this->user->info->ID) {
			$file = $this->file_model->get_file($note->fileid);
			if($file->num_rows() == 0) {
				$this->template->error(lang("error_101"));
			}
			$file = $file->row();

			$projectid = $file->projectid;
			$this->common->check_permissions(
				lang("error_102"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin"),  // Team Roles
				$projectid
			);
		}

		// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1027") . " <a href='". 
				site_url("files/view_file/" . $note->fileid) ."'>".lang("ctn_1022")."</a>" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);

		// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_46"));
		redirect(site_url("files/view_file/" . $note->fileid));
	}

	public function add_file_note($id) 
	{
		$id = intval($id);
		$file = $this->file_model->get_file($id);
		if($file->num_rows() == 0) {
			$this->template->error(lang("error_101"));
		}
		$file = $file->row();
		// make sure not a folder
		if($file->folder_flag) {
			$this->template->error(lang("error_96"));
		}

		// Get user permissions
		$projectid = $file->projectid;
		if($file->userid != $this->user->info->ID) {
			$this->common->check_permissions(
				lang("error_229"), 
				array("admin", "project_admin", "file_manage"), // User Roles
				array("admin", "file"),  // Team Roles
				$projectid
			);
		}

		$note = $this->lib_filter->go($this->input->post("note"));

		if(empty($note)) {
			$this->template->error(lang("error_103"));
		}

		// File Note
    	$this->file_model->add_file_note(array(
    		"fileid" => $id,
    		"userid" => $this->user->info->ID,
    		"note" => $note,
    		"timestamp" => time()
    		)
    	);

    	// Log
		$this->user_model->add_user_log(array(
			"userid" => $this->user->info->ID,
			"message" => lang("ctn_1028") . " <a href='". 
				site_url("files/view_file/" . $id) ."'>".lang("ctn_1022")."</a>" ,
			"timestamp" => time(),
			"IP" => $_SERVER['REMOTE_ADDR'],
			"projectid" => $projectid,
			"url" => "files"
			)
		);
     	
     	// Redirect
		$this->session->set_flashdata("globalmsg", 
			lang("success_47"));
		redirect(site_url("files/view_file/" . $id));
	}
}

?>