<?php include 'connection.php';?>
<?php


if(!empty($_POST))
{

	foreach($_POST as $field_name => $val)
	{
		//clean post values
		$field_userid = strip_tags(trim($field_name));
		$val = strip_tags(trim(mysqli_real_escape_string($conn,$val)));
		
		//from the fieldname:user_id we need to get user_id
		$split_data = explode(':', $field_userid);
		$user_id = $split_data[1];
		$field_name = $split_data[0];
		$packageid = $split_data[2];
		if(!empty($user_id) && !empty($field_name) )
		{
			//update the values
			$query = "UPDATE $dbname.Product_Component PC  INNER JOIN $dbname.Package P  ON P.PackageID = PC.PackageID SET PC.$field_name = '$val'  where PC.ComponentID='$user_id' AND P.PackageID = '$packageid'";
			$result = mysqli_query($conn,$query);
			if (!$result) {
				echo "ERRORS";
			}
		echo "Updated";
		} else {
			echo "Invalid Requests";
		}
	}
} else {
	echo "Invalid Requests";
}
?>