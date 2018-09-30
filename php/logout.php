<?php
 require '../dbh/dbh.php';

 session_start();
 $username = $_SESSION['Reg_number'];
 echo $username;

 $sql ="UPDATE students SET Status = 'OFFLINE' WHERE Reg_number = '$username'";
 if ($Conn->query($sql) === TRUE)
 	{
 		session_destroy();
		header("location: ../pages/login.php");     
    }else{ 
    	 $username = $_SESSION['Staff_id'];

    	  $sql ="UPDATE lecturers SET Status = 'OFFLINE' WHERE Staff_id = '$username'";
    	  if ($Conn->query($sql) === TRUE)
 			{
 				session_destroy();
 				echo $username;

				#header("location: ../pages/login.php");     
    		}
    		else{
    			echo "Error: " . $sql . "<br>" . $Conn->error;
    		}
    		
    	}