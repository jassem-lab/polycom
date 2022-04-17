
    <?php include("menu_footer/header.php"); ?>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                           SLIDER START
                           -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                           <?php 
                           $reqSlider = "select * from slider  ";
                           $query = mysql_query($reqSlider);
                           while ($enreg = mysql_fetch_array($query)) {
                               $image      =   $enreg['image'];
                              ?>
                         
    <div class="slider">
      <div
        id="rev_slider_204_1_wrapper"
        class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive"
      >
        <!-- START REVOLUTION SLIDER 5.1.1RC auto mode -->
        <div
          id="rev_slider_204_1"
          class="rev_slider fullwidthabanner"
          data-version="5.1.1RC"
          style="display: none"
        >
          <ul>

          <li data-description="" data-easein="default" data-easeout="default" data-index="rs-<?php echo $enreg['id']; ?>" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg" data-title="Slide 1" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo 'sesadmin/'.$image ?>">
          <li data-description="" data-easein="default" data-easeout="default" data-index="rs-<?php echo $enreg['id']; ?>" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg" data-title="Slide 1" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo 'sesadmin/'.$image ?>">
          <li data-description="" data-easein="default" data-easeout="default" data-index="rs-<?php echo $enreg['id']; ?>" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg" data-title="Slide 1" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo 'sesadmin/'.$image ?>">
          <li data-description="" data-easein="default" data-easeout="default" data-index="rs-<?php echo $enreg['id']; ?>" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="images/revslider/slider-01-100x50.jpg" data-title="Slide 1" data-transition="random"> <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo 'sesadmin/'.$image ?>">
                        </div>
                    </li>
            <!-- <li
              data-description=""
              data-easein="default"
              data-easeout="default"
              data-index="rs-<?php echo $enreg['id']; ?>"
              data-masterspeed="1500"
              data-rotate="0"
              data-saveperformance="off"
              data-slotamount="7"
              data-thumb="images/revslider/slider-01-100x50.jpg"
              data-title="Slide 1"
              data-transition="random"
            >
              <img
                alt=""
                class="rev-slidebg"
                data-bgfit="cover"
                data-bgposition="center center"
                data-bgrepeat="no-repeat"
                data-no-retina=""
                src="<?php echo 'sesadmin/'.$image ?>"
              />
             
            </li> -->
            <?php   }
                           ?>
          </ul>
          <div
            class="tp-bannertimer"
            style="height: 7px; background-color: rgba(255, 255, 255, 0.25)"
          ></div>
        </div>
      </div>
    </div>

 <?php include("menu_footer/footer.php") ; ?>
