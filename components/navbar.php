<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Website for students and hosting plans">
    <meta name="keywords" content="Website, Hosting, Freelancing, Teaching, Students">
    <meta name="author" content="Umar Syed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD Technologies | <?php echo $title; ?></title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="./lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="./lib/animate/animate.min.css" rel="stylesheet">
    <link href="./lib/modal-video/css/modal-video.min.css" rel="stylesheet">

    <!-- Main Stylesheet File 
    <link href="./css/style.css" rel="stylesheet">-->
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <style>
        .container {
            max-width: 900px;
        }

        #freelancer img{
            border-radius: 0px; 
            width: 150px; 
            height: 150px;
            background-size: contain; 
            background-repeat: no-repeat;
            float: left; 
            padding-right: 50px;
            object-fit: cover;
        }
        
        @media (max-width: 442px) {
            #freelancer .card-title{
                text-align: center;
                display: block;
            }
        }
        @media (max-width: 425px) {
            #freelancer .card-title{
                text-align: center;
                display: block;
            }
            #freelancer .card-body img {
                margin-left: auto;
                margin-right: auto;
            }
        }
        @media (max-width: 418px){
            #freelancer .card-body img {
                margin-left: 50px;
            }
        }
        @media (max-width: 414px){
            #freelancer .card-body img {
                margin-left: 90px;
            }
        }
        @media (max-width: 375px){
            #freelancer .card-body img {
                margin-left: 70px;
            }
        }
        @media (max-width: 360px){
            #freelancer .card-body img {
                margin-left: 65px;
            }
        }
        @media (max-width: 320px){
            #freelancer .card-body img {
                margin-left: 45px;
            }
        }
        
    </style>
</head>
<body>
    <div class="container">
        <header id="header" class="header header-hide">
            <div class="container">
                <div id="logo" class="pull-left">
                    <h1><a href="index.php" aria-label="HomePage"><span>WDD</span>Technologies</a></h1>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.php#hero" aria-label="HomePage">Home</a></li>
                        <li><a href="index.php#about" aria-label="AboutUsSection">What We Do</a></li>
                        <li><a href="freelancer.php" aria-label="FreelancePage">FreeLancers</a></li>
                        <li><a href="hosting.php" aria-label="HostingPage">Hosting</a></li>
                        <li><a href="index.php#contact" aria-label="ContactSection">Contact</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </header>
        <!-- #header -->
    </div>