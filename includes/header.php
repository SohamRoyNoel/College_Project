<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php"><img src="images/logo.png" alt=""/></a>
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
                        <?php
                        if (!isset($_SESSION['iso'])){
                        ?>
                        <li><a href="./companylogin.php">Recruiters Login</a></li>
                        <li><a href="./Company_reg.php">Recruiters Registration</a></li>
                        <?php } ?>
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
                            echo "<li><a href=\"./logout.php\">Logout</a></li>";
                        } else {
                            echo "<li><a href=\"./userlogin.php\">Login</a></li>";
                        }
                ?>

                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./faq.php">FAQ</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>
<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
            <div id="search_form" class="clearfix">
                <?php
                if (!isset($_SESSION['iso'])){
                ?>
                <h1>Start your job search</h1>
                <p>

                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                    <?php
                } else {
                ?>
                <h1>Start your job post</h1>
                <?php } ?>
                </p>
            </div>
        </div>
    </div>
</div>
