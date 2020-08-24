<?php

class Technical_Model extends CI_Model 
{

	public function get_files($projectid, $folder_parent,$userid, $datatable) 
	{
		$this->db->order_by("technical_files.folder_flag", "DESC");
		$datatable->db_order();

		$datatable->db_search(array(
			"technical_files.file_name",
			"technical_files.file_type",
			"users.username"
			)
		);

		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name,
				technical_files.file_url,
				technical_files.folder_parent,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,
				pr2.admin, pr2.file")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->join("project_members as pm2", "pm2.projectid = technical_files.projectid", "left outer")
			->join("project_roles as pr2", "pr2.ID = pm2.roleid", "left outer")
			->group_start()
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->where("pm2.userid", $userid)
			->where("(pr2.admin = 1 OR pr2.file = 1)")
			->where("technical_files.folder_parent", $folder_parent)
			->where("technical_files.projectid", $projectid)
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->limit($datatable->length, $datatable->start)
			->get("technical_files");
	}

	public function get_files_total($projectid, $folder_parent, $userid) 
	{
		$s = $this->db
			->select("COUNT(*) as num")
			->join("projects", "projects.ID = technical_files.projectid")
			->join("project_members as pm2", "pm2.projectid = technical_files.projectid", "left outer")
			->join("project_roles as pr2", "pr2.ID = pm2.roleid", "left outer")
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->where("pm2.userid", $userid)
			->where("(pr2.admin = 1 OR pr2.file = 1)")
			->where("technical_files.folder_parent", $folder_parent)
			->where("technical_files.projectid", $projectid)
			->get("technical_files");
		$r = $s->row();
		if(isset($r->num)) return $r->num;
		return 0;
	}

	public function get_files_user_projects($userid, $folder_parent, $datatable) 
	{
		$this->db->order_by("technical_files.folder_flag", "DESC");
		$datatable->db_order();

		$datatable->db_search(array(
			"technical_files.file_name",
			"technical_files.file_type",
			"users.username"
			)
		);
		$s = $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.file_url,
				technical_files.folder_parent,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,
				pr2.admin, pr2.file")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->join("project_members as pm2", "pm2.projectid = technical_files.projectid", "left outer")
			->join("project_roles as pr2", "pr2.ID = pm2.roleid", "left outer")
			->group_start()
			->group_start()
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->where("(technical_files.folder_parent", $folder_parent)
			->where("(pm2.userid", $userid)
			->where("(pr2.admin = 1 OR pr2.file = 1)))")
			->group_end()
			->or_group_start()
			->or_where("technical_files.projectid", 0)
			->where("technical_files.folder_parent", $folder_parent)
			->where("technical_files.userid", $userid)
			->group_end()
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->limit($datatable->length, $datatable->start)
			->get("technical_files");
		
		return $s;
	}

	public function get_files_user_noproject($userid, $folder_parent, $datatable) 
	{
		$this->db->where("technical_files.projectid", 0);
		$this->db->order_by("technical_files.folder_flag", "DESC");

		$datatable->db_order();

		$datatable->db_search(array(
			"technical_files.file_name",
			"technical_files.file_type",
			"users.username"
			)
		);
		
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name,
				technical_files.file_url,
				technical_files.folder_parent,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->group_start()
			->where("technical_files.userid", $userid)
			->where("technical_files.folder_parent", $folder_parent)
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->limit($datatable->length, $datatable->start)
			->get("technical_files");
	}

	public function get_files_user_noproject_total($userid, $folder_parent) 
	{
		$this->db->where("technical_files.projectid", 0);
		
		$s = $this->db
			->select("COUNT(*) as num")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->where("technical_files.userid", $userid)
			->where("technical_files.folder_parent", $folder_parent)
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->get("technical_files");
		$r = $s->row();
		if(isset($r->num)) return $r->num;
		return 0;
	}

	public function get_files_user_projects_total($userid, $folder_parent) 
	{
		$s = $this->db
			->select("COUNT(*) as num")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->join("project_members as pm2", "pm2.projectid = technical_files.projectid", "left outer")
			->join("project_roles as pr2", "pr2.ID = pm2.roleid", "left outer")
			->group_start()
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->where("(technical_files.folder_parent", $folder_parent)
			->where("(pm2.userid", $userid)
			->where("(pr2.admin = 1 OR pr2.file = 1)))")
			->group_end()
			->or_group_start()
			->or_where("technical_files.projectid", 0)
			->where("technical_files.folder_parent", $folder_parent)
			->where("technical_files.userid", $userid)
			->group_end()
			->get("technical_files");
		
		$r = $s->row();
		if(isset($r->num)) return $r->num;
		return 0;
	}

	// public function get_delete_file($id) {
	// 	return $this->db->select("technical_files.ID,technical_files.file_type,technical_files.delete_Status,technical_files.folder_parent")
	// 	                 ->WHERE("technical_files.folder_parent",$id)
	// 	// ->WHERE_IN("technical_files.ID",$id)
	// 	->get("technical_files");
	// 	// return $this->db->query("SELECT ID FROM technical_files WHERE folder_parent IN ($id)");
	// 	// $result = $this->db->result_array();
	// 	// print_r($result)
	// }
	public function get_delete_file($id) {
		$this->db->query("SET @pv = $id");
		return
 		$query= $this->db->query("(SELECT * FROM technical_files WHERE ID=$id) UNION 
		 (SELECT * from technical_files where FIND_IN_SET(folder_parent,@pv) and @pv:= concat(@pv, ',',ID))");
	}
/* This function is created for view all the files and folder for all the user in thumbnail view, previously they had shown it on datatable view as the function as [get_all_files($folder_parent, $projectid, $datatable) line no 254] */
	//line no 210, display only the status of delete_status as No
	public function get_all_files1($folder_parent, $projectid) 
	{
		if($projectid != -1) {
			$this->db->where("technical_files.projectid", $projectid);
		}
		$this->db->order_by("technical_files.folder_flag", "DESC");


		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.file_url,
				technical_files.folder_parent,
				
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->group_start()
			->where("technical_files.folder_parent", $folder_parent)
			->where("technical_files.delete_status = 'No'")
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->get("technical_files");
	}
	//  This function used for getting all the deleted folders and files data from table
	public function get_all_deletedfiles($folder_parent,$projectid) {
		if($projectid != -1) {
			$this->db->where("technical_files.projectid", $projectid);
		}
		
		// $this->db->order_by("technical_files.folder_flag", "DESC");
	
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.file_url,
				technical_files.folder_parent,
				technical_files.delete_status,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->group_start()
			->where("technical_files.folder_parent>=", $folder_parent)
			->where("technical_files.delete_status = 'Yes'")
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->get("technical_files");
	}
	public function get_all_parentfiles($folder_parent,$projectid) {
		if($projectid != -1) {
			$this->db->where("technical_files.projectid", $projectid);
		}
		
		// $this->db->order_by("technical_files.folder_flag", "DESC");
	
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.file_url,
				technical_files.folder_parent,
				technical_files.delete_status,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->group_start()
			->where("technical_files.folder_parent>=", $folder_parent)
			->where("technical_files.delete_status = 'No'")
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->get("technical_files");
	}

	public function get_all_files($folder_parent, $projectid, $datatable) 
	{
		if($projectid != -1) {
			$this->db->where("technical_files.projectid", $projectid);
		}
		$this->db->order_by("technical_files.folder_flag", "DESC");

		$datatable->db_order();

		$datatable->db_search(array(
			"technical_files.file_name",
			"technical_files.file_type",
			"users.username"
			)
		);
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.file_url,
				technical_files.folder_parent,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->group_start()
			->where("technical_files.folder_parent", $folder_parent)
			->where("technical_files.delete_status = 'No'")
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->group_end()
			->order_by("technical_files.ID", "DESC")
			->limit($datatable->length, $datatable->start)
			->get("technical_files");
	}

	public function get_all_files_total($folder_parent, $projectid) 
	{
		if($projectid != -1) {
			$this->db->where("technical_files.projectid", $projectid);
		}

		$s = $this->db
			->select("COUNT(*) as num")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->where("technical_files.folder_parent", $folder_parent)
			->where("(projects.status = 0 OR projects.status IS NULL)")
			->get("technical_files");
		$r = $s->row();
		if(isset($r->num)) return $r->num;
		return 0;
	}

	public function get_file($id) 
	{
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.folder_parent, technical_files.projectid,
				technical_files.file_url,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,,
				folder.ID as folderid, folder.folder_name as parent_folder_name")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->join("technical_files as folder", "folder.ID = technical_files.folder_parent", "left outer")
			->where("technical_files.ID", $id)
			->get("technical_files");
	}

	public function get_files_by_project($projectid, $filename) 
	{
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.folder_parent, technical_files.projectid,
				technical_files.file_url,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,,
				folder.ID as folderid, folder.folder_name as parent_folder_name")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->join("technical_files as folder", "folder.ID = technical_files.folder_parent", "left outer")
			->where("(technical_files.projectid", $projectid)
			->or_where("technical_files.projectid = 0)")
			->where("technical_files.folder_flag", 0)
			->like("technical_files.file_name", $filename)
			->get("technical_files");
	}

	public function get_folder($folderid) 
	{
		return $this->db
			->where("ID", $folderid)->where("folder_flag", 1)
			->get("technical_files");
	}

	public function get_folders($projectid) 
	{
		return $this->db->where("projectid", $projectid)
			->where("folder_flag", 1)
			->get("technical_files");
	}

	public function add_file($data) 
	{
		$this->db->insert("technical_files", $data);
		return $this->db->insert_id();
	}

	public function update_file($id,$data) 
	{
	
		$this->db->where("ID",$id)->update("technical_files", $data);
		
	} 
	
	public function update_parent_child_files($id,$data) 
	{
	
		$this->db->where_in("ID",$id)->update("technical_files", $data);
		
	} 

	public function delete_file($id) 
	{
		$this->db->where("ID", $id)->delete("technical_files");
	}
	

	public function get_file_notes($fileid) 
	{
		return $this->db
			->where("project_file_notes.fileid", $fileid)
			->select("project_file_notes.ID, project_file_notes.note,
				project_file_notes.timestamp,
				users.ID as userid, users.username, users.avatar,
				users.online_timestamp")
			->join("users", "users.ID = project_file_notes.userid")
			->get("project_file_notes");
	}

	public function get_file_note($id) 
	{
		return $this->db->where("ID", $id)->get("project_file_notes");
	}

	public function delete_file_note($id) 
	{
		$this->db->where("ID", $id)->delete("project_file_notes");
	}

	public function add_file_note($data) 
	{
		$this->db->insert("project_file_notes", $data);
	}

	public function get_recent_files_by_project($projectid) 
	{
		return $this->db
			->select("technical_files.ID, technical_files.userid, 
				technical_files.folder_flag, technical_files.file_name, 
				technical_files.extension, technical_files.file_size,
				technical_files.file_type, technical_files.folder_name,
				technical_files.upload_file_name, technical_files.timestamp,
				technical_files.folder_parent, technical_files.projectid,
				technical_files.file_url,
				projects.name as project_name,
				users.username, users.avatar, users.online_timestamp,,
				folder.ID as folderid, folder.folder_name as parent_folder_name")
			->join("projects", "projects.ID = technical_files.projectid", "left outer")
			->join("users", "users.ID = technical_files.userid")
			->join("technical_files as folder", "folder.ID = technical_files.folder_parent", "left outer")
			->where("(technical_files.projectid", $projectid)
			->or_where("technical_files.projectid = 0)")
			->where("technical_files.folder_flag", 0)
			->limit(5)
			->order_by("technical_files.ID", "DESC")
			->get("technical_files");
	}

}


?>