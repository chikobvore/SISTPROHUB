<?php
 require '../dbh/dbh.php';
 require '../dbh/Bcrypt.php';
 // hash the password => returns hashed password
   // Bcrypt::hashPassword($password);
    
    // check $password against the $hashedPassword => returns true/false
  //  Bcrypt::checkPassword($password, $hashedPassword);
  if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['p1']) && isset($_POST['p2'])) 
  {

              $username = $_POST['username'];
              $surname = $_POST['email'];
              $p1 = $_POST['p1'];
              $p2 = $_POST['p2'];

              if ($p1 === $p2){

                $pass = Bcrypt::hashPassword($p1);
                $sql = "SELECT Name From students WHERE Reg_number = '$username'";
                $result = mysqli_query($Conn,$sql);
                $confirm = mysqli_num_rows($result);

                if ($confirm>0)
                {
                  $sql ="UPDATE students SET password ='$pass'  WHERE Reg_number = '$username'";
                  if ($Conn->query($sql) === TRUE)
                  {
                                    header("location: ../pages/login.php");  
                  }else
                       {
                                    echo "Error: " . $sql ."<br>" . $Conn->error;
                        }

                }else{

                          $sql = "SELECT Name From lecturers WHERE Staff_id = '$username'";
                          $result = mysqli_query($Conn,$sql);
                          $confirm = mysqli_num_rows($result);

                          if ($confirm>0)
                          {
                              $sql ="UPDATE lecturers SET password ='$pass' WHERE Staff_id = '$username'";
                              if ($Conn->query($sql) === TRUE)
                              {
                                                header("location: ../pages/login.php");  
                              }else
                                   {
                                                echo "Error: " . $sql ."<br>" . $Conn->error;
                                    }
                            # code...
                          }else
                                {

                                   header("location: ../pages/500.html");
                                  }
                        }
              }
  }else {echo "error";}
          
  