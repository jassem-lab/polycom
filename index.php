<?php include("menu_footer/header.php"); ?>




<!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SLIDER START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
<div class="slider">
    <div id="rev_slider_204_1_wrapper" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive">
        <!-- START REVOLUTION SLIDER 5.1.1RC auto mode -->
        <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" data-version="5.1.1RC" style="display: none;">
            <ul>
                <?php 
                            
                            $reqSlider = "select * from slider  ";
                            $query = mysql_query($reqSlider);
                            while ($enreg = mysql_fetch_array($query)) {
                                $image      =   $enreg['image'];
                               ?>

                <li data-description="" data-easein="default" data-easeout="default"
                    data-index="rs-<?php echo 'sesadmin/'.$enreg['id'] ?>" data-masterspeed="1500" data-rotate="0"
                    data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg"
                    data-title="Slide 1" data-transition="random">
                    <img class="rev-slidebg" data-bgfit="cover" data-bgposition="center center"
                        data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo 'sesadmin/'.$image ?>" />
                </li>
                <?php   } ?>
            </ul>
            <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"> </div>
        </div>
    </div>
</div>

<!-- /. SLIDER ENDS
			========================================================================= -->
<?php 
 $reqAboutUs = "select * from presentation ";
 $query2 = mysql_query($reqAboutUs) ; 
 while ($enreg = mysql_fetch_array($query2)) {
  $presentation      =   $enreg['presentation'];
}
?>
<div class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12"> <img alt="" class="img-responsive"
                    src="assets/images/indexPic.jpg" />
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 text-center">
                <div class="content-head text-uppercase">
                    <h4>Qui sommes-nous</h4>
                    <p>Bienvenue chez <?php echo $title ?></p>
                </div>
               <div> <?php echo $presentation ?></div>
            </div>

        </div>
    </div>
</div>

<div class="service-box1 overlay-wrap">
    <div class="overlay"> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="s1-box text-center">
                    <h4>01 <i class="fa fa-long-arrow-right"></i></h4>
                    <h5><a href="#">étude</a></h5>
                    <p>L'étude consiste à explorer tous les concepts du projet tout en permettant de répondre à un
                        besoin exprimé en termes d'objectif à atteindre (qualité, coûts, délais).</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="s1-box text-center">
                    <h4>02 <i class="fa fa-long-arrow-right"></i></h4>
                    <h5><a href="#">Conseil</a></h5>
                    <p>Il s'agit notamment de fournir des réponses aux problématiques qu'ils rencontrent et d'apporter
                        de manière proactive des solutions à long terme.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="s1-box text-center">
                    <h4>03 <i class="fa fa-long-arrow-right"></i></h4>
                    <h5><a href="#">Installation</a></h5>
                    <p>L'installation d'un bassin hors-sol ou semi-enterré</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="s1-box text-center">
                    <h4>04</h4>
                    <h5><a href="#">Maintenance</a></h5>
                    <p>Ensemble des opérations permettant de maintenir ou de rétablir un matériel, un appareil, un
                        véhicule, etc., dans un état donné, ou de lui restituer des caractéristiques de fonctionnement
                        spécifiées.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-box2">
    <div class="container">
        <div class="content-head text-center text-uppercase">
            <h4>CE QUE NOUS OFFRONS</h4>
            <p>Toujours dévoué</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="s2-box text-center"> <span class="s2-box-ico"><i class="flaticon-hammer38"></i>
                    </span>
                    <h3><a href="#">Accessoires</a></h3>
                    <p>Les unités de filtration par cartouche sont généralement les plus efficaces et économiques pour
                        des applications traitant des effluents ayant une contamination inférieure à 100 ppm. Pour des
                        contaminations plus élevées, la filtration par cartouche est typiquement utilisée en fin de
                        process.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="s2-box text-center"> <span class="s2-box-ico"><i class="flaticon-tractor"></i>
                    </span>
                    <h3><a href="#">Adoucisseurs</a></h3>
                    <p>La dureté de l'eau provient de certains sels. Elle est principalement due aux ions Calcium
                        (Ca2+), Magnésium (Mg2+) et Bicarbonate (HCO3-). Ces ions ou minéraux peuvent poser des
                        problèmes d’entartrage dans les canalisations d'eau chaude, les appareillages d'eau potable et
                        les systèmes de traitement d'eau. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="s2-box text-center"> <span class="s2-box-ico"><i class="flaticon-power30"></i>
                    </span>
                    <h3><a href="#">Piscines</a></h3>
                    <p>Vous rêvez d’une piscine ? Vous avez encore des doutes sur la question ? Voici deux articles pour
                        répondre à vos interrogations et casser les idées reçues sur le fait d’avoir une piscine chez
                        soi. Une piscine peut se différencier par sa technique de construction et de pose, par sa forme
                        et son design ou par son emplacement. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="s2-box text-center"> <span class="s2-box-ico"><i class="flaticon-paint49"></i>
                    </span>
                    <h3><a href="#">Thalasso</a></h3>
                    <p>Une cure de thalassothérapie se déroule dans un institut en bord de mer. La thalassothérapie est
                        basée sur les bienfaits de l'eau de mer et de l'environnement marin riche en sels minéraux comme
                        les algues, la boue marine et l'air marin. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="s2-box text-center"> <span class="s2-box-ico"><i class="fa fa-bolt"></i></span>
                    <h3><a href="#">Cabines Infrarouges</a></h3>
                    <p>Le sauna est une tradition sociale et familiale finlandaise et estonienne depuis plus de 2 000
                        ans. À l'origine, les saunas étaient de petites cabanes construites avant même la maison
                        d'habitation. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="s2-box text-center"> <span class="s2-box-ico"><i class="flaticon-leaf32"></i>
                    </span>
                    <h3><a href="#">Saunas Spéciaux</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. VIDEO START
			========================================================================= -->

<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <div class="video">
                    <?php 
                $reqVideo = "select * from videos ";
                $queryVideo = mysql_query($reqVideo) ; 
                while ($enreg = mysql_fetch_array($queryVideo)) {
                $url      =   $enreg['url'];
                $id         =   $enreg['id'];

                ?>
                    <iframe key="<?php echo $id ?>" src="<?php echo $url ?>"> </iframe>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /. VIDEO END
			========================================================================= -->

<!-- /. SERVICES START
			========================================================================= -->


<div class="home-blog">
    <div class="container">
        <div class="content-head text-center text-uppercase">
            <h4>Services</h4>
            <p>Connectez-vous avec nous <?php echo $title ?></p>
        </div>
        <div class="row">
            <div id="home-posts" class="owl-carousel owl-theme">
                <?php 
              $reqServ = "select * from categorie ";
              $queryServ = mysql_query($reqServ) ; 
              while ($enreg = mysql_fetch_array($queryServ)) {
                $id      =   $enreg['id'];
                $service      =   $enreg['categorie'];
                $image      =   $enreg['logo'];
          
              
              ?>
                <div class="item" key="<?php echo $id ?>">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <a class="prettyPhoto" data-rel="prettyPhoto" href="<?php echo'sesadmin/'.$image ?>"> <i
                                    class="fa fa-expand"></i></a> <img alt="" class="img-responsive"
                                src="<?php echo'sesadmin/'.$image ?>" style="height : 250px" />
                        </div>
                        <div class="blog-excerpt">
                            <h3 class="text-uppercase"><a href="#"><?php echo $service ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<!-- /. SERVICES END
			========================================================================= -->
<?php include("menu_footer/footer.php") ; ?>