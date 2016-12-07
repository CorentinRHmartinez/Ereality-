<?php
session_start();

$errors = [];
if (isset($_SESSION['errors'])){
    $errors = $_SESSION['errors'];
}

$postdata = [];
if (isset($_SESSION['field'])){
    $postdata = $_SESSION['field'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E-reality - Badge ">
    <meta name="author" content="">
    <meta name="keywords" content="E-reality,parler vraiment,révolution social"/>

    <title>E-reality</title>
    <meta name="google" content="notranslate" />
    
     <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new-age.css" rel="stylesheet">
    <!-- formulaire css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <!-- Google Analytics -->
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-88254693-1', 'auto');
  ga('send', 'pageview');


</script>
       <!-- Navigation
    ==========================================-->
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#download">LE PRODUIT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">LES FONCTIONNALITES </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#step">COMMENT ÇA MARCHE</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
      <!-- Home
    ==========================================-->
    <header>
        <div class="container">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <section class="cd-intro">
                            <h1 class="cd-headline rotate-1">
                             <img class="barreheader" src="./img/barre.png" />
                                <div class="page">

  <div id="home-news">
    <div class="home_header">
      <strong>La technologie qui</strong>
 
      <span>m’aide à trouver un travail</span>

      <span>me fait rencontrer l’amour </span>

      <span>me présente de nouveaux amis</span>

  </div>
</div>
   </div>
	</h1>
     </section>
                            <div class="dowload">
                            <a href="#download" class="hidden btn btn-xl page-scroll">Regarder la video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/implant badge.png" class="img-responsive" alt="">
                                </div>
                    </div>
                </div>
            </div>
    </header>

   
     <section id="download" class="bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="t3 hidden-sm hidden-xs text-center"><h3 class="t1"><span class="blue">UNE PUCE POUR </span> LES CONNECTER TOUS !
                    <hr>
                </h3></div>
            </div>
            <div class="row pad">
            <div class="hidden-sm hidden-xs text-right col-md-4 col-md-offset-8 ">
                <p  class="t3" id="p1">ACCOMPAGNÉ D'UN BADGE INTERACTIF</p>
                <p class="t3 blue">et de l'application E-reality</p>
            </div></div>

            <div class=" hidden-sm hidden-xs row bard bardok">

                <div class="col-md-2 col-md-offset-10 bar"></div>

            </div>




            <div class="row">
                <div class="col-xs-12 col-md-4 text-left">
                    <p class="t3 blue">E-REALITY, LA PUCE QUI VOUS</p><p class="t2">CONNECTE AU RÉÈL.</p>
                    <div class="row bard bardok">
                        <div class="col-xs-2 col-md-6 bar"></div>

                    </div>

                    <p class="nop col-xs-6 text-justify col-md-12">Grâce à une technologie innovante, la puce détecte le taux  d'endorphine (l'hormone du plaisir) sécrété par votre cerveau au cours de votre journée. Ainsi , un profil détaillé est établi basé sur vos goûts et vos passions</p>
                    <div class="col-xs-6 hidden-md hidden-lg"><img src="img/implant badge 2.png" class="img-responsive BadgeI" alt=""></div>
                    <a href="#step" class="col-xs-12 space4 btn  btn-xl page-scroll">comment ça marche</a>


                <div class="t1 row hidden-md hidden-lg text-right pad"><div class="text-right col-xs-12">
                <p class="" id="p1">ACCOMPAGNÉ <br> D'UN BADGE INTERACTIF</p>
                <p class="t1 blue">et de l'application E-reality</p>
                </div></div>
                <div class="row hidden-md hidden-lg bard bardok">
                <div class="col-xs-2 col-xs-offset-10 bar"></div>    
                </div>


                </div>

                <div class="col-md-6">

                            <div class="row hidden-sm hidden-xs">
                            <div class="col-md-4"><img src="img/implant badge 2.png" class="img-responsive BadgeI" alt=""></div>
                            <div class="col-md-8"><img src="img/phone.png" class="img-responsive" alt=""></div>
                            </div>

                </div>
                <div class="hidden-lg hidden-md col-xs-6"><img src="img/phone.png" class="img-responsive" alt=""></div>
                <div class="col-md-2 col-xs-6 text-right">

                    <p class="text-right">Prochainement disponible <br><strong>sur Android et IOS</strong></p>
                    <div class="col-xs-6 col-md-12 col-md-offset-0 col-xs-offset-6 nop">
                    <a class= href="https://play.google.com/store?hl=en"><img  src="img/google-play-badge.svg" class="img-responsive" alt=""></a>
                    <a  href="https://itunes.apple.com/us/genre/ios/id36?mt=8"><img src="img/app-store-badge.svg" class="main img-responsive" alt=""></a>
                    </div>

                </div>


                    </div>

            </div>




    </section>

    
    
    
    
      <!-- E-reality le badge communicatif
    ==========================================-->
    
    <section id="features" class="features">

        <div class="container">
            <div class="container row"><div  class="space3"></div></div>
                        <div class="col-xs-12 col-md-6 col-md-offset-6"><p class="t1"><span class="blue">UNE MULTITUDE D'OPTIONS</span> ET DE FONCTIONNALITES</h3></div>
                        <hr>
            <div class="container row"><div  class="space2"></div></div>
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <!-- <img src="img/photo femme.png" class="img-responsive" alt=""> -->
                            <div class="row">
                                <div class="things col-xs-offset-0 col-xs-4 col-md-2 col-md-offset-6 text-right " id="triggers-container1">

                                    <p class="trigger" data-target="amis">AMIS</p>
                                    <p class="trigger" data-target="amour">AMOUR</p>
                                    <p class="trigger" data-target="travail">TRAVAIL</p>
                                    <p class="trigger" data-target="discussion">DISCUSSION</p>
                                    <p class="trigger" data-target="sport">SPORT</p>

                                    </div>

                                      



 <div class ="col-md-3 col-md-offset-1 col-xs-offset-0 col-xs-6 trigger" id="img-container1">
     <div class="amis invisible1 visible text-right">
         <p><span class="blue">Elargissez votre</span> cercle d'amis </p>
     <img class="img-responsive" src="img/amis.png"></img>
     </div>
     <div class="amour invisible1 text-right">
         <p><span class="blue">Trouvez</span> l'âme sœur </p>
         <img class="img-responsive" src="img/amour.png"></img>
     </div>
     <div class="travail invisible1 text-right">
         <p><span class="blue">Trouvez</span> un job</p>
         <img class="img-responsive" src="img/amis.png"></img>
     </div>
     <div class="discussion invisible1 text-right">
         <p><span class="blue">Lancez</span> le débat </p>
         <img class="img-responsive" src="img/discussion.png"></img>
     </div>
     <div class="sport invisible1 text-right">
         <p><span class="blue">Défiez</span> votre entourage</p>
         <img class="img-responsive" src="img/sport.png">

     </div>

 </div>






                            </div>
            <img class="hidden-sm hidden-xs ok" src="img/photofemme.png"></img>
        </div>
    </section>
      <!-- Innovation au service des contact humain
    ==========================================-->
    
    
    
    
      <!-- Chargement du badge
    ==========================================-->
    
    
    
      <!-- Video
    ==========================================-->

    <section id="step" class="download bg-primary text-center">
       <div class="hidden-xs container row"><div  class="space2"></div></div>
        <div class="container">

            <div class="bar hidden-sm hidden-xs col-md-4 col-md-offset-1"><h3 class="t1">COMMENT ÇA <span id="blue"> MARCHE ?</span></h3></div>
             <div class="hidden-lg hidden-sm text-left col-xs-12"><h3 class="t1">COMMENT <span id="blue"><br>ÇA  MARCHE ?</span></h3></div>
        </div>
        <div class="hidden-xs container row"><div class="space col-md-3 col-md-offset-2"></div></div>
        <div class="hidden-xs hidden-sm container" id="triggers-container">


            <div class="row">

                <div class="col-md-3 trigger visible"  data-target="img1">
                    <a class="cercle">1</a>
                    <p class="rel">Implantez la puce en vous rendant dans un de nos laboratoires.</p>
                </div>


                <div class="col-md-3 trigger"  data-target="img4">
                    <a class="cercle">4</a>
                    <p class="rel">Clipsez le badge sur vous lorsque vous sortez.</p>
                </div>

            </div>

            <div class="row bard">
                <div class="col-md-2 bar"></div>
                <div class="col-md-2 bar col-md-offset-1"></div>
            </div>


            <div class="row">

                <div class="col-md-3 trigger"  data-target="img2">
                    <a class="cercle">2</a>
                    <p class="rel">Lorsqu'un pic d'endorphine est détecté une notification vous ai envoyée.</p>
                </div>


                <div class="col-md-3 trigger"  data-target="img5">
                    <a class="cercle">5</a>
                    <p class="rel">Le badge s'allume dès que vous croisez un utilisateur.</p>
                </div>

            </div>

            <div class="row bard">
                <div class="col-md-2 bar"></div>
                <div class="col-md-2 bar col-md-offset-1"></div>
            </div>

            <div class="row">

                <div class="col-md-3 trigger"  data-target="img3">
                    <a class="cercle">3</a>
                    <p class="rel">A vous ensuite de compléter votre profil.</p>
                </div>


                <div class="col-md-3 trigger"  data-target="img6">
                    <a class="cercle">6</a>
                    <p class="rel">Testez votre compatibilité en sautant le pas!</p>
                </div>

            </div>



        </div>
<div class="container">
 <div class="hidden-md hidden-lg text-center container   col-xs-12 col-sm-12" id="triggers-container2">



                <div class="col-xs-2  col-sm-2  hidden-md hidden-lg trigger visible"  data-target="img1">
                    <a class="cercle">1</a></div>
             


                <div class="col-xs-2 col-sm-2 trigger"  data-target="img2">
                    <a class="cercle">2</a></div>
                    
                <div class="col-xs-2  col-sm-2 trigger"  data-target="img3">
                    <a class="cercle">3</a></div>


                <div class="col-xs-2 col-sm-2 trigger"  data-target="img4">
                    <a class="cercle">4</a></div>
                   
                
                <div class="col-xs-2 col-sm-2 trigger"  data-target="img5">
                    <a class="cercle">5</a></div>

                    
                <div class="col-xs-2  col-sm-2  trigger"  data-target="img6">
                    <a class="cercle">6</a>
                                    

            </div>



        </div>

         <div class ="col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0 trigger hidden-md hidden-lg  text-center" id="img-container2">

            <p class=" col-xs-12 col-sm-12 img1 visible hut">Implantez la puce en vous rendant dans un de nos laboratoires .</p>
            <p class="col-xs-12 col-sm-12 img2 hut">Lorsqu'un pic d'endorphine est détecté une notification vous ai envoyée.</p>
            <p class="col-xs-12 col-sm-12 img3 hut">Clipsez le badge sur vous lorsque vous sortez.</p>
            <p class="col-xs-12 col-sm-12 img4 hut">Le badge s'allume dès que vous croisez un utilisateur.</p>
            <p class="col-xs-12 col-sm-12 img5 hut">A vous ensuite de compléter votre profil.</p>
            <p class="col-xs-12 col-sm-12 img6 hut">Testez votre compatibilité en sautant le pas!</p>
            
        </div></div>


        <div class ="col-md-6 col-md-offset-4 trigger hidden-sm hidden-xs" id="img-container">
            <img class="img1 img-responsive imageT visible" src="img/img1.png"></img>
            <img class="img2 img-responsive imageB" src="img/img2.png"></img>
            <img class="img3 img-responsive imageC" src="img/img3.png"></img>
            <img class="img4 img-responsive imageC" src="img/img4.png"></img>
            <img class="img5 img-responsive imageC" src="img/img5.png"></img>
            <img class="img6 img-responsive imageB" src="img/img6.png"></img>
        </div>

       
    
        <div class="hidden-xs container row"><div  class="space2"></div></div>


        


    </section>
      <!-- formulaire
    ==========================================-->

<section id="form" class="form text-center">
<div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 title"><h3 class="title"><span class="white">PARTICIPEZ </span> AUX TESTS !
                    <hr>
                </h3></div>
            </div>
    <div class=".col-xs-6 .col-md-4">
    <div class="row">

        <main id="formulaire" class="center">

  <script>


                 $(function(){


                var name = $('#Name'),
                    first_name = $('#first_name'),
                    email = $('#Email'),
                    Subject = $('#Subject'),
                    message = $('#Message');


                // VERIFICATION NOM
                Name.keyup(function(){
                    if($(this).val().length > 50){
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });


                // VERIFICATION MAIL
                Email.keyup(function(){
                    if(($(this).val().indexOf('@') == -1) || ($(this).val().indexOf('.') == -1)) {
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });


                // VERIFICATION SUJET
                Subject.keyup(function(){
                    if($(this).val().length < 5){
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });


                // VERIFICATION MESSAGE
                Message.keyup(function(){
                    if($(this).val().length < 2){
                        $(this).css({ borderColor : 'red', color : 'red'});
                    }
                    else{
                        $(this).css({ borderColor : 'green', color : 'green'});
                    }
                });


            });
</script>
            <form method="post" action="include/email.php">
<input type="text" id="Name" class="souligne name" name="Name" placeholder="Nom / Prénom" value="" style="
    width: 30%;
">
<input type="text" id="Subject" name="Subject" class="souligne" placeholder="Age" value="" style="
    width: 30%;
">
                <input type="email" id="Email" name="Email" class="souligne" placeholder="Email" value="<?php echo (isset($postdata['Email'])?$postdata['Email']:'') ?>">
                <textarea id="Message" name="Message" class="souligne" cols="27" rows="10" placeholder="Motivations"><?php echo (isset($postdata['Message'])?$postdata['Message']:'') ?></textarea>
                <input id="validation" type="submit" value="Envoyer">
            </form>

            </main>
            </div>
        </div>
    </div>

    </section>
      <!-- fin de formulaire
    ==========================================-->
      <!-- Footer
    ==========================================-->
    <footer>
        <div class="container">
            <div id="right" class="hidden-xs hidden-sm text-center col-md-3">
                <p>Copyright ©/p>
                <p>E-REALITY |<A href="#"> Mentions légales</A></p>
                <p><a href="#">FAQ</a></p>
                <p class="blue" id="legal"></p></div>
            <div class=" text-center col-md-3">
                <p >Prochainement disponible</p>
                <p >sur Android et IOS </p>
            </div>

            <div class="col-xs-12 col-sm-12 text-center col-md-4">
                
                    <a class="col-xs-3 col-md-4 col-xs-offset-3   badge-link" href="https://play.google.com/store?hl=en"><img class="img-responsive" src="img/google-play-badge.svg" alt=""></a>
                    <a class="col-xs-3 col-md-4  badge-link" href="https://itunes.apple.com/us/genre/ios/id36?mt=8"><img class="img-responsive" src="img/app-store-badge.svg" alt=""></a>
              
            </div>
            <div id="reseau" class="col-xs-12 col-sm-12 col-md-2">
                <a class="reseau" href=""><img src="img/youtube.svg" alt=""></a>
                <a class="reseau" href="https://twitter.com/eRealityTechno"><img src="img/twitter.svg" alt=""></a>
                <a class="reseau" href="https://www.facebook.com/eRealityTechno/?fref=ts">
                    <img  src="img/facebook.svg" alt=""></a>

            </div>

        </div>
    </footer>
        <!-- javascript -->
 <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script src="js/click.js"></script>
    <script src="js/clack.js"></script>
    <script src="js/clock.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

 <!-- Cercular bar -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/cercular.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
</body>

</html>
    
    
    
    
    
    
    
    
    
    
