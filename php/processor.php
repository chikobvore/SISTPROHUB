<?php
//function to display project phases and items to be accessed for hit200 projects 
function assessments200()
{
  require '../dbh/dbh.php';
  $Department = $_SESSION['Department'];
  $sql ="SELECT Stage,Assessment_id FROM assessment_details WHERE Department ='$Department' AND Course_code ='Hit200' ";
  // Assessment_id is used for sele
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
            while ($row = mysqli_fetch_assoc($result))
           {
            $id = $row['Assessment_id'];
            echo  "<li class='sub-menu'>"."<a href='javascript:;'' class=''>"."<span>"."<b>".$row['Stage']."</b>"."</span>"."<span class='menu-arrow arrow_carrot-right'>"."</span>"."</a>"."<ul class='sub'>";
              echo "<li>"."<a class='' data-toggle='modal' href='#mod1'>"."New"."</a>"."</li>";

              $sqls ="SELECT Item_assessed FROM assessment_lines WHERE Assessment_id = $id"; 
              $results = mysqli_query($Conn,$sqls);
              $confirms = mysqli_num_rows($results);

              if ($confirms>0) {
                while ($rows = mysqli_fetch_assoc($results))
                 {
                  echo "<li>"."<a class='' href='#'>".$rows['Item_assessed']."</a>"."</li>";
                  continue;
                 }
                 echo "</ul>"."</li>";
               }else
               {
                echo "<li>"."<a class='' data-toggle='modal' href='#myModal4'>"."Add items"."</a>"."</li>"."</ul>"."</li>";
               }
               continue;

        }
  }
}
//function to display project phases and items to be accessed for hit400 projects 
function assessments400()
{
  require '../dbh/dbh.php';
  $Department = $_SESSION['Department'];
  $sql ="SELECT Stage,Assessment_id FROM assessment_details WHERE Department ='$Department' AND Course_code ='Hit400' ";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
            while ($row = mysqli_fetch_assoc($result))
           {
            $id = $row['Assessment_id'];
            echo  "<li class='sub-menu'>"."<a href='javascript:;'' class=''>"."<span>"."<b>".$row['Stage']."</b>"."</span>"."<span class='menu-arrow arrow_carrot-right'>"."</span>"."</a>"."<ul class='sub'>";

              $sqls ="SELECT Item_assessed FROM assessment_lines WHERE Assessment_id = $id"; 
              $results = mysqli_query($Conn,$sqls);
              $confirms = mysqli_num_rows($results);

              if ($confirms>0) {
                while ($rows = mysqli_fetch_assoc($results))
                 {
                  echo "<li>"."<a class='' href='#'>".$rows['Item_assessed']."</a>"."</li>";
                  continue;
                 }
                 echo "</ul>"."</li>";
               }else
               {
                echo "<li>"."<a class='' data-toggle='modal' href='jj.php'>"."Add items"."</a>"."</li>"."</ul>"."</li>";
               }
               continue;

        }
  }
}
function editing()
{
  require '../dbh/dbh.php';
  $Department = $_SESSION['Department'];
  $sql ="SELECT Stage FROM assessment_details WHERE Department ='$Department' AND Course_code ='Hit200' ";
      $result = mysqli_query($Conn,$sql);
      $confirm = mysqli_num_rows($result);

      if ($confirm>0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo "<option name='dpt'>".$row['Stage']."</option>";
        }
      }
      else{
        echo "system Error: " . $sql . "<br>" . $Conn->error;
      }



}
function hit200()
{
  require '../dbh/dbh.php';
  $Department = $_SESSION['Department'];
  $sql ="SELECT project_title FROM projects WHERE  Course_code ='Hit200' ";
      $result = mysqli_query($Conn,$sql);
      $confirm = mysqli_num_rows($result);

      if ($confirm>0) {
        while ($row = mysqli_fetch_assoc($result)){
          #echo "<li>"."<a class='' data-toggle='modal' href='#mod9'>".$row['project_title']."</a>"."</li>";
        }
      }
      else{
        echo "system Error: " . $sql . "<br>" . $Conn->error;
      }



}
function hit400()
{
  require '../dbh/dbh.php';
  $Department = $_SESSION['Department'];
  $sql ="SELECT project_title FROM projects WHERE  Course_code ='Hit400' ";
      $result = mysqli_query($Conn,$sql);
      $confirm = mysqli_num_rows($result);

      if ($confirm>0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo $row['project_title'];
            #echo "<li>"."<a class='' data-toggle='modal' href='#mod9'>".$row['project_title']."</a>"."</li>";
        }
      }
      else{
        echo "system Error: " . $sql . "<br>" . $Conn->error;
      }



}
function lecturers()
{
  require '../dbh/dbh.php';
  $Department = $_SESSION['Department'];
  $sql ="SELECT Name,Surname,Staff_id FROM lecturers WHERE Department ='$Department' ";
      $result = mysqli_query($Conn,$sql);
      $confirm = mysqli_num_rows($result);

      if ($confirm>0) {
        while ($row = mysqli_fetch_assoc($result)){
          $value = $row['Staff_id'];
          echo "<option value = '$value'>".$row['Name']." ".$row['Surname']."</option>";
        }
      }
      else{
        echo "system Error: " . $sql . "<br>" . $Conn->error;
      }



}

