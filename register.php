<?php
include('db.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
     echo $fname;

    //insert data in database
    $sql="INSERT INTO users(Fname,Lname,email,password) VALUES('$fname','$lname','$email','$password')";
   // $sql.="VALUES('$fname','$lname','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"inserted successfully";
    }
    else
    {
        die(mysqli_connect_error());
    }
