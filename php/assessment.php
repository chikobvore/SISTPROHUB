
<?php
 require '../dbh/dbh.php';
 session_start();

if (isset($_POST['period']) && isset($_POST['level']) && isset($_POST['stage']) &&  isset($_POST['status']))
          {
            $period       = $_POST['period'];
            $level        = $_POST['level'];
            $status       = $_POST['status'];
            $stage        = $_POST['stage'];
            $Department   = $_SESSION['Department'];

          $sql = "INSERT INTO assessment_details (Period,Department,Course_code,Stage,Status) VALUES ('$period','$Department','$level','$stage','$status')";

          if ($Conn->query($sql) === TRUE) {
                                    header("location: ../pages/department_coordinator.php"); 
                              }
                              else{
                                    echo "Error: " . $sql . "<br>" . $Conn->error;
                              }
    }else{
  echo "failed";
}

?>