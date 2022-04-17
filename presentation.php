<?php include("menu_footer/header.php") ; ?>


<?php 
                            
                           $reqPresentation = "select * from presentation  ";
                           $query = mysql_query($reqPresentation);
                           while ($enreg = mysql_fetch_array($query)) {
                               $presentation      =   $enreg['presentation'];
                              ?>


<div class="page-head overlay-wrap">
    <div class="overlay"></div>
    <div class="container text-uppercase">
        <h1>Presentation</h1>
        <ul class="bcrumbs">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li>Presentation</li>
        </ul>
    </div>
</div>
<div class="home-profile">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h3><i class="fa fa-suitcase"></i> <a href="index.php"><?php echo $title ?></a></h3>
                <p><?php echo $presentation ?>
                </p>
                <div class="row">
                   
                </div><a class="bttn bttn-sm btn-primary" href="#">View Our Projects</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php include("menu_footer/footer.php") ; ?>