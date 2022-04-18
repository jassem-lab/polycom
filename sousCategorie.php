<?php include('menu_footer/header.php') ?>

<?php
$reqSousCategorie = "select * from souscategories where id=".$_GET['ID'];

 $query = mysql_query($reqSousCategorie);
 while ($enreg = mysql_fetch_array($query)) {
     $sousCategorie      =   $enreg['souscategorie'];
     $sousCategoriePresentation = $enreg['presentation'];
     $sousCategorieId      =   $enreg['id'];
     $categorieId = $enreg['categorie']; 
      $sousCategorieImage = $enreg['logo'];
 }
?>
<?php
$reqOtherCat = "select * from souscategories where categorie =" .$categorieId." and id<>".$_GET['ID'];
$query = mysql_query($reqOtherCat) ; 
while($enreg = mysql_fetch_array($query)){
    $autreSousCategorie = $enreg['souscategorie'];
    $autreSousCategoriePresentation = $enreg['presentation'];
    $autreSousCategorieId = $enreg['id'];
    $autreSousCategorieImage = $enreg['logo'];
}
?>
<?php 
 $reqCategorie = "select * from categorie where id=".$categorieId ; 

$query = mysql_query($reqCategorie);
while($enreg = mysql_fetch_array($query)){
    $categorie = $enreg['categorie'] ; 
}
?>

<div id="parent-content" class="clearfix">
    <section class="blog-content-title-wrap page-head-project">
        <div class="blog-content-title-overlay"> </div>
        <div class="container">
            <div class="blog-content-title-inner block-center">
                <div class="block-center-inner">
                    <h1><?php echo $sousCategorie ?></h1>
                    <ul class="breadcrumbs">
                        <li>
                            <a class="home" href="index.php" rel=""> <i class="fa fa-home"></i></a>
                        </li>
                        <li><span><?php echo $categorie ?></span></li>
                        <li><span><?php echo $sousCategorie ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <main role="main" class="site-content-archive">
        <div class="container">
            <div class="row">
                <div id="owl-item" class="item-slider col-lg-12">
                    <img style="height : 600px !important" src="<?php echo'sesadmin/'.$sousCategorieImage ?>" />
                </div>
                <div class="row">
                    <div class=" content-wrap  col-lg-12">

                        <div class="col-md-9 portfolio-content">
                            <div class="portfolio-info">
                                <h5 class="clear-top title bold-color border-primary-color">
                                    <?php echo $sousCategorie ?></h5>
                                <p><?php echo $sousCategoriePresentation ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-contents">
                <div class="container">
                <?php
$reqOtherCat = "select * from souscategories where categorie =" .$categorieId." and id<>".$_GET['ID'];
$query = mysql_query($reqOtherCat) ; 
while($enreg = mysql_fetch_array($query)){
    $autreSousCategorie = $enreg['souscategorie'];
    $autreSousCategoriePresentation = $enreg['presentation'];
    $autreSousCategorieId = $enreg['id'];
    $autreSousCategorieImage = $enreg['logo'];

?>
                    <div class="content-head content-head text-center text-uppercase">
                        <h4>D'autres
                            PROJETS</h4>
                        <p>Experience &amp; créativité</p>
                    </div>
                </div>
                <div class="container-fluid no-padding">
                    <div class="project-info">
                        <div id="home-projects" class="owl-carousel">

                            <div class="project-item item Architecture Construction"> <img alt="" class="img-responsive"
                                    src="<?php echo 'sesadmin/'.$autreSousCategorieImage ?>" />
                                <div class="project-overlay">
                                    <h4><a
                                            href="sousCategorie.php?ID=<?php echo $autreSousCategorieId; ?>"><?php echo $autreSousCategorie ?></a>
                                    </h4> <a class="project-view"
                                        href="sousCategorie.php?ID=<?php echo $autreSousCategorieId; ?>"><i
                                            class="fa fa-link">
                                        </i></a>

                                </div>
                            </div>
                        </div>
                       
                        <div id="projects-copy" class="hide"> </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </main>
</div>

<?php include('menu_footer/footer.php') ?>