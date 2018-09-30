
<?php
 require '../dbh/dbh.php';

if (isset($_POST['title']) && isset($_POST['message']) && isset($_POST['Category']) && isset($_POST['tags']))
          {
            session_start();
            $title        = $_POST['title'];
            $message        = $_POST['message'];
            $Audience      = $_POST['Category'];
            $date    = date("Y/m/d");
            $time = date("h:i:sa");
            $email        = $_POST['tags'];
            $sender = $_SESSION['Name']." ".$_SESSION['Surname'];

           ;

          $sql = "INSERT INTO notications (Audience,Notification_date,Notification_time,Notification,Sender) VALUES('$Audience','$date','$time','$message','$sender')";

          if ($Conn->query($sql) === TRUE)
          {
            header("location: ../pages/department_coordinator.php");
          }
            else{
                  echo "system Error: " . $sql . "<br>" . $Conn->error;
                }
    }else{
  echo "internal application error". $sql . "<br>" . $Conn->error;
}

?>