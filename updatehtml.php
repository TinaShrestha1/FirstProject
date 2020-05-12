<?php
$id=$_GET['id'];
echo $id;
?>


<html>
	<body>
                <h1><center>Update</center></h1>
		
		<form action="update.php" method="post">
                        <center>
			new fname:<input type="text"name="newfname"/>
		</br><br>
			new lname:<input type="text"name="newlname"/>
        </br></br>
        	 New Email:<input type="text"name="email"/>
        </br>
        <br>
        	New password:<input type="password" name="password"/>
        
        <br>
        <br>
        	<p><input type="submit"name="submit"value="Update"/>
                 <input type="hidden" name="id" value="<?php echo $id;?>">   
        	<input type="reset"name="reset"value="Delete"/></p>
        </center>
</form>
</body>
</html>

        