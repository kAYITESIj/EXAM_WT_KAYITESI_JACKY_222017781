<?php 
$db=new mysqli('localhost','root','','landscape_design_service');
$delete=$_GET['delete'];
$del=mysqli_query($db,"DELETE FROM ordering WHERE orderID='$delete' ");
if ($del) {
	// code...
	header('location:retrirve.php');

}else{
	echo "no";
}



 ?>