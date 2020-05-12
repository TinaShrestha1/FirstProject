<?php
include('db.php');
$id=$_POST['id'];
echo $id;
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="UPDATE users SET fname='$name', email='$email', password='$password' WHERE id='$id'";

global $con;
$result=mysqli_query($con,$sql);
	if($result){

		echo "update sucessfull";
	}
	else{
		echo "update not sucessfull";
	
}
exit();