<?php
include('db.php');
$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM users WHERE id=$id";
$result=mysqli_query($con,$sql);
    if($result){
        echo"Delete successfully";
    }
    else
    {
        die(mysqli_connect_error());
    }
