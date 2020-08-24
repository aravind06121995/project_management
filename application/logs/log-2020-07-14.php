<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-14 05:43:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:43:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:44:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 05:44:47 --> Severity: Notice --> Undefined variable: projectid C:\xampp\htdocs\project_management\application\controllers\Files.php 124
ERROR - 2020-07-14 05:44:47 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\controllers\Files.php 125
ERROR - 2020-07-14 05:44:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:44:53 --> Severity: Notice --> Undefined variable: projectid C:\xampp\htdocs\project_management\application\controllers\Files.php 124
ERROR - 2020-07-14 05:44:53 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\controllers\Files.php 125
ERROR - 2020-07-14 05:44:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:45:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:45:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:45:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 05:46:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 05:46:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:46:26 --> Severity: error --> Exception: Too few arguments to function Files::get_folders(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 136 and exactly 2 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 811
ERROR - 2020-07-14 05:46:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:46:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:46:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:46:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:47:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:47:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:49:12 --> Query error: Operand should contain 1 column(s) - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
project_files.folder_parent,0 OR `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 05:49:19 --> Query error: Operand should contain 1 column(s) - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
project_files.folder_parent,0 OR `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 05:49:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:49:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:49:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:50:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''122'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` >=0 '122'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 05:50:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
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
ERROR - 2020-07-14 05:50:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` > 1 '0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 05:51:58 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 05:53:21 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 05:53:35 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\project_management\application\controllers\Files.php 409
ERROR - 2020-07-14 05:56:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND   (
`project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 ' at line 5 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE `project_files`.`folder_parent` >=0 '0'
AND   (
`project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 05:56:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:56:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:56:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:58:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:59:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:59:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 05:59:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:01:05 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:01:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:11:13 --> Severity: Compile Error --> Cannot use [] for reading C:\xampp\htdocs\project_management\application\views\layout\sidebar_links.php 128
ERROR - 2020-07-14 06:15:24 --> Severity: Notice --> Undefined variable: folders C:\xampp\htdocs\project_management\application\views\files\restore.php 84
ERROR - 2020-07-14 06:15:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\project_management\application\views\files\restore.php 84
ERROR - 2020-07-14 06:15:24 --> Severity: Notice --> Undefined variable: folders C:\xampp\htdocs\project_management\application\views\files\restore.php 89
ERROR - 2020-07-14 06:15:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\project_management\application\views\files\restore.php 89
ERROR - 2020-07-14 06:16:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:16:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:17:20 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:17:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:19:34 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:19:39 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:20:16 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:20:17 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:20:26 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:27:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:27:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:28:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:29:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:29:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:29:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:29:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:29:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:29:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:30:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:30:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:31:07 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:31:12 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:31:20 --> Severity: error --> Exception: syntax error, unexpected '>=' (T_IS_GREATER_OR_EQUAL), expecting ')' C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:33:59 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:34:15 --> Severity: error --> Exception: syntax error, unexpected '>=' (T_IS_GREATER_OR_EQUAL), expecting ')' C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:42:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:43:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:43:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:43:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:43:46 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\controllers\Files.php 408
ERROR - 2020-07-14 06:43:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:44:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:44:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:44:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:44:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:44:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:44:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:45:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:45:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:45:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:45:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:45:49 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:46:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:46:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:46:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:47:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:48:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:48:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:50:20 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:50:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:50:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:50:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 06:50:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:51:33 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:51:35 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 06:52:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:52:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:52:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:53:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:54:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 06:54:03 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:00:34 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 07:01:10 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 07:01:12 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 07:02:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:02:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:02:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:02:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:02:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:02:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:02:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:02:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:03:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:03:11 --> Severity: error --> Exception: syntax error, unexpected 'project_files' (T_STRING), expecting ')' C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 07:03:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:03:53 --> Severity: error --> Exception: Too few arguments to function Files::restore(), 0 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and at least 1 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 119
ERROR - 2020-07-14 07:04:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:04:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:04:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:04:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:09:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:09:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:09:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0
AND `project_files`.`delete_status` = 'No'
AND (`projects`.`status` =0 OR `pro' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` >0 0
AND `project_files`.`delete_status` = 'No'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`file_name` ASC, `project_files`.`ID` DESC
 LIMIT 20
ERROR - 2020-07-14 07:09:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:09:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:10:03 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:10:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:10:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:10:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:10:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:12:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:13:09 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:32:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:32:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:37:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:37:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:37:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:37:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:38:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:38:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:38:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:38:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:38:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:44:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:45:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:45:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:45:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:45:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:45:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:46:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:46:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:46:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:47:05 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:47:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:47:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:47:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:47:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:47:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:48:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:48:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:48:52 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:49:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:50:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:53:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:53:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:53:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:53:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:55:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:56:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:56:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 07:56:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:57:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:57:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 07:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
A' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent,126 ||` `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 07:59:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
A' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent,122 ||` `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 07:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
A' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent,0 ||` `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 07:59:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
A' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent,0 ||` `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 07:59:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
A' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent,0 ||` `project_files`.`folder_parent` >0
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 07:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`|| project_files`.`folder_parent IS NOT` `NULL`
AND `project_files`.`delete_sta' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` IS NULL `|| project_files`.`folder_parent IS NOT` `NULL`
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 08:00:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:00:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:00:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''126'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` =0 OR `project_files`.`folder_parent` >0 '126'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 08:00:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''122'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` =0 OR `project_files`.`folder_parent` >0 '122'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 08:00:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `' at line 6 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` =0 OR `project_files`.`folder_parent` >0 '0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 08:00:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:01:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:01:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `' at line 7 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`folder_parent` = '0'
AND `project_files`.`folder_parent` >0 '0'
AND `project_files`.`delete_status` = 'Yes'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 08:03:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:04:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:04:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:04:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:04:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:05:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:05:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:05:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:05:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:05:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:05:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:05:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:05:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:06:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:06:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:06:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:06:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:06:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:06:42 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:03 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:07:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:08:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:08:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:08:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:08:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:08:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:09:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:09:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:10:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:10:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:10:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:10:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:10:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:11:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:11:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:12:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:12:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:13:49 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:13:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:14:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:15:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:15:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:15:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:16:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:16:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:16:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:16:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:16:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:16:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:17:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:17:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:17:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:42 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:17:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:17:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:18:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:18:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:18:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:18:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:18:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:18:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:18:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:18:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:19:09 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:19:15 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:19:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:19:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:19:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:19:42 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:19:45 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:19:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:20:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:20:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:20:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:21:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:21:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:21:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:21:15 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:21:20 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:21:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:21:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:26:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:26:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:27:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:32:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:32:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:32:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:32:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:32:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:33:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:33:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:36:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:36:38 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:36:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:37:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:38:09 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:38:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:38:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:38:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:38:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:38:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:38:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:39:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:39:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:39:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:39:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:39:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:39:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:39:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:40:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:40:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:40:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:40:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:42:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:42:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:42:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:42:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:45:31 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:46:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:46:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:46:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:46:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:46:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:46:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:47:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:47:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:47:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:47:16 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:47:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:47:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:47:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:47:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:48:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:48:00 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:48:09 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:49:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:49:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:57:34 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:57:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:57:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:58:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:58:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:58:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:58:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:58:52 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:58:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:58:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:58:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:16 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:59:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:31 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:59:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 08:59:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 08:59:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:00:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:00:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:16 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:00:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:42 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:00:45 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:02:52 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:03:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:07:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:07:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:07:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:08:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:08:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:11:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:16:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:16:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:19:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:19:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:19:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:19:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:20:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:20:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:20:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:20:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:20:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:20:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:21:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:22:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:23:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:23:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:23:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:23:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:23:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:23:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:23:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:23:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:29:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:29:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:29:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:29:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:29:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:31:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:32:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:32:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:38:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:38:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:44:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:46:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:46:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:47:17 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 09:47:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 09:47:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:01:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:01:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:02:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:02:06 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 10:02:36 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 10:02:38 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 10:02:38 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 10:02:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:02:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:02:44 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 10:07:11 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 303
ERROR - 2020-07-14 10:07:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:07:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:07:18 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 303
ERROR - 2020-07-14 10:08:05 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 303
ERROR - 2020-07-14 10:08:53 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 303
ERROR - 2020-07-14 10:08:55 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 303
ERROR - 2020-07-14 10:09:33 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 302
ERROR - 2020-07-14 10:09:34 --> Severity: error --> Exception: Too few arguments to function File_Model::get_file(), 1 passed in C:\xampp\htdocs\project_management\application\controllers\Files.php on line 1502 and exactly 2 expected C:\xampp\htdocs\project_management\application\models\File_model.php 302
ERROR - 2020-07-14 10:10:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:10:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:10:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:10:44 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:10:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:10:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:10:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:10:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:25:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:25:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:25:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:27:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:40:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 10:40:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:40:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 10:40:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 11:51:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 11:52:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 11:52:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:00:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:00:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:03:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:03:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:05:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:05:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:05:27 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\controllers\Files.php 1526
ERROR - 2020-07-14 12:05:27 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:07:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:07:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:08:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:08:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:08:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:08:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:11:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:11:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:11:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:12:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:12:15 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:20 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:12:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:12:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:12:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:13:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:13:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:13:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:03 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:14:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:14:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:14:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:15:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:17:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:17:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:17:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:17:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:18:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:18:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:18:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:19:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:19:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:19:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:20:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:20:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:20:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:22:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:22:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:22:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:22:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:25:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:26:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:27:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:27:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:27:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:27:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:27:34 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:27:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:27:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:28:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:28:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:29:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:29:13 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:29:33 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:29:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:30:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:32:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:33:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:34:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:44:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:45:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:46:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:46:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:48:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:48:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:48:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:48:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:49:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:49:15 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:49:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:49:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:49:26 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:49:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:49:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:50:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:50:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:50:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:50:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:50:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:51:00 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:51:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:51:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:51:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:52:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:52:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:52:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 12:52:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:52:58 --> Severity: Notice --> Undefined offset: 4 C:\xampp\htdocs\project_management\application\views\files\index.php 44
ERROR - 2020-07-14 12:52:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:53:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:53:54 --> Query error: Unknown column 'ID,folder_parent' in 'where clause' - Invalid query: UPDATE `project_files` SET `delete_status` = 'Yes'
WHERE `ID,folder_parent` = 122
ERROR - 2020-07-14 12:55:26 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:56:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:56:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:56:27 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:56:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:56:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:58:42 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:58:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:59:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 12:59:56 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 13:00:14 --> Severity: error --> Exception: Too few arguments to function Files::delete_folder(), 2 passed in C:\xampp\htdocs\project_management\system\core\CodeIgniter.php on line 532 and exactly 3 expected C:\xampp\htdocs\project_management\application\controllers\Files.php 1496
ERROR - 2020-07-14 13:00:35 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\controllers\Files.php 1526
ERROR - 2020-07-14 13:00:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:00:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:00:43 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:00:46 --> Severity: Notice --> Undefined variable: folder_parent C:\xampp\htdocs\project_management\application\controllers\Files.php 1526
ERROR - 2020-07-14 13:00:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:01:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:01:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:02:26 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:02:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:03:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:03:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:03:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:04:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:04:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:11:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:11:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:12:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:12:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:12:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:13:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:13:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:13:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:13:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:13:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:13:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:13:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:13:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:14:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:14:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:14:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:14:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:14:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:14:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:15:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:15:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:15:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:15:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:15:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:15:35 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:16:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:16:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:16:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:17:02 --> Severity: Notice --> Undefined variable: file C:\xampp\htdocs\project_management\application\controllers\Files.php 1503
ERROR - 2020-07-14 13:17:02 --> Severity: Notice --> Trying to get property 'projectid' of non-object C:\xampp\htdocs\project_management\application\controllers\Files.php 1503
ERROR - 2020-07-14 13:17:02 --> Severity: Notice --> Undefined variable: file C:\xampp\htdocs\project_management\application\controllers\Files.php 1504
ERROR - 2020-07-14 13:17:02 --> Severity: Notice --> Trying to get property 'userid' of non-object C:\xampp\htdocs\project_management\application\controllers\Files.php 1504
ERROR - 2020-07-14 13:17:02 --> Severity: Notice --> Undefined variable: file C:\xampp\htdocs\project_management\application\controllers\Files.php 1514
ERROR - 2020-07-14 13:17:02 --> Severity: Notice --> Trying to get property 'folder_flag' of non-object C:\xampp\htdocs\project_management\application\controllers\Files.php 1514
ERROR - 2020-07-14 13:20:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:20:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:20:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:21:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:21:37 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:21:40 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::and_where() C:\xampp\htdocs\project_management\application\models\File_model.php 370
ERROR - 2020-07-14 13:21:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:21:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:22:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:22:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:22:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:23:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:23:16 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:23:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:23:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:23:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:24:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:24:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:24:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:24:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:25:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:25:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:25:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:25:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:25:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:25:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:25:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:25:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:25:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:25:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:26:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:26:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:27:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:27:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:27:26 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:27:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:28:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:28:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:28:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:29:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:31:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:31:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:31:52 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:31:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:32:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:32:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:33:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:33:15 --> Severity: Notice --> Undefined offset: 4 C:\xampp\htdocs\project_management\application\views\files\index.php 44
ERROR - 2020-07-14 13:33:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:33:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:33:34 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:33:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:33:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:34:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:34:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:34:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:34:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:34:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:34:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:34:48 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:35:03 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:35:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:35:12 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:35:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:37:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:37:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:38:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:38:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:38:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:38:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:38:30 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:42:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:42:17 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:42:20 --> 404 Page Not Found: Files/delete_folder
ERROR - 2020-07-14 13:42:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:42:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:43:06 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:43:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:43:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:44:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:44:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:44:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:44:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:44:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:44:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:45:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:45:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:45:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:45:44 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 13:47:45 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 13:47:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:03:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:03:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:03:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:04:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:06:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:07:54 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\project_management\application\controllers\Files.php 409
ERROR - 2020-07-14 14:07:58 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\project_management\application\controllers\Files.php 409
ERROR - 2020-07-14 14:07:59 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:08:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:08:03 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\project_management\application\controllers\Files.php 409
ERROR - 2020-07-14 14:08:05 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:08:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:09:00 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:09:22 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:10:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:10:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:10:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:10:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:10:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:10:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:11:23 --> Query error: Unknown column 'projects.name' in 'field list' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
WHERE `project_files`.`delete_status` = 'Yes'
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:11:36 --> Query error: Unknown column 'users.username' in 'field list' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
WHERE `project_files`.`delete_status` = 'Yes'
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:12:20 --> Query error: Unknown column 'projects.name' in 'field list' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
WHERE `project_files`.`delete_status` = 'Yes'
AND `project_files`.`delete_status` = '0'
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:12:23 --> Query error: Unknown column 'projects.name' in 'field list' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
WHERE `project_files`.`delete_status` = 'Yes'
AND `project_files`.`delete_status` = '0'
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:12:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:12:27 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:12:29 --> Query error: Unknown column 'projects.name' in 'field list' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
WHERE `project_files`.`delete_status` = 'Yes'
AND `project_files`.`delete_status` = '0'
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:12:46 --> Query error: Unknown column 'projects.name' in 'field list' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
WHERE `project_files`.`delete_status` = 'Yes'
AND `project_files`.`folder_parent` = '0'
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:13:25 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:13:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:14:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:14:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:15:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:15:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:15:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:15:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:15:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:34 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:42 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:16:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:16 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:29 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:44 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:17:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:17:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:18:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:18:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:18:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:18:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:18:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:18:42 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:18:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:19:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:19:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:20:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:21:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:21:46 --> Severity: Notice --> Undefined offset: 4 C:\xampp\htdocs\project_management\application\views\files\index.php 44
ERROR - 2020-07-14 14:21:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:21:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:21:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:22:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:22:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:22:46 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:22:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:22:52 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:23:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `pro' at line 7 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`delete_status` = 'Yes'
AND `project_files`.`folder_parent` = `>` '0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `pro' at line 7 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`delete_status` = 'Yes'
AND `project_files`.`folder_parent` = `>` '0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:23:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `pro' at line 7 - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`, `projects`.`name` as `project_name`, `users`.`username`, `users`.`avatar`, `users`.`online_timestamp`
FROM `project_files`
LEFT OUTER JOIN `projects` ON `projects`.`ID` = `project_files`.`projectid`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`delete_status` = 'Yes'
AND `project_files`.`folder_parent` <= `>` '0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 14:29:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:29:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:29:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:30:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:32:36 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:32:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:32:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:32:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:32:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:32:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:33:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:34:24 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:34:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:34:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 14:37:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:38:57 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:39:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:40:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:40:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:42:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:43:02 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:43:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:50:20 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:47 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:48 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:49 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 410
ERROR - 2020-07-14 14:50:50 --> Severity: Notice --> Undefined property: stdClass::$upload_file_name C:\xampp\htdocs\project_management\application\controllers\Files.php 415
ERROR - 2020-07-14 14:51:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:01:25 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:01:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:01:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:01:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:01:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:02:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:02:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:02:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:02:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:02:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:02:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:02:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:02:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:02:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:02:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:03:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:03:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:03:30 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:03:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:03:38 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:04:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:04:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:05:08 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:05:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:05:27 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:05:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:05:45 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:09:59 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:10:15 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:10:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:10:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:10:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:11:28 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:11:56 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:12:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:12:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:15:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:20:53 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:20:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:21:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:21:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:21:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:21:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:21:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:21:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:21:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:21:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:21:40 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:21:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:23:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:23:50 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:23:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:32:41 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:32:44 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:33:36 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:34:22 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:35:16 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:40:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:40:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:40:21 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:40:51 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:41:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:41:32 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:42:00 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:42:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:17 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:42:20 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:23 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:43 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:48 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:42:52 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:43:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:43:32 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:50 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:43:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:44:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:44:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:45:13 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:45:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:51:26 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:51:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:51:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:51:47 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:51:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 15:51:54 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:52:58 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 15:58:35 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:01:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:01:24 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:01:33 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:08:19 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:08:27 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:10:27 --> Query error: Unknown column 'projects.status' in 'where clause' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`
FROM `project_files`
JOIN `users` ON `users`.`ID` = `project_files`.`userid`
WHERE   (
`project_files`.`delete_status` = 'Yes'
AND `project_files`.`folder_parent` >= '0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 16:10:41 --> Query error: Unknown column 'projects.status' in 'where clause' - Invalid query: SELECT `project_files`.`ID`, `project_files`.`userid`, `project_files`.`folder_flag`, `project_files`.`file_name`, `project_files`.`extension`, `project_files`.`file_size`, `project_files`.`file_type`, `project_files`.`folder_name`, `project_files`.`upload_file_name`, `project_files`.`timestamp`, `project_files`.`file_url`, `project_files`.`folder_parent`
FROM `project_files`
WHERE   (
`project_files`.`delete_status` = 'Yes'
AND `project_files`.`folder_parent` >= '0'
AND (`projects`.`status` =0 OR `projects`.`status` IS NULL)
 )
ORDER BY `project_files`.`folder_flag` DESC, `project_files`.`ID` DESC
ERROR - 2020-07-14 16:24:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:38:09 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:38:12 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:38:12 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:38:16 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:38:33 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' C:\xampp\htdocs\project_management\application\models\File_model.php 236
ERROR - 2020-07-14 16:39:13 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:40:16 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:41:55 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:42:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:42:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 16:44:57 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:47:16 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:48:41 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::unition_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:51:12 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::unition_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:51:26 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::unition_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:51:38 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 241
ERROR - 2020-07-14 16:51:46 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 241
ERROR - 2020-07-14 16:52:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:52:19 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:53:07 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:53:11 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:53:23 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:53:28 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:54:01 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:54:10 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:54:34 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 16:55:29 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:56:07 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 241
ERROR - 2020-07-14 16:56:48 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 16:57:37 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' C:\xampp\htdocs\project_management\application\models\File_model.php 258
ERROR - 2020-07-14 16:57:45 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::select() C:\xampp\htdocs\project_management\application\models\File_model.php 241
ERROR - 2020-07-14 16:57:52 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 16:58:15 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 16:58:16 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 16:58:35 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 16:58:46 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 240
ERROR - 2020-07-14 16:59:06 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 16:59:16 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::union_start() C:\xampp\htdocs\project_management\application\models\File_model.php 226
ERROR - 2020-07-14 17:01:31 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:01:37 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:01:55 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:01:58 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:02:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:03:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:03:09 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:05:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:05:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:05:39 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:05:51 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:05:54 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:05:56 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:06:02 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:06:06 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:06:38 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT * FROM project_files
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
ERROR - 2020-07-14 17:06:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:07:04 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:07:40 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:07:41 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:07:46 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:01 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:05 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:08 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:11 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:18 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:08:21 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:09:49 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:09:53 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:10:10 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:20:07 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:20:14 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:20:47 --> 404 Page Not Found: Uploads/53b558df9bdebefa1b5e5141b609686b.png
ERROR - 2020-07-14 17:21:01 --> Query error: The used SELECT statements have a different number of columns - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent))
ERROR - 2020-07-14 17:22:11 --> Query error: The used SELECT statements have a different number of columns - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent))
ERROR - 2020-07-14 17:22:13 --> Query error: The used SELECT statements have a different number of columns - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent))
ERROR - 2020-07-14 17:22:14 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:22:15 --> Query error: The used SELECT statements have a different number of columns - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0
		group by folder_parent))
ERROR - 2020-07-14 17:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent,0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent,0))
ERROR - 2020-07-14 17:24:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent,0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent,0))
ERROR - 2020-07-14 17:26:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent',0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by 'project_files.folder_parent',0))
ERROR - 2020-07-14 17:26:04 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:26:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent',0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by 'project_files.folder_parent',0))
ERROR - 2020-07-14 17:26:38 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent',0)
ERROR - 2020-07-14 17:26:39 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:27:15 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:27:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=',0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by 'project_files.folder_parent>=',0))
ERROR - 2020-07-14 17:27:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=',0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by 'project_files.folder_parent>=',0))
ERROR - 2020-07-14 17:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=',0)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by 'project_files.folder_parent>=',0))
ERROR - 2020-07-14 17:28:38 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=',0)
ERROR - 2020-07-14 17:28:41 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by 'project_files.folder_parent>=',0)
ERROR - 2020-07-14 17:29:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:29:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:29:44 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:29:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:29:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:30:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:30:03 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:30:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_fla' at line 12 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(SelectSELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0 and project_files.folder_parent IN (SELECT project_files.folder_parent FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 0
		group by project_files.folder_parent))
ERROR - 2020-07-14 17:31:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 17 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 17 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:31:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 17 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:31:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 17 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>0)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:32:14 --> Query error: Unknown column '0' in 'group statement' - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent,0)
		
ERROR - 2020-07-14 17:32:16 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:32:18 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:32:29 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:32:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0)' at line 10 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>=,0)
		
ERROR - 2020-07-14 17:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>0)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>0)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>0)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>=0)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
ERROR - 2020-07-14 17:35:20 --> Severity: Notice --> Undefined offset: 5 C:\xampp\htdocs\project_management\application\views\files\index.php 43
ERROR - 2020-07-14 17:35:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent>=0)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent>=0)
ERROR - 2020-07-14 17:35:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 23 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:36:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 17 - Invalid query: (SELECT project_files.ID, project_files.userid, 
		project_files.folder_flag, project_files.file_name, 
		project_files.extension, project_files.file_size,
		project_files.file_type, project_files.folder_name,
		project_files.upload_file_name, project_files.timestamp,
		project_files.folder_parent, project_files.projectid,
		project_files.file_url FROM project_files
		WHERE project_files.delete_status = 'Yes' and 
		project_files.folder_flag = 1
		group by project_files.folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:37:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
		UNION
		(Select * FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 0 and folder_parent IN (SELECT folder_parent FROM project_files
		WHERE delete_status = 'Yes' and 
		folder_flag = 1
		group by folder_parent)
ERROR - 2020-07-14 17:37:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 11 - Invalid query: (SELECT * FROM project_files
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
