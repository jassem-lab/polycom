
<?php
$title = "";
$logo = "";
$req = "select * from parametre where id=1";
$query = mysql_query($req);
while ($enreg = mysql_fetch_array($query)) {
    $title      =   $enreg['nom'];
    $logo        =    $enreg['logo'];
    $mail      =     $enreg['mail1'];
    $tel1       =     $enreg['tel1'];
    $facebook = $enreg['facebook'] ; 
    $youtube = $enreg['youtube'] ; 
    $adresse1 = $enreg['adresse1'] ; 
}
?>


<footer class="overlay-wrap">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3 text-center">
            <div class="footer-logo">
              <a href="./index.html">
                <img alt="" src="images/logo-light.png"
              /></a>
              <div class="clear"></div>
            
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="footer-widget">
              <h5>Contactez-nous</h5>
              <ul class="footer-contact">
                <li>
                  <i class="fa fa-map-marker"></i><?php echo $adresse1 ?>
                </li>
                <li><i class="fa fa-envelope-o"></i><?php echo $mail ?></li>
                <li><i class="fa fa-phone"></i><?php echo $tel1 ?></li>
               
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-widget">
              <h5>Navigations</h5>
              <div id="tweecool">
              <?php 
        
        $req = "select * from categorie  limit 3";
        $query = mysql_query($req);
        while ($enreg = mysql_fetch_array($query)) {
         ?>
          <li>
       <li
         href="categorie.php?ID= <?php echo $enreg['id']; ?>"
         role="button"
       >
        <?php echo $enreg['categorie']; ?> <span class="x-caret"></span
       ></li>
       </ul>
     </li>

     
     <?php 
        }
     ?>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-widget">
              <h5>Newsletter</h5>
              <div class="footer-newsletter">
                <p>
                Entrez votre adresse e-mail pour notre liste de diffusion afin de notre dernière mise à jour.
                </p>
        
                <form action ="insertNewsletter.php" method="post">
                  <input placeholder="Email Address" required="" type="email" id="email" name="email"/>
                  <button type="submit">
                    <i class="fa fa-paper-plane"> </i>
                  </button>
                  <?php if(isset($_GET['suc'])){ ?>
									<?php if($_GET['suc']=='succes'){ ?>
                                        <div style="margin-top : 10px" class="alert alert-success m-5 pt-5" role="alert">
										<font color="green" ><center>Merci beaucoup pour votre message. Nous vérifions fréquemment vos e-mails et ferons de notre mieux pour répondre à votre demande</center></font><br /><br />
                                    </div>
                                        <?php } ?>	
								<?php } ?>	
                </form> 
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="row">
            <div class="col-md-6">
              <ul class="footer-menu list-inline text-uppercase">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <p class="pull-right text-uppercase">
                &copy; 2022 <?php echo $title ?> Construction is proudly powered by
                <a href="#">DeltaWeb</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search popup start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div id="search">
      <button class="close" type="button">
        <i aria-hidden="true" class="fa fa-times"></i>
      </button>
      <form>
        <input placeholder="Type keyword(s) Here" type="search" value="" />
        <button class="btn btn-primary" type="submit">
          <i aria-hidden="true" class="fa fa-search"></i>
        </button>
      </form>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search popup end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search quote start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div id="quote">
      <button class="close" type="button">
        <i aria-hidden="true" class="fa fa-times"></i>
      </button>
      <form>
        <textarea placeholder="Type message here"></textarea>
        <button class="btn btn-primary" type="submit">
          <i aria-hidden="true" class="fa fa-envelope"></i>
        </button>
      </form>
    </div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
Search quote end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
back-to-top start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <a class="back-to-top" href=".top-bar">
      <i aria-hidden="true" class="fa fa-chevron-up"></i
    ></a>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
back-to-top end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
overlay div start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div class="overlay hided"></div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
overlay div end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl-carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- twitter -->
    <script src="assets/js/twitter.js"></script>
    <!-- counterup -->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.counterup.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/vendors/isotope/isotope.pkgd.js"></script>

    <!-- cookie js -->
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- pretty Photo -->
    <script src="assets/js/pp/js/jquery.prettyPhoto.js"></script>
    <!-- jquery-ui.min -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script
      src="assets/revolution/js/jquery.themepunch.tools.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/jquery.themepunch.revolution.min.js"
      type="text/javascript"
    ></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  
			The following part can be removed on Server for On Demand Loading) -->
    <script
      src="assets/revolution/js/extensions/revolution.extension.actions.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.migration.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/revolution/js/extensions/revolution.extension.video.min.js"
      type="text/javascript"
    ></script>
    <link
      href="assets/revolution/css/navigation.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/revolution/css/settings.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />
    <script type="text/javascript">
      var tpj = jQuery;
      var revapi204;
      tpj(document).ready(function () {
        if (tpj("#rev_slider_204_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_204_1");
        } else {
          revapi204 = tpj("#rev_slider_204_1")
            .show()
            .revolution({
              sliderType: "standard",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullwidth",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false,
                },
                arrows: {
                  style: "persephone",
                  enable: true,
                  hide_onmobile: true,
                  hide_under: 0,
                  hide_onleave: false,
                  tmp: "",
                  left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 20,
                    v_offset: 0,
                  },
                  right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 20,
                    v_offset: 0,
                  },
                },
                bullets: {
                  enable: false,
                  hide_onmobile: true,
                  hide_under: 600,
                  style: "metis",
                  hide_onleave: true,
                  hide_delay: 200,
                  hide_delay_mobile: 1200,
                  direction: "horizontal",
                  h_align: "center",
                  v_align: "bottom",
                  h_offset: 0,
                  v_offset: 30,
                  space: 5,
                  tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>',
                },
              },
              viewPort: {
                enable: true,
                outof: "pause",
                visible_area: "80%",
              },
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [700, 650, 600, 500],
              lazyType: "none",
              parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [
                  2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55,
                ],
                type: "mouse",
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "off",
              stopAfterLoops: -1,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              hideThumbsOnMobile: "on",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              },
            });
        }
      }); /*ready*/
    </script>
    <!-- Main Javascript -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
