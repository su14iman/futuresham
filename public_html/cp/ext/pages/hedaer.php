<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome <?php echo $username; ?> || Control Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
          <!--   <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div> -->




<!-- Top nav ... -->
         <!--    <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div> -->
        </nav>
        <!-- /. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <!-- <img src="assets/img/user.png" class="img-thumbnail" /> -->

                            <div class="inner-text">
                            <?php echo "Welcome :  ".$username."<br/>".date("Y-m-d h:i:a",time()); ?>
                            </div>

                        </div>

                    </li>

<!-- nav left .... -->
                    <li>
                        <a class="active-menu" href="home"><i class="fa fa-dashboard "></i>Home</a>
                    </li>


                    <li>
                        <a class="active-menu"  href="news.php?s=1"><i class="fa fa-newspaper-o"></i>News</a>
                    </li>

                    <li>
                        <a class="active-menu" target="_blank"  href="json.php?Update=Update"><i class="fa fa-refresh"></i>Update news</a>
                    </li>

                    <li>
                        <a class="active-menu"  href="./programes.php"><i class="fa fa-file-code-o"></i>Programs</a>
                    </li>

                    <li>
                        <a class="active-menu"  href="./software.php"><i class="fa fa-file-archive-o"></i>software</a>
                    </li>

                    <li>
                        <a class="active-menu"  href="./ChangPassword.php"><i class="fa fa-key"></i>Change password</a>
                    </li>


                    <li>
                        <a class="active-menu" href="logout.php"><i class="fa fa-sign-out "></i>Logout</a>
                    </li>
                   
<!-- End nav left .... -->


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->




        
        <div id="page-wrapper">
            <div id="page-inner">
