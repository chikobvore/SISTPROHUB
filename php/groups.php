
<?php
 require '../dbh/dbh.php';

if (isset($_POST['lecturer']) && isset($_POST['input1']))
          {
            session_start();
            $lecturer      = $_POST['lecturer'];
            $input1        = $_POST['input1'];
            $input2        = $_POST['input2'];
            $input3        = $_POST['input3'];
            $input4        = $_POST['input4'];
            $Department = $_SESSION['Department'];
            $sql ="SELECT Group_id FROM group_members";
            $result = mysqli_query($Conn,$sql);
            $confirm = mysqli_num_rows($result)+1;

          $sql = "INSERT INTO group_members (Group_id,Reg_number,Supervisor) VALUES($confirm,'$input1','$lecturer'),($confirm,'$input2','$lecturer'),($confirm,'$input3','$lecturer'),($confirm,'$input4','$lecturer')";

          if ($Conn->query($sql) === TRUE)
          {
            header("location: ../pages/department_coordinator.php");
          }
            else{
                  echo "internal application error". $sql . "<br>" . $Conn->error;
                  #header("location: ../pages/error.html");
                }
    }else{
  echo "internal application error". $sql . "<br>" . $Conn->error;
}

?>