<?php include('menu_footer/header.php') ?>
<div class="page-head overlay-wrap" style="background: #000 url(./assets/images/spool.jpg) no-repeat center !important; background-size: cover;
  padding: 102px 0px 101px;">
    <div class="overlay"></div>
    <div class="container text-uppercase">
        <h1>Contacter Nous</h1>
        <ul class="bcrumbs">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li>Contacter Nous</li>
        </ul>
    </div>
</div>
<div class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="text-center"> <i class="fa fa-road"></i>
                    <h3><a href="#">Address</a></h3>
                    <p><?php echo $adresse1 ?>.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="text-center"> <i class="fa fa-phone"></i>
                    <h3><a href="#">Phone Numbers</a></h3>
                    <p><?php echo $tel1 ?>

                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="text-center"> <i class="fa fa-envelope"></i>
                    <h3><a href="#">e-mail</a></h3>
                    <p><?php echo $mail ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="google-map">
    <iframe
        src="https://www.google.com/maps/embed/v1/place?q=place_id:Ej1Bdi4gZHUgR3JhbmQgTWFnaHJlYiBBcmFiZSwgWmFvdWl0LUtzaWJhdCAtIFRocmF5ZXR0LCBUdW5pc2lhIi4qLAoUChIJT2poOK0KAhMRpn3DBj0BT7USFAoSCY-Nyk-mCgITEaZxvrw25EdV&key=AIzaSyBzBaETPuAL9gI50bm7LxuFpcL2URxfUC8"
        class="googlframe"></iframe>
</div>

<div class="contact-form">
    <form action="insertLetter.php" method="post" enctype="multipart/form-data" id="contact-form" class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-head text-center text-uppercase">
                        <h4>Envoyer un Message</h4>
                        <p>Toujours dévoué</p>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-push-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder="Nom*" type="text" id="Name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <input placeholder="Email*" type="email" id="email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea placeholder="Message*" rows="10" cols="4" name="message"
                                        id="Message"></textarea>
                                    <button type="submit" class="bttn bttn-md btn-block btn-primary">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php if(isset($_GET['suc'])){ ?>
<?php if($_GET['suc']=='succes'){ ?>
<div class="alert alert-primary" role="alert">
    <font color="blue">
        <center>Merci beaucoup pour votre message. Nous vérifions fréquemment vos e-mails et ferons de notre mieux pour
            répondre à votre demande</center>
    </font><br /><br />
</div>
<?php } ?>
<?php } ?>


<?php include('menu_footer/footer.php') ?>