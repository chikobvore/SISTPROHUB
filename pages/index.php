<?php

session_start();

if ($_SESSION['Name'] == '' || $_SESSION['Surname'] == '' || $_SESSION['id'] == 'Administator' ) {
    header("location: login.php");
}
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
  <link rel="shortcut icon" href="../img/favicon.ico">

  <title>SIST ProHub</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
  <link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../css/fullcalendar.css">
  <link href="../css/widgets.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/xcharts.min.css" rel=" stylesheet">
  <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<script type="text/javascript">
	function validate()
	{
		// body...
				var email = document.getElementById('email_id');
				var email2 = document.getElementById('email_id1');
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                if(email.value.match(mailformat)||email2.value.match(mailformat))
                {
                   return true;
                }
                else
                {
                	alert("invalid email address");

                }
     }
 </script>
</head>
<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header blue-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->

     <b style="font-family: 'Merriweather Sans',sans-serif;"> <a href="tel:2634774142236" class="logo">+263 4 7741 422 - 36 | </a><a class="logo">sist@hit.ac.zw</a></b>
      <!--<a href="index.html" >SIST <span class="lite">PROJECT EVALUATOR</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['Name']." ".$_SESSION['Surname']; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i>Settings</a>
              </li>
              <li>
                <a href="../php/logout.php"><i class="icon_key_alt"></i> Log Out</a>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>

          <li class="sub-menu">
                        <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>New</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" data-toggle="modal" href="#student_modal">Student</a></li>
              <li><a class="" data-toggle="modal" href="#lecture_modal">Lecturer</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Projects</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                  <li class="sub-menu">
                  <a href="javascript:;" class="">
                          <span>Hit200</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <li><a class="" data-toggle="modal" href="#mod9">New</a></li>
              <?php #hit200(); ?>
     

                  <li class="sub-menu">
                  <a href="javascript:;" class="">
                          <span>Hit400</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
              <li><a class="" data-toggle="modal" href="#mod9">New</a></li>
              <?php #hit400(); ?>
     
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Project Phases</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#">Proposals</a></li>
              <li><a class="" href="#">concept development</a></li>
              <li><a class="" href="#">Progress review</a></li>
              <li><a class="" href="#">Prototype</a></li>
              <li><a class="" href="#">Documentations</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="sist/sist/_page_id_54_wordpress.html">
                          <i class="fa fa-users"></i>
                          <span>Guest</span>
                      </a>
          </li>
          <li>
            <a class="" href="#">
                          <i class="icon_piechart"></i>
                          <span>Statistics</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Sessions</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#">Hit 200</a></li>
              <li><a class="" href="#">Hit 400</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>More</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#">Profile</a></li>
              <li><a class="" href="#"><span>&nbsp Access Students</span></a></li>
              <li><a class="" href="#"><span>Contact Page</span></a></li>
              <li><a class="" href="#">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
               <span>
                                <img alt="" src="../img/logo.png">
                                <h3 class="page-header" style="color: navy; display: inline;"><b>&nbsp &nbsp&nbsp&nbspSchool of information Science and Technology</b><br></h3>
                                <p style="display: inline; margin-right: 50px;">&nbsp&nbsp&nbsp success through inovation</p><br><br>
                            </span>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>SIST  ProHub</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="se.html" style="color: whitesmoke;">
            <div class="info-box blue-bg">
              <i class="fa fa-laptop"></i>
              <div class="count">SOFTWARE ENGINEERING</div>
              <div class="title">Department</div></a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="" style="color: whitesmoke;">
            <div class="info-box brown-bg">
              <i class="fa fa-barcode"></i>
              <div class="count">INFORMATION TECHNOLOGY</div>
              <div class="title">Department</div></a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="#" style="color: whitesmoke;">
            <div class="info-box dark-bg">
              <i class="fa fa-cogs"></i>
              <div class="count">COMPUTER SCIENCE</div>
              <div class="title">Department</div></a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <a href="#" style="color: whitesmoke;">
            <div class="info-box green-bg">
              <i class="fa fa-unlock-alt"></i>
              <div class="count">INFORMATION SECURITY AND ASSURANCE</div>
              <div class="title">Department</div></a>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i></i><strong>Top trending projects</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>Group</th>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>Department</th>
                      <th>Project Titles</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Nyasha <br> kudakwashe<br>Rutendo<br>Ashley</td>
                      <td>chikobvore <br>Machingauta <br>Mwaita <br>Mutenha</td>
                      <td>Software Engineering</td>
                      <td>Sist project evaluator</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>cyprian<br>Theophilus<br>kudakwashe<br>Faith</td>
                      <td>Aarons<br>Okoye<br>Paradzai<br>Nyengetero</td>
                      <td>Software Engineering</td>
                      <td>Web technologies and big data analytics</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Tinashe</td>
                      <td>Madivani</td>
                      <td>Software Engineering</td>
                      <td>Fraud detection in financial institutes</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Munashe</td>
                      <td>Mafovera</td>
                      <td>Software Engineering</td>
                      <td>Emegency control system</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Blessed</td>
                      <td>Mahuni</td>
                      <td>Software Engineering</td>
                      <td>computer vision</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Takudzwa</td>
                      <td>chiunye</td>
                      <td>Software Engineering</td>
                      <td>cloud based bus pass system</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>256k</strong>
                  <span>friends</span>
                </li>
                <li>
                  <strong>359</strong>
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
              <ul>
                <li>
                  <strong>962</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>circles</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>1562k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>


          </div>
        </div><br><br>

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>

          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Audience</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Choose Targeted Audiene -</option>
                                                  <option value="1">co-ordinators</option>
                                                  <option value="2">Supervisors</option>
                                                  <option value="3">Lecturers</option>
                                                  <option value="4">Students</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Tags</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>

                      <!-- Modal  for adding students -->
                <div class="modal fade" id="student_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">New Student</h4>
                      </div>
                      <div class="modal-body">
                      	<form  onsubmit="return validate()" method="POST" action="../php/insertdata.php">
                      		<div class="form-group"> <!-- Full Name -->
								<label for="full_name_id" class="control-label">First Name</label>
								<input type="text" class="form-control" id="full_name_id" name="name" placeholder="John" required="">
							</div>	

							<div class="form-group"> <!-- Street 1 -->
								<label for="street1_id" class="control-label">Surname</label>
								<input type="text" class="form-control" id="street1_id" name="surname" placeholder="deere" required="">
							</div>					
													
							<div class="form-group"> <!-- Street 2 -->
								<label for="street2_id" class="control-label">Reg number</label>
								<input type="text" class="form-control" id="street2_id" name="reg_number" placeholder="h170xxxb" required="">
							</div>	
							<label class="control-label">Program</label>
								<select class="form-control" name="program">
								<option value="Software Engineering">Software Engineering</option>
								<option value="Computer Science">Computer Science</option>
								<option value="Information Technology">Information Technology</option>
								<option value="Information security and assurance">Information security and assurance</option>
							</select>
				

								<div class="form-group"> <!-- City-->
								<label for="city_id" class="control-label">Email address</label><p id="1"></p>
								<input type="text" class="form-control" id="email_id" name="email" placeholder="me@example.com" required="">
							</div>

								<div class="form-group"> <!-- City-->
								<label for="city_id" class="control-label">Physical address</label>
								<input type="text" class="form-control" id="physical_address" name="physical_address" required="">
							</div>

								<div class="form-group"> <!-- City-->
								<label for="city_id" class="control-label">Phone number</label>
								<input type="text" class="form-control" id="city_id" name="phone" placeholder="+263 770 000 000" required="">
							</div>

								<label class="control-label">Gender</label>
                      		<select class="form-control" name="Gender">
                      			<option value="Male">Male</option>
                      			<option value="Female">Female</option>
                      		</select>
                      		<br>

                      			<div class="form-group">
								<label for="city_id" class="control-label">Date of Birth</label>
								<input type="Date" class="form-control" id="city_id" name="dob" placeholder="01/01/1945" required="">
							</div>
                      		     

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="submit">Save changes</button>

                    </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal -->

                 <!-- Modal  for adding lecturers -->
                <div class="modal fade" id="lecture_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">New Staff</h4>
                      </div>
                      <div class="modal-body">
                      	<form  onsubmit="return validate()" method="POST" action="../php/add_lecturer.php">

                      		<div class="form-group"> <!-- Full Name -->
								<label for="full_name_id" class="control-label">Title</label>
								<select class="form-control" name="title">
									<option value="Mr">Mr</option>
									<option value="Mrs">Mrs</option>
									<option value="Ms">Ms</option>
									<option value="Miss">Miss</option>
									<option value="prof">Prof</option>
									<option value="Doc">Doc</option>
									<option value="Dr">Dr</option>
								</select>
							</div>
                      		<div class="form-group"> <!-- Full Name -->
								<label for="full_name_id" class="control-label">First Name</label>
								<input type="text" class="form-control" id="full_name_id" name="name" placeholder="John" required="">
							</div>	

							<div class="form-group"> <!-- Street 1 -->
								<label for="street1_id" class="control-label">Surname</label>
								<input type="text" class="form-control" id="street1_id" name="surname" placeholder="deere" required="">
							</div>					
													
							<div class="form-group"> <!-- Street 2 -->
								<label for="street2_id" class="control-label">Staff id</label>
								<input type="text" class="form-control" id="street2_id" name="staff_id" placeholder="....." required="">
							</div>	
							<label class="control-label">Department</label>
								<select class="form-control" name="Department">
								<option>Software Engineering</option>
								<option>Computer Science</option>
								<option>Information Technology</option>
								<option>Information security and assurance</option>
							</select>
				

								<div class="form-group"> <!-- City-->
								<label for="city_id" class="control-label">Email address</label><p id="2"></p>
								<input type="text" class="form-control" id="email_id1" name="email" placeholder="me@example.com" required="">
							</div>

								<div class="form-group"> <!-- City-->
								<label for="city_id" class="control-label">Physical address</label>
								<input type="text" class="form-control" id="physical_address" name="physical_address" required="">
							</div>

								<div class="form-group"> <!-- City-->
								<label for="city_id" class="control-label">Phone number</label>
								<input type="text" class="form-control" id="city_id" name="phone" placeholder="+263 770 000 000" required="">
							</div>

								<label class="control-label">Gender</label>
                      		<select class="form-control" name="Gender">
                      			<option value="Male">Male</option>
                      			<option value="Female">Female</option>
                      		</select>
                      		<br>

                      			<div class="form-group">
								<label for="city_id" class="control-label">Role</label>
								<select class="form-control" name="role">
									<option value="Supervisor">Supervisor</option>
									<option value="Chairperson">Chair Person</option>
									<option value="co-ordinator">Co ordinator</option>
								</select>
							</div>
                      		     

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="submit">Save changes</button>

                    </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal -->
                          <!-- Modal -->
                <div class="modal fade" id="mod9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Project</h4>
                      </div>
                      <div class="modal-body">

                      <form action="fileupload.php" method="POST" enctype="multipart/form-data">
                        <label class="control-label">Level</label>
                        <select class="form-control" name="Level">
                          <option>Hit200</option>
                          <option>Hit400</option>
                        </select>

                     <label class="control-label">Department</label>
                            <select class="form-control" name="program">
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Information security and assurance">Information security and assurance</option>
                            </select>

                          <label class="control-label">Developers</label>
                          <input type="text" class="form-control" id="physical_address" name="input1">
                          <input type="text" class="form-control" id="physical_address" name="input2">
                          <input type="text" class="form-control" id="physical_address" name="input3">
                          <input type="text" class="form-control" id="physical_address" name="input4">
                    
                    <label class="control-label">Project Title</label>
                    <input type="text" class="form-control" id="physical_address" name="title">

                    <label class="control-label">Project Description</label>
                    <textarea class="form-control " id="ccomment" name="description"></textarea>

                    <label class="control-label">Attachments</label>
                    <input type="file" name="file">
                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="submit" name="submit">Save changes</button>

                      </div>
                      </form>

                    </div>
                  </div>
                </div>
                <!-- modal -->
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            Editing or removing the below link is unlawful
          -->
      Developed by <a href="#">Nyasha chikobvore</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery-ui-1.10.4.min.js"></script>
  <script src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../js/jquery.scrollTo.min.js"></script>
  <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="../js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../js/calendar-custom.js"></script>
    <script src="../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js"></script>
    <script src="../assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
    <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/xcharts.min.js"></script>
    <script src="../js/jquery.autosize.min.js"></script>
    <script src="../js/jquery.placeholder.min.js"></script>
    <script src="../js/gdp-data.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/sparklines.js"></script>
    <script src="../js/charts.js"></script>
    <script src="../js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
