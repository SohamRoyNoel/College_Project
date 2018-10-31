<?php session_start(); ?>
<?php ob_start(); ?>

<!DOCTYPE HTML>
<?php include "db.php"?>
<?php include "functions.php" ?>
<html>
<head>
    <title>Seeking an Job</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""/></a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="location.html">All Jobs</a></li>
                        <li><a href="location.html">Walkin Jobs</a></li>
                        <li><a href="location.html">Jobs by Company</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="services.html">Cars</a></li>
                                    <li><a href="services.html">Nurse</a></li>
                                    <li><a href="services.html">Security</a></li>
                                    <li><a href="services.html">Driver</a></li>
                                    <li><a href="services.html">Fooding</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="login.html">Recruiter</a></li>
                        <li><a href="recruiters.html">Recruiters Login</a></li>
                        <li><a href="codes.html">Recruiters Registration</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobs.html">Tech Support</a></li>
                        <li><a href="jobs.html">Part time Jobs</a></li>
                        <li><a href="jobs.html">Health Care</a></li>
                        <li><a href="jobs.html">Internships</a></li>
                        <li><a href="jobs.html">Research Jobs</a></li>
                        <li><a href="jobs.html">Defence Jobs</a></li>
                    </ul>
                </li>
                <?php
                if (isset($_SESSION['id'])){
                    echo "<li><a href=\"./userlogin.php\">Logout</a></li>";
                } else {
                    echo "<li><a href=\"./userlogin.php\">Login</a></li>";
                }
                ?>
                <li><a href="resume.html">Upload Resume</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>
<div class="banner">
    <div class="container">
        <div id="search_wrapper">
            <div id="search_form" class="clearfix">
                <h1>Start your job search</h1>
                <p>
                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="grid_1">
        <h3>Featured Employers</h3>
        <ul id="flexiselDemo3">
            <li><img src="images/c1.gif"  class="img-responsive" /></li>
            <li><img src="images/c2.gif"  class="img-responsive" /></li>
            <li><img src="images/c3.gif"  class="img-responsive" /></li>
            <li><img src="images/c4.gif"  class="img-responsive" /></li>
            <li><img src="images/c5.gif"  class="img-responsive" /></li>
            <li><img src="images/c6.gif"  class="img-responsive" /></li>
        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 6,
                    animationSpeed: 1000,
                    autoPlay:false,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
    <div class="single">
        <div class="col-md-4">
            <div class="col_3">
                <h3>Todays Jobs</h3>
                <ul class="list_1">
                    <li><a href="#">Department of Health - Western Australia</a></li>
                </ul>
            </div>
            <div class="col_3">
                <h3>Jobs by Category</h3>
                <ul class="list_2">
                    <li><a href="#">Railway Recruitment</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="col_1">
                <div class="col-sm-4 row_2">
                    <a href="single.html"><img src="images/a1.jpg" class="img-responsive" alt=""/></a>
                </div>
                <div class="col-sm-8 row_1">
                    <h4><a href="single.html">It is a long established fact</a></h4>
                    <h6>SIt is a long <span class="dot">·</span> Jul. 31, 2015</h6>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                    <div class="social">
                        <a class="btn_1" href="#">
                            <i class="fa fa-facebook fb"></i>
                            <span class="share1 fb">Share</span>
                        </a>
                        <a class="btn_1" href="#">
                            <i class="fa fa-twitter tw"></i>
                            <span class="share1">Tweet</span>
                        </a>
                        <a class="btn_1" href="#">
                            <i class="fa fa-google-plus google"></i>
                            <span class="share1 google">Share</span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
</body>
</html>