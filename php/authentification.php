<?php
 require '../dbh/Bcrypt.php';
 require '../dbh/dbh.php';
 
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql ="SELECT Name,Surname,Reg_number,Password,Status FROM students WHERE Reg_number = '$username'";

	$result = mysqli_query($Conn,$sql);
	if ($result->num_rows >0)

	{
		while($row = $result->fetch_assoc())
		{
			$verification =Bcrypt::checkPassword($password,$row['Password']);

	        if ($verification)
	        {
	        	if($row['Status']== 'OFFLINE')
	        	{
	
	        		  $sql ="UPDATE students SET Status = 'ONLINE' WHERE Reg_number= '$username'";
                                    if ($Conn->query($sql) === TRUE)
                                    {	
                                    		session_start();
                                    		$_SESSION['Name'] = $row['Name'];
								        	$_SESSION['Surname'] = $row['Surname'];	
								        	$_SESSION['Reg_number'] = $row['Reg_number'];
                                            header("location: ../pages/student.php");     
                                    }else{
                                    	 echo "Error: " . $sql . "<br>" . $Conn->error;
                                        }
                   }else
                   {
                   	header("location: ../pages/denied.html"); 
                   }
           
      		}
  		}

     }else
	     		{
	     			$sql ="SELECT Name,Surname,Status,Password,Status,Role,Department,Staff_id FROM lecturers WHERE Staff_id = '$username'";

					$result = mysqli_query($Conn,$sql);
					if ($result->num_rows >0)

					{
						while($row = $result->fetch_assoc())
						{
							$verification =Bcrypt::checkPassword($password,$row['Password']);

	        				if ($verification)
	        				{
	        					if($row['Status']== 'OFFLINE')
	        							{
	
	        		  						$sql ="UPDATE lecturers SET Status = 'ONLINE' WHERE Staff_id = '$username'";
                                    		if ($Conn->query($sql) === TRUE)
                                    			{	
                                    			

                                    				if ($row['Role']== 'Supervisor') {
                                    						session_start();
                                    						$_SESSION['Name'] = $row['Name'];
								        					              $_SESSION['Surname'] = $row['Surname'];	
								        					              $_SESSION['Staff_id'] = $row['Staff_id'];
								        					              $_SESSION['Department'] = $row['Department'];
                                    						header("location: ../pages/department_coordinator.php"); 

                                    				}
                                    				elseif ($row['Role']== 'co-ordinator') {
                                    						session_start();
                                    				  	$_SESSION['Name'] = $row['Name'];
              								        					$_SESSION['Surname'] = $row['Surname'];	
              								        					$_SESSION['Staff_id'] = $row['Staff_id'];
              								        					$_SESSION['Department'] = $row['Department'];
                                    					   header("location: ../pages/department_coordinator.php"); 

                                    				}elseif($row['Chairperson']){
                                    						session_start();
                                    						$_SESSION['Name'] = $row['Name'];
              								        					$_SESSION['Surname'] = $row['Surname'];	
              								        					$_SESSION['Staff_id'] = $row['Staff_id'];
              								        					$_SESSION['Department'] = $row['Department'];
                                    					    header("location: ../pages/department_coordinator.php"); 

                                    				}elseif($row['Role']== 'Administrator'){
                                    						session_start();
                                    						$_SESSION['Name'] = $row['Name'];
              								        					$_SESSION['Surname'] = $row['Surname'];	
              								        					$_SESSION['Staff_id'] = $row['Staff_id'];
              								        					$_SESSION['Department'] = $row['Department'];
                                                $_SESSION['id'] = $row['Role'];
                                    					    header("location: ../pages/index.php"); 

                                    				}else{
                                    					header("location: ../pages/login.php"); 
                                    				}    
                                   			}else{
                                    			 echo "Error: " . $sql . "<br>" . $Conn->error;
                                        		}
                   				}else
                   						{
                   							header("location: ../pages/denied.html"); 
                   						}
            
	        					}
	       				}
			
    				}else
    					{
    						echo "not found";
    					}
    				}
    			}
    				