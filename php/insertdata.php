
<?php
 require '../dbh/dbh.php';

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['reg_number']) &&  isset($_POST['physical_address']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['dob']) && isset($_POST['Gender']) && isset($_POST['program']))
          {
            $name         = $_POST['name'];
            $surname      = $_POST['surname'];
            $reg_number   = $_POST['reg_number'];
            $paddress     = $_POST['physical_address'];
            $email        = $_POST['email'];
            $phone        = $_POST['phone'];
            $dob          = $_POST['dob'];
            $Gender       = $_POST['Gender'];
            $program   = $_POST['program'];

            if ($program == 'Software Engineering') {
              $Department = 'SE';
              # code...
            }
            elseif ($program == "Computer Science") {
              $Department = 'CS';
              # code...
            }
            elseif($program == 'Information Technology')
            {
              $Department = 'IT';
            }
            else
            {
              $Department ='ISA';
            }

          $sql = "INSERT INTO students (Name,Surname,Reg_number,Program,Department,Email_address,Physical_address,Contact,Gender,Date_of_birth) VALUES('$name','$surname','$reg_number','$program','$program','$email','$paddress','$phone','$Gender','$dob')";

          if ($Conn->query($sql) === TRUE) {
                                     header("location: ../pages/index.php");
                              }
                              else{
                                    echo "Error: " . $sql . "<br>" . $Conn->error;
                              }
    }else{
  echo "failed";
}

?>