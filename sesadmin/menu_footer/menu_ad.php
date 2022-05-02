<!doctype html>
<html lang="en" class="color-header headercolor5">
<?php
session_start();
if  (!isset($_SESSION['SES_ADMIN']) and !isset($_SESSION['SES_MEM']) and !isset($_SESSION['SES_VEN'])) 
{
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="login.php" </SCRIPT>';
	exit;
}
include('./connexion/cn.php');
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="./assets/logo.png" type="image/png" />
    <!--plugins-->
    <link href="./assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="./assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="./assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="./assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
    <link href="./assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="./assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <!-- loader-->
    <link href="./assets/css/pace.min.css" rel="stylesheet" />
    <script src="./assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="./assets/css/app.css" rel="stylesheet">
    <link href="./assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="./assets/css/dark-theme.css" />
    <link rel="stylesheet" href="./assets/css/semi-dark.css" />
    <link rel="stylesheet" href="./assets/css/header-colors.css" />

    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <title>Espace administration de site</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--start header wrapper-->
        <div class="header-wrapper">
            <!--start header -->
            <header>
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="topbar-logo-header">
                            <div class="">
                                <h4 class="logo-text">Espace administration </h4>
                            </div>
                        </div>
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                        <div class="top-menu-left d-none d-lg-block ps-3">

                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">


                                <li class="nav-item dropdown dropdown-large">

                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="display:none">
                                        <span class="alert-count">

                                        </span>
                                        <i class='bx bx-bell'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" style="display:none">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Notifications</p>
                                            </div>
                                        </a>
                                        <div class="header-notifications-list">

                                            <a class="dropdown-item" href="suvi_demandes.php">
                                                <div class="d-flex align-items-center">

                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name"> <span class="msg-time float-end"
                                                                style="font-size: 11px;"></span></h6>
                                                        <p class="msg-info" style="    font-size: 11px;"></p>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <a href="" id="id-notif">
                                            <div class="text-center msg-footer">Marque tout comme lu </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large" style="display:none">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                            class="alert-count">8</span>
                                        <i class='bx bx-comment'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Messages</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-message-list" style="display:none">
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Messages</div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-box dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-info ps-3">
                                    <p class="designattion mb-0">Administrateur</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><?php if (isset($_SESSION['SES_ADMIN']) ){ ?><a class="dropdown-item"
                                        href="profil.php"><i class="bx bx-user"></i><span>Profil</span></a><?php } ?>
                                </li>
                                <li>
                                    <div class="dropdown-divider mb-0"></div>
                                </li>
                                <li><a class="dropdown-item" href="./deconnexion.php"><i
                                            class='bx bx-log-out-circle'></i><span>Deconnexion</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--end header -->
            <!--navigation-->
            <div class="nav-container">
                <nav class="topbar-nav">
                    <?php if(isset($_SESSION['SES_ADMIN'])){ ?>
                    <ul class="metismenu" id="menu">

                        <!---	<li>
							<a href="./dashbord.php" class="">
								<div class="parent-icon"><i class='bx bx-home-circle'></i>
								</div>
								<div class="menu-title">Tableau de bord</div>
							</a>
						</li>
					-->
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="bx bx-category"></i>
                                </div>
                                <div class="menu-title">Table de base</div>
                            </a>
                            <ul>
                                <li> <a href="./paremtrage.php"><i class="bx bx-right-arrow-alt"></i>Paramétrage</a>
                                </li>
                                <li> <a href="./presentation.php"><i class="bx bx-right-arrow-alt"></i>Présentation</a>
                                </li>
                                <li> <a href="./slider.php"><i class="bx bx-right-arrow-alt"></i>Slider</a>
                                </li>
                                <li> <a href="./gest_contact.php"><i class="bx bx-right-arrow-alt"></i>Gestion des
                                        contacts</a></li>
                                <li> <a href="./gest_newsletter.php"><i class="bx bx-right-arrow-alt"></i>Gestion des
                                        newsletters</a></li>
                                <li> <a href="./partenaires.php"><i class="bx bx-right-arrow-alt"></i>Référence</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="javascript:;">
                                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                                </div>
                                <div class="menu-title">Services et sous services</div>
                            </a>
                            <ul>
                                <li> <a href="./categories.php"><i class="bx bx-right-arrow-alt"></i>Gestion des
                                        services</a></li>
                                <li> <a href="./souscategories.php"><i class="bx bx-right-arrow-alt"></i>Gestion des
                                        sous services</a></li>
                                <!--<li> <a href="./produits.php"><i class="bx bx-right-arrow-alt"></i>Gestion des produis</a></li>-->
                            </ul>
                        </li>
                        <!--	<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class="bx bx-line-chart"></i>
								</div>
								<div class="menu-title">Vente </div>
							</a>
							<ul>
								<li> <a href="./gest_commande.php"><i class="bx bx-right-arrow-alt"></i>Suivi des commandes</a>
								</li>		
								<li> <a href="./gest_devis.php"><i class="bx bx-right-arrow-alt"></i>Suivi des devis</a>
								</li>								
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class="bx bx-line-chart"></i>
								</div>
								<div class="menu-title">Membre et vendeur</div>
							</a>
							<ul>
								<li> <a href="./membres.php"><i class="bx bx-right-arrow-alt"></i>Gestion des membres</a>
								</li>														
							</ul>
						</li>	 -->

                    </ul>
                    <?php } elseif(isset($_SESSION['SES_MEM'])){ ?>
                    <ul class="metismenu" id="menu">

                        <li>
                            <a href="./dashbordcli.php" class="">
                                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                                </div>
                                <div class="menu-title">Tableau de bord</div>
                            </a>
                        </li>

                        <li>
                            <a href="./compte_membre.php" class="">
                                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                                </div>
                                <div class="menu-title">Gestion Profil</div>
                            </a>
                        </li>
                    </ul>
                    <?php } ?>

                </nav>
            </div>
            <!--end navigation-->
        </div>
        <!--end header wrapper-->