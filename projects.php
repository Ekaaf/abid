<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themexriver.com/tfhtml/industrial-demo/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 17:48:26 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Industrial - Industry, Factory and Engineering Template </title>

    <!-- Favicon and Touch Icons -->
    <link href="assets/images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="assets/images/favicon/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="assets/images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        
        <?php include('header.php'); ?>


        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Projects</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Projects</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        


        <section class="section-padding projects-grid-view-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="projects-grid-view">
                            <?php
                                for($i=3;$i<79;$i++){
                            ?>
                            <div class="grid" style="cursor: pointer;">
                                <div class="project-img">
                                    <img src="images/<?php echo $i; ?>.jpg" alt>
                                </div>
                                <!-- <div class="project-info">
                                    <div class="inner-info">
                                        <a href="#"><h3>Chemical Refinery</h3></a>
                                        <div class="tags">Michigan, US</div>
                                    </div>
                                </div> -->
                            </div>
                            <?php
                                }
                            ?>
                           
                        </div>
                    </div>
                </div>
                <div class="row more-projects">
                    <a href="#" class="theme-btn">More projects</a>
                </div>
            </div> <!-- end container -->
        </section>
        


        <!-- start site-footer -->
        <?php include('footer.php'); ?>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from themexriver.com/tfhtml/industrial-demo/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 17:48:52 GMT -->
</html>
