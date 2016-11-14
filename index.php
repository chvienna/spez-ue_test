<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-- css -->
        <link href="res/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="res/css/desktop.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery  -->
        <script src="res/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <!-- javascript -->
        <script src="res/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">          
            <div class="row">
                <header class="col-xs-12">
                    <?php
                    include("inc/header.php");
                    ?>
                </header>
            </div>

            <div class="row">             
                <main class="col-xs-12">               
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

            <div class="row">
                <nav class="col-xs-12">   
                    <?php
                    include("inc/nav.php");
                    ?>
                </nav>  
            </div>
        </div>   <!--  end row content-->
    </body>
</html>
