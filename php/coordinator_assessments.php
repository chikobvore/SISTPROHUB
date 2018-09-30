<?php
 require '../dbh/dbh.php';
 session_start();
 
if(isset($_POST['dpt']) && isset($_POST['input1']))

{
  $Department = $_SESSION['Department'];

            $dpt       = $_POST['dpt'];
            $n1        = $_POST['input1'];
            $n2        = $_POST['input2'];
            $n3        = $_POST['input3'];
            $n4        = $_POST['input4'];
            $n5        = $_POST['input5'];
            $n6        = $_POST['input6'];
            $n7        = $_POST['input7'];
            $n8        = $_POST['input8'];
            $n9        = $_POST['input8'];
            $n10       = $_POST['input8'];

            $sql ="SELECT Assessment_id FROM assessment_details WHERE Department ='$Department' AND Course_code ='Hit200' ";
            $result = mysqli_query($Conn,$sql);
            $confirm = mysqli_num_rows($result);

            if ($confirm>0) {
              while ($row = mysqli_fetch_assoc($result)){
                $id = $row['Assessment_id'];
                echo $id;
              }

              }else{
                        echo "system Error: " . $sql . "<br>" . $Conn->error;
                      }
      

            $sql = "INSERT INTO assessment_lines(Assessment_id,item_assessed,Out_of) VALUES ($id,'$n1',$n2)($id,'$n3',$n4)($id,'$n5',$n6)($id,'$n7',$n8)($id,'$n9',$n10)";
                if ($Conn->query($sql) === TRUE)
                {
                  header("location: ../pages/department_coordinator.php");
                       }
                       else{
                        echo "system Error: " . $sql . "<br>" . $Conn->error;
                       }
                     }
                   


	