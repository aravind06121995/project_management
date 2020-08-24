<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-15 05:30:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:33:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:35:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:35:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:36:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 05:36:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:36:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:36:34 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:36:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:36:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` >=0 '0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-15 05:37:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` >=0 '0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-15 05:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-15 05:42:49 --> Query error: Unknown column '169' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent',169)
ERROR - 2020-07-15 05:42:52 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent',0)
ERROR - 2020-07-15 05:43:14 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent=',0)
ERROR - 2020-07-15 05:43:59 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent=',0)
ERROR - 2020-07-15 05:44:58 --> Query error: Unknown column '169' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent',169)
ERROR - 2020-07-15 05:45:08 --> Query error: Unknown column '169' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>',169)
ERROR - 2020-07-15 05:45:09 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>',0)
ERROR - 2020-07-15 05:45:57 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=',0)
ERROR - 2020-07-15 05:47:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '169 )' at line 10 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		and project_files.folder_parent>=,169 )
ERROR - 2020-07-15 05:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0 )' at line 10 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		and project_files.folder_parent>=,0 )
ERROR - 2020-07-15 05:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0)' at line 10 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		and 'project_files.folder_parent>=',0)
ERROR - 2020-07-15 05:47:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0)' at line 10 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		and 'project_files.folder_parent>',0)
ERROR - 2020-07-15 05:47:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0)' at line 10 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		and 'project_files.folder_parent>',0)
ERROR - 2020-07-15 05:48:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 17 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent);
ERROR - 2020-07-15 05:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'project_files.group by folder_parent)' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select  project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		project_files.group by folder_parent);
ERROR - 2020-07-15 05:49:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'project_files.group by folder_parent)' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select  project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		project_files.group by folder_parent);
ERROR - 2020-07-15 05:50:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:51:05 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:51:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:51:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:51:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:51:38 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 05:56:14 --> Query error: Unknown column '169' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent',169)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent))
ERROR - 2020-07-15 05:56:16 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent',0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent))
ERROR - 2020-07-15 05:58:22 --> Query error: Unknown column 'fproject_files.older_flag' in 'where clause' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		fproject_files.older_flag = 1
		group by 'project_files.folder_parent>=169')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=169))
ERROR - 2020-07-15 05:58:24 --> Query error: Unknown column 'fproject_files.older_flag' in 'where clause' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		fproject_files.older_flag = 1
		group by 'project_files.folder_parent>=0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0))
ERROR - 2020-07-15 05:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_fi' at line 20 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		fproject_files.older_flag = 1
		group by 'project_files.folder_parent>=0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files. FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>=0))
ERROR - 2020-07-15 05:59:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_fi' at line 20 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files. FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>=0))
ERROR - 2020-07-15 06:01:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_fi' at line 20 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files. FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent'))
ERROR - 2020-07-15 06:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-15 06:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-15 06:11:00 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\models\File_model.php 228
ERROR - 2020-07-15 06:11:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		fo' at line 4 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent))
ERROR - 2020-07-15 06:11:02 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\models\File_model.php 228
ERROR - 2020-07-15 06:11:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		fo' at line 4 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent))
ERROR - 2020-07-15 06:13:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:14:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:16:26 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\models\File_model.php 237
ERROR - 2020-07-15 06:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `project_files`.`delete_status` = 'No'
AND (`projects`.`status` =0 OR' at line 7 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE `project_files`.`projectid` = '169'
AND   (
`project_files`.`folder_parent` > `IS` `NULL`
AND `project_files`.`delete_status` = 'No'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-15 06:16:28 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\models\File_model.php 237
ERROR - 2020-07-15 06:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `project_files`.`delete_status` = 'No'
AND (`projects`.`status` =0 OR' at line 7 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE `project_files`.`projectid` = '0'
AND   (
`project_files`.`folder_parent` > `IS` `NULL`
AND `project_files`.`delete_status` = 'No'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-15 06:16:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:17:45 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:17:49 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:20:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:20:09 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:21:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:21:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:22:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:22:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:22:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:23:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 06:25:14 --> Query error: Unknown column '169' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,169)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,169))
ERROR - 2020-07-15 06:25:16 --> Query error: Unknown column '168' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,168)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,168))
ERROR - 2020-07-15 06:25:17 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,0))
ERROR - 2020-07-15 06:27:31 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:51:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'project_files.group by folder_parent))' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select  project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		project_files.group by folder_parent))
ERROR - 2020-07-15 06:52:11 --> Query error: The used SELECT statements have a different number of columns - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0'))
ERROR - 2020-07-15 06:52:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_f' at line 8 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files,delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent,0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0'))
ERROR - 2020-07-15 06:53:20 --> Query error: The used SELECT statements have a different number of columns - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent,0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0'))
ERROR - 2020-07-15 06:54:11 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent,0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent,0'))
ERROR - 2020-07-15 06:54:27 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=,0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent,0'))
ERROR - 2020-07-15 06:54:34 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=,0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=,0'))
ERROR - 2020-07-15 06:54:47 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=0')
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=0'))
ERROR - 2020-07-15 06:59:36 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent))
ERROR - 2020-07-15 06:59:40 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent))
ERROR - 2020-07-15 06:59:41 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent))
ERROR - 2020-07-15 06:59:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:59:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 06:59:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:11:56 --> Query error: Unknown table 'project_files' in field list - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_status FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent,project_files.delete_statusFROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent))
ERROR - 2020-07-15 07:12:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 07:12:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:12:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:19:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:12 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:38:44 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:22 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:39:23 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:40:10 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 597
ERROR - 2020-07-15 07:45:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:46:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:48:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 07:49:05 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 08:21:17 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 08:21:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 08:22:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 08:22:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 08:27:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 08:35:40 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:40 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:40 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:51 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:51 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:51 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:35:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 639
ERROR - 2020-07-15 08:44:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent)
ERROR - 2020-07-15 08:44:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent)
ERROR - 2020-07-15 08:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent)
ERROR - 2020-07-15 08:45:36 --> Query error: Unknown column '169' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,169)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent,169))
ERROR - 2020-07-15 08:45:39 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent,0))
ERROR - 2020-07-15 08:45:41 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent,0))
ERROR - 2020-07-15 08:48:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'project_files.group by folder_parent))' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select  project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		project_files.group by folder_parent))
ERROR - 2020-07-15 08:48:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'project_files.group by folder_parent))' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select  project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		project_files.group by folder_parent))
ERROR - 2020-07-15 08:54:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'project_files.group by folder_parent))' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent')
		UNION
		(Select  project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.file_url,
		project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		project_files.group by folder_parent))
ERROR - 2020-07-15 08:54:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 08:54:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 08:54:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 08:54:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''folder_parent,0))' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent,0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by 'folder_parent,0))
ERROR - 2020-07-15 08:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 9 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 
		group by 'folder_parent,0'))
ERROR - 2020-07-15 08:59:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 9 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 
		group by 'folder_parent,0'))
ERROR - 2020-07-15 09:00:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:05:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:05:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:05:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:05:38 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:07:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:07:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:07:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:08:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:08:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:09:03 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:09:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:09:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:09:26 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:09:31 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:10:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:16:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:25:52 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:26:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 09:26:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:44:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:44:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:46:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:47:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:47:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:47:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 09:57:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '169 IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' an' at line 8 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,169')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent,169 IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,169'))
ERROR - 2020-07-15 09:57:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0 IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and ' at line 8 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0')
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent,0 IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent,0'))
ERROR - 2020-07-15 09:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Yes' and 
		folder_flag = 0 and 'folder_parent IN (SELECT folder_parent FROM pro' at line 4 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and 'folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent))
ERROR - 2020-07-15 09:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Yes' and 
		folder_flag = 0 and 'folder_parent IN (SELECT folder_parent FROM pro' at line 4 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and 'folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by 'folder_parent))
ERROR - 2020-07-15 10:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-15 10:03:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-15 10:06:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:06:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:14:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:20:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:20:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:20:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:20:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:21:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:21:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:21:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:21:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:21:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:21:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:23:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:23:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:23:45 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:23:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:24:49 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:31:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:31:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:32:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:33:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:33:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:33:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:34:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:35:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:35:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:39:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:39:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:39:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:40:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:40:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 10:41:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:11:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:12:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:12:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:22:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:31:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:34:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:34:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:36:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:37:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:37:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 11:55:50 --> Severity: Notice --> Undefined variable: getID C:\xampp\htdocs\project_management\application\models\File_model.php 224
ERROR - 2020-07-15 11:55:50 --> Severity: error --> Exception: Call to a member function db_search() on null C:\xampp\htdocs\project_management\application\models\File_model.php 224
ERROR - 2020-07-15 11:55:52 --> Severity: Notice --> Undefined variable: getID C:\xampp\htdocs\project_management\application\models\File_model.php 224
ERROR - 2020-07-15 11:55:52 --> Severity: error --> Exception: Call to a member function db_search() on null C:\xampp\htdocs\project_management\application\models\File_model.php 224
ERROR - 2020-07-15 12:13:41 --> Severity: error --> Exception: Too few arguments to function Files::restore_folder(), 1 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1550
ERROR - 2020-07-15 12:13:49 --> Severity: error --> Exception: Too few arguments to function Files::restore_folder(), 1 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1550
ERROR - 2020-07-15 12:14:25 --> Severity: error --> Exception: Too few arguments to function Files::restore_folder(), 1 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1550
ERROR - 2020-07-15 12:14:32 --> Severity: error --> Exception: Too few arguments to function Files::restore_folder(), 1 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1549
ERROR - 2020-07-15 12:14:54 --> Severity: error --> Exception: Too few arguments to function Files::restore_folder(), 1 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1549
ERROR - 2020-07-15 12:15:09 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:19:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:21:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:33:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:34:06 --> Severity: Notice --> Undefined property: stdClass::$delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 602
ERROR - 2020-07-15 12:34:06 --> Severity: Notice --> Undefined property: stdClass::$delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 602
ERROR - 2020-07-15 12:34:12 --> Severity: Notice --> Undefined property: stdClass::$delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 602
ERROR - 2020-07-15 12:34:51 --> Severity: Notice --> Undefined property: stdClass::$delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 602
ERROR - 2020-07-15 12:41:28 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 601
ERROR - 2020-07-15 12:41:28 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 601
ERROR - 2020-07-15 12:41:28 --> Severity: Notice --> Undefined variable: folder_flag C:\xampp\htdocs\project_management\application\controllers\Files.php 601
ERROR - 2020-07-15 12:41:42 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\project_management\application\controllers\Files.php 601
ERROR - 2020-07-15 12:45:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:45:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:51:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:51:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined variable: delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined variable: delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined variable: delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined variable: delete_status C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 12:58:51 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\project_management\application\controllers\Files.php 426
ERROR - 2020-07-15 13:07:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:08:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:11:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:12:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:12:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:23:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:23:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:24:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:24:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:25:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:26:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:27:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:27:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:33:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:37:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:42:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:43:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:44:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:44:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 13:59:56 --> Severity: Notice --> Undefined variable: lid C:\xampp\htdocs\project_management\application\controllers\Files.php 584
ERROR - 2020-07-15 14:04:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:18:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:18:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:18:31 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:18:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:20:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:20:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:27:53 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-15 14:27:57 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-15 14:29:03 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\project_management\application\controllers\Files.php 416
ERROR - 2020-07-15 14:29:28 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\project_management\application\controllers\Files.php 416
ERROR - 2020-07-15 14:37:57 --> Severity: Notice --> Undefined variable: folderrArray C:\xampp\htdocs\project_management\application\controllers\Files.php 420
ERROR - 2020-07-15 14:42:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:42:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:42:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:42:45 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:42:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:44:00 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:44:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:44:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:44:49 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 14:45:00 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:13:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:14:05 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:15:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:18:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:19:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:21:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:22:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:38:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:41:00 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:43:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:43:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:43:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:43:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:51:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:51:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:52:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:53:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:57:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:57:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:57:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:57:53 --> Severity: Notice --> Undefined offset: 4 C:\xampp\htdocs\project_management\application\views\files\index.php 44
ERROR - 2020-07-15 15:58:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:58:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:58:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:58:28 --> Severity: Notice --> Undefined offset: 4 C:\xampp\htdocs\project_management\application\views\files\index.php 44
ERROR - 2020-07-15 15:58:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:58:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 15:58:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:11:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:11:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:12:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:12:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:12:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-15 16:28:37 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:28:49 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-15 16:37:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
