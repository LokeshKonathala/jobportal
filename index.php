<?php
/**
 * Online-Job-Portal - A web application built on PHP HTML & javascript
Copyright (C) 2016 Sreelal C

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

 */
?>
<!DOCTYPE HTML>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title> Job Portal </title>
        <script type="application/javascript">
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>
    </head>
        
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#main1">Home</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="container-fluid" id="main1"> <!-- jumbotron fluid -->
<div class="jumbotron text-center" id="searchjum">
<h1>Job Portal</h1>
    <p>Search for Jobs</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="search()" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
</div>
</div> <!-- jumbotron -->

<div class="container" id="subcontent" style="background: transparent">
    <!-- div for search contents -->
</div>
<div class="page-header" style="background:#1abc9c"></div>
<div class="container-fluid" style="background: transparent">
    <div class="text-center">
        <h2>Register</h2>
        <h4>Register in this website for a better experience</h4>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications the same day.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer">
                    <h3>$0</h3>
                   <a href="employer/register_emp.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <h3>$0</h3>
                    <a href="jobseeker/register_user.php" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px;">Better Exposure <br>
                        Better Support</p>
                </div>
                <div class="panel-footer">
                    <h3>$4</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg disabled">Upgrade</button>
                </div>
            </div>
        </div>
    </div>
</div>


   

           
        </div>
    </div> <!-- Contact -->

</div> <!-- sub content -->
 <div class="page-header" style="background: #f4511e"></div>
</div> <!-- Container -->
<!-- Set height and width with CSS -->
<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->

<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Job Portal</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
