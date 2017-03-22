<?php
$sanitation_errors = array();
if (isset($_POST['search'])) {

	if (!filter_var($_POST["Classification_Name"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitaion_errors[] = "Classification_Name";
	}
	if (!filter_var($_POST["Classification_Number"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitaion_errors[] = "Classification_Number";
	}
	if (!filter_var($_POST["Manufacturer"], FILTER_SANITIZE_STRING)) {
		$sanitaion_errors[] = "Manufacturer";
	}
	if (!filter_var($_POST["Brand"], FILTER_SANITIZE_STRING)) {
		$sanitaion_errors[] = "Brand";
	}
	if (!filter_var($_POST["CNF_CODE"], FILTER_SANITIZE_NUMBER_FLOAT)) {
		$sanitaion_errors[] = "CNF_CODE";
	}
	if (!filter_var($_POST["Cluster_Number"], FILTER_SANITIZE_NUMBER_INT)) {
		$sanitaion_errors[] = "Cluster_Number";
	}
	if (!filter_var($_POST["Description"], FILTER_SANITIZE_STRING)) {
		$sanitaion_errors[] = "Description";
	}
	if (!filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitaion_errors[] = "Comments";
	}
	if (!filter_var($_GET["ProductID"], FILTER_SANITIZE_NUMBER_INT)) {
		$sanitaion_errors[] = "ProductID";
	}
}

/*

FILTER_SANITIZE_NUMBER_FLOAT : CNF_CODE
FILTER_SANITIZE_NUMBER_INT   : ProductID, Cluster_Number
FILTER_SANITIZE_STRING       : Description, Brand, Manufacturer, Comments

array (
  'Classification_Name'   => '',
  'Classification_Number' => '',
  'Manufacturer'          => 'ANNIES HOMEGROWN',
  'Brand'                 => '',
  'CNF_CODE'              => '',
  'Cluster_Number'        => '',
  'Description'           => 'ANNIES HOMEGROWN MACARONI & CHEESE CUP GLTN FREE',
  'Comments'              => 'hello world',
  'search'                => '',
)

array(9) {
  ["Classification_Name"]   => string(0) ""
  ["Classification_Number"] => string(0) ""
  ["Manufacturer"]          => string(16) "ANNIES HOMEGROWN"
  ["Brand"]                 => string(0) ""
  ["CNF_CODE"]              => string(0) ""
  ["Cluster_Number"]        => string(0) ""
  ["Description"]           => string(48) "ANNIES HOMEGROWN MACARONI & CHEESE CUP GLTN FREE"
  ["Comments"]              => string(11) "hello world"
  ["search"]                => string(0) ""
}

Connection: T(MYSQL)  H(10.148.178.247)  O(mysql)  D(fcdr)   at 08:44
+----------------+-------------+------+-----+---------------------+----------------+
| Field          | Type        | Null | Key | Default             | Extra          |
+----------------+-------------+------+-----+---------------------+----------------+
| ProductID      | int(11)     | NO   | PRI | NULL                | auto_increment |
| Description    | text        | YES  |     | NULL                |                |
| Brand          | text        | YES  |     | NULL                |                |
| Manufacturer   | text        | YES  |     | NULL                |                |
| Comments       | text        | YES  |     | NULL                |                |
| Create_Date    | timestamp   | NO   |     | CURRENT_TIMESTAMP   |                |
| Last_Edit_Date | timestamp   | NO   |     | 0000-00-00 00:00:00 |                |
| CNF_CODE       | varchar(10) | YES  |     | NULL                |                |
| Cluster_Number | int(11)     | YES  |     | NULL                |                |
| Last_Edited_By | text        | YES  |     | NULL                |                |
+----------------+-------------+------+-----+---------------------+----------------+

UPDATE Product
   SET Description    = ?,
       Brand          = ?,
       Manufacturer   = ?,
       Comments       = ?,
       CNF_CODE       = ?,
       Cluster_Number = ?,
       Last_Edited_By = ?
 WHERE ProductID      = ?

*/

?>
