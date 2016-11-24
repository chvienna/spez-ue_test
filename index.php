<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Med-App-SpezUE</title>
        <!-- css -->
        <link href="res/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="res/css/all.css" rel="stylesheet" type="text/css"/>
        <link href="res/css/mobile.css" rel="stylesheet" type="text/css"/>
        <link href="res/css/tablet.css" rel="stylesheet" type="text/css"/>
        <link href="res/css/desktop.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery  -->
        <script src="res/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="res/js/header.js" type="text/javascript"></script>
        <script src="res/js/text_banner.js" type="text/javascript"></script>
        <!-- javascript -->
        <script src="res/js/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- DATEPICKER styles & scripts -->
        <link href="res/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
<!--        <link href="res/css/jquery-ui.structure.css" rel="stylesheet" type="text/css"/>-->
        <script src="res/js/jquery-ui.js" type="text/javascript"></script>
            <!--customized jquery theme-->
        <link href="res/css/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container"> 
            <!--overall row-->
            <div class="row"> 
                <!--extra col for desktop navigation-->               
                <div class="hidden-xs hidden-sm col-md-3">
                    <nav>   
                        <?php
                        include("inc/nav_desktop.php");
                        ?>
                    </nav>                 
                </div>

                <!--extra col for desktop header, text_banner and main content-->
                <div id="colContentDt" class="col-md-9"> 
                    <!--header-->
                    <div class="row rowHeaderCentered">                      
                        <header>
                            <?php
                            include("inc/header.php");
                            ?>
                        </header>                      
                    </div>

                    <!--text_banner-->
                    <div class="row">                        
                        <div id="txtBanner" class="panel panel-default panel-body">
                            <?php
                            include("inc/text_banner.php");
                            ?>
                        </div>                     
                    </div>

                    <!--main content-->
                    <div class="row">                        
                        <main>               
                            <?php
                            if (isset($_GET['content'])) {
                                switch ($_GET['content']) {
                                    case 'tagebuch':
                                        include("inc/tagebuch.php");
                                        break;
                                    case 'nebenwirkungen':
                                        include("inc/nebenwirkungen.php");
                                        break;
                                    case 'behandlung':
                                        include("inc/behandlung.php");
                                        break;
                                    case 'bericht':
                                        include("inc/bericht.php");
                                        break;
                                    default:
                                        include("inc/tagebuch.php");
                                }
                            } else {
                                include("inc/tagebuch.php");
                            }
                            ?>              
                        </main>                      
                    </div>  
                </div>   <!--end col desktop content-->

                <!--extra row for mobile/tablet navigation-->
                <div class="row">
                    <div class="hidden-md hidden-lg">
                        <nav class="navbar navbar-fixed-bottom">   
                            <?php
                            include("inc/nav_mobile.php");
                            ?>
                        </nav> 
                    </div>
                </div>

            </div>   <!--end overall row-->  
        </div>  <!--end container--> 
    </body>
</html>
