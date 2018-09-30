<?php
require '../dbh/dbh.php';

if (isset($_POST['Level']) && isset($_POST['program']) && isset($_POST['title']) && isset($_POST['program'])  && isset($_POST['description']))
{

        $Level        = $_POST['Level'];
        $program      = $_POST['program'];
        $description  = $_POST['description'];
        $title        = $_POST['title'];

        $sql ="INSERT INTO projects (level,project_title,project_description,Department) VALUES('$Level','$title','$description','$program')";


          if ($Conn->query($sql) === TRUE)
          {
                    $sql = "SELECT Project_id FROM projects WHERE project_title = '$title' AND project_description = '$description'";
                    $result = mysqli_query($Conn,$sql);
                    $confirm = mysqli_num_rows($result);

                    $input1        = $_POST['input1'];
                    $input2        = $_POST['input2'];
                    $input3        = $_POST['input3'];
                    $input4        = $_POST['input4'];

                    if ($Level='Hit400') {
                        $sql = "INSERT INTO project_developers(Project_id,Developer_id) VALUES ($confirm,'$input1')";
                        if ($Conn->query($sql) === TRUE){
                                echo "yaita";
                        }
                        # code...
                    }else{
                         $sql = "INSERT INTO project_developers(Project_id,Developer_id) VALUES ($confirm,'$input1'),($confirm,'$input2'),($confirm,'$input3'),($confirm,'$input4')";
                         if ($Conn->query($sql) === TRUE){
                            echo "taita";

                         }
                    }


           
                
                                     
          }
            else{
                  echo "system Error: " . $sql . "<br>" . $Conn->error;
                }
}
