<?php include("menu_footer/header.php"); ?>


<?php 
                            
                           $reqSlider = "select * from slider  ";
                           $query = mysql_query($reqSlider);
                           while ($enreg = mysql_fetch_array($query)) {
                               $image      =   $enreg['image'];
                              ?>


<!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SLIDER START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
<div class="slider">
    <div id="rev_slider_204_1_wrapper" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive">
        <!-- START REVOLUTION SLIDER 5.1.1RC auto mode -->
        <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" data-version="5.1.1RC" style="display: none;">
            <ul>
                <li data-description="" data-easein="default" data-easeout="default"
                    data-index="rs-<?php echo 'sesadmin/'.$enreg['id'] ?>" data-masterspeed="1500" data-rotate="0"
                    data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg"
                    data-title="Slide 1" data-transition="random">
                    <img class="rev-slidebg" data-bgfit="cover" data-bgposition="center center"
                        data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo 'sesadmin/'.$image ?>" />
                </li>

            </ul>
            <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"> </div>
        </div>
    </div>
</div> <?php   }
                           ?>
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
            <div class="col-md-5 col-sm-12 col-xs-12"> <img alt="" class="img-responsive" src="images/about.jpg" />
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 text-center">
                <div class="content-head text-uppercase">
                    <h4>Qui sommes-nous</h4>
                    <p>Welcome To <?php echo $title ?></p>
                </div>
                <p<?php echo $presentation ?>< /p> <a class="bttn bttn-xs center-block" href="#">Our History</a>
            </div>
        </div>
    </div>
</div>

<!-- /. VIDEO START
			========================================================================= -->
<!-- <?php 
 $reqVideo = "select * from videos ";
 $queryVideo = mysql_query($reqVideo) ; 
 while ($enreg = mysql_fetch_array($queryVideo)) {
  $video      =   $enreg['video'];
}
?> -->

<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/8A3kVz2zknM?feature=oembed"> </iframe>
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
            <h4>Lastest News</h4>
            <p>Connect With Us All About <?php echo $title ?></p>
        </div>
        <div class="row">
            <div id="home-posts" class="owl-carousel owl-theme"></div>
            <?php 
              $reqServ = "select * from services ";
              $queryServ = mysql_query($reqServ) ; 
              while ($enreg = mysql_fetch_array($queryServ)) {
                $id      =   $enreg['id'];
                $service      =   $enreg['service'];
                $image      =   $enreg['image'];
                $presentation      =   $enreg['presentation'];

              ?>
            <div class="item">
                <div class="blog-post">
                    <div class="blog-thumb">

                        <a class="prettyPhoto" data-rel="prettyPhoto" href="<?php echo 'sesadmin/'.$image ?>"> <i
                                class="fa fa-expand"></i></a> <img alt="" class="img-responsive"
                            src="<?php echo 'sesadmin/'.$image ?>" />
                    </div>
                    <div class="blog-excerpt">
                        <h3 class="text-uppercase"><a href="#"><?php echo $service ?></a></h3>
                        <div class="blog-meta text-uppercase"></div>
                        <p> <?php echo $presentation ?> [...]</p>
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