<?php
	//echo "This is a db file";
	//Why no ending tag in php
	/*connect to database*/
    $con = mysqli_connect('localhost:3307','root','','bca');
    if($con){
    	echo"successfully connected";
        }
    else{
    	die(mysqli_connect_error());
        }
    /*if (mysql_connect_error()) {
    	printf(format:"connect failed:%s\n",mysql_connect_error())
    }*/
    //for get method
    /*echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    //for display information only
    echo $_GET['fname'];*/
    
    //for post method
   /* echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //echo $_POST['fname'];
    */