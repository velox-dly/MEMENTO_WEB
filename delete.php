<?php 
	include 'connect.php';
	$id=$_GET['deleteid'];
	//echo $id
		$sql="delete from `customer data` where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		//echo "Data Deleted Successfully ";
		header('location: Edit Record.php'); // if want lang naman punta ulit sya sa list to check if nadelete nga
	}else{
		die(mysqli_error($con));

	}
?>
// TODO:  EEDIT RIN ITO  