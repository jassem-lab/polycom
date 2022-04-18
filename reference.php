<?php include('menu_footer/header.php') ?>

<div class="home-blog">
    <div class="container">
        <div class="content-head text-center text-uppercase">
            <h4>References</h4>
        </div>
        <div class="row">
        <?php 
                            
                            $reqRef = "select * from partenaires  ";
                            $query = mysql_query($reqRef);
                            while ($enreg = mysql_fetch_array($query)) {
                                $refTitle      =   $enreg['titre'];
                                $refImage      =   $enreg['image'];
                                $refId      =   $enreg['id'];
                               ?>
        
            <div class="item col-md-4">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <a class="prettyPhoto" data-rel="prettyPhoto" href="<?php echo 'sesadmin/'.$refImage ?>"> <i
                                class="fa fa-expand"></i></a> <img style="height : 250px ; width : 320px" src="<?php echo 'sesadmin/'.$refImage ?>"
                            class="img-responsive" alt="" />
                    </div>
                    <div class="blog-excerpt">
                        <h3 class="text-uppercase"><a href="#"><?php echo $refTitle ?></a></h3>
                      

                    </div>
                </div>
            </div>
<?php } ?>
        </div>
        
    </div>
</div>


<?php include('menu_footer/footer.php') ?>