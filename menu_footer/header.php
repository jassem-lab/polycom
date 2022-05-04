<?php
session_start();
include('connexion/cn.php');
?>

<?php

$req = "select * from parametre where id=1";
$query = mysql_query($req);
while ($enreg = mysql_fetch_array($query)) {
    $title      =   $enreg['nom'];
    $logo        =    $enreg['logo'];
    $mail      =     $enreg['mail1'];
    $tel1       =     $enreg['tel1'];
    $adresse1 = $enreg['adresse1'] ; 
    $facebook = $enreg['facebook'] ; 
    $youtube = $enreg['youtube'] ; 
    $instagram = $enreg['instagram'] ;
    
   

}
?>


<!DOCTYPE html>
<html>
<!-- [if IE 8]>			<html class="ie ie8"> <![endif]-->
<!-- [if IE 9]>			<html class="ie ie9"> <![endif]-->
<!-- [if gt IE 9]><html> <![endif] -->

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta content="HTML5 Template" name="keywords" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <title> <?php echo $title; ?></title>
    <!-- Mobile Metas -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Favicon -->
    <link href="<?php echo $logo ?>" rel="shortcut icon" />
    <!-- font-awesome -->
    <link href="assets/css/font-awesome/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
    <link href="assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- flaticon -->
    <link href="assets/css/flaticon/css/flaticon.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- owl-carousel -->
    <link href="assets/css/owl.carousel.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="assets/css/owl.theme.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- sidebar on small screens -->
    <link href="assets/css/easy-sidebar.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- prettyPhoto -->
    <link href="assets/js/pp/css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- isotope -->
    <link href="assets/js/vendors/isotope/isotope.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- preloader CSS -->
    <link href="assets/css/spinkit/spinkit.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- Main CSS -->
    <link href="assets/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
</head>

<body>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               PRELOADER STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               PRELOADER END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR INFO START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <div class="col-md-6 tb-left">
                    <ul class="list-inline text-uppercase">
                        <li><i class="fa fa-phone"></i>Appelez-nous <?php echo $tel1 ?></li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="<?php echo $mail ?>"><?php echo $mail ?></a>
                        </li>
                    </ul>
                </div>
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR INFO END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR SOCIAL START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <div class="col-md-6 tb-right">
                    <ul class="top-social list-inline pull-right">
                        <li>
                            <a href="<?php echo  $facebook ?>" target="_blank"><i class="fa fa-facebook"> </i></a>
                        </li>

                        <li>
                            <a href="<?php echo $mail ?>" target="_blank">
                                <i class="fa fa-google-plus"></i></a>
                        </li>

                        <!-- INSTAGRAM LINK CONDITION IF EMPTY -->

                        <?php
                        if (empty($instagram)) {
                           
                         echo  ' <li> </li>';
                           
                            // echo '$instagram is either 0, empty, or not set at all';
                        }else{
                          echo'  <li> <a href="<?php echo $instagram ?>" target="_blank">
                        <i class="fa fa-instagram"></i></a>
                        </li>';
                        }
                        ?>  
                    </ul>
                </div>
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR SOCIAL END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            </div>
        </div>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               TOPBAR END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <header>
        <div class="container">
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <div class="navbar-header">
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU STARTS
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <button class="burger-menu easy-sidebar-toggle"></button>

            </div>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               MENU START
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div id="navbar" class="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           MENU HOME START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <a class="navbar-brand" href="index.php">
                                <img alt="logo" style="max-width : 120px ; margin-right : 40px !important ; "
                                    src="<?php echo 'sesadmin/'.$logo ?>" /></a>

                            <li class="">
                                <a href="index.php" role="button">
                                    Acceuil </a>
                            </li>
                            <li class="">
                                <a href="presentation.php" role="button">
                                    Presentation</a>
                            </li>

                            <?php 
        
                           $req = "select * from categorie  limit 5";
                           $query = mysql_query($req);
                           while ($enreg = mysql_fetch_array($query)) {
                            ?>
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"
                                    data-toggle="dropdown" href="categorie.php?ID= <?php echo $enreg['id']; ?>"
                                    role="button">
                                    <?php echo $enreg['categorie']; ?> <span class="x-caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <?php 
                                $req2 = "select * from souscategories where categorie=".$enreg['id'];
                                $query2 = mysql_query($req2);                         
                                while($enreg2=mysql_fetch_array($query2)){ ?>
                                    <li><a
                                            href="sousCategorie.php?ID=<?php echo $enreg2['id']; ?>"><?php echo $enreg2['souscategorie']; ?></a>
                                    </li>
                                    <?php
                          }
                          ?>
                                </ul>
                            </li>

                            <?php 
                           }
                        ?>

                            <li class="">
                                <a href="contact.php" role="button">
                                    Contact</a>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SHOPCART, SEARCH AND GET QUOTE AREA START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="header-customize">
                                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                              SEARCH START
                              -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                                <!-- <div class="search-button-wrapper header-customize-item">
                                    <a class="icon-search-menu" data-search-type="standard" href="#search">
                                        <i class="fa fa-search"></i></a>
                                </div> -->


                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SHOPCART, SEARCH AND GET QUOTE AREA END
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                MENU  END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION END
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        </div>
    </header>