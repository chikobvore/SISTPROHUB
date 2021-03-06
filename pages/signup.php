<?php
  require '../dbh/dbh.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="../img/favicon.png">

  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <script type="text/javascript">
  function verify() {
    // body...
   var username = document.getElementById('1').value;
   var email = document.getElementById('2').value;
   var p1 = document.getElementById('3').value;
   var p2 = document.getElementById('4').value;
   if (username == ''||email ==''|| p1 ==''||p2 == '') {
    document.getElementById('alert').textContent = "Please fill all the fields";
    return false
   }
   else if(p1 !== p2)
   {
    document.getElementById('alert').textContent = "Password doesnt match";
    return false;
   }
   else
   {
    return true;
    
   }

  }
</script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" onsubmit="return verify()" action="../php/sign.php" method="POST">
      <div class="login-wrap">
        <p class="login-img" ><i class="icon_lock_alt"></i></p>
        <p style="color: red;" id="alert"></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="user id" autofocus required="" id="1" name="username">
        </div>
          <div class="input-group">
          <span class="input-group-addon"><i class="icon-envelope1"></i></span>
          <input type="text" class="form-control" placeholder="email" autofocus required="" id="2" name="email">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span> 
          <input type="password" class="form-control" placeholder="Password" required="" id="3" name="p1">
        </div>
         <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="re enter password" required="" id="4" name="p2">
        </div>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="#">Nyasha chikobvore </a>
        </div>
    </div>
  </div>


</body>

</html>
