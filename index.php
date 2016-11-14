<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home</title>
        <!-- Bootstrap css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery  -->
        <script src="res/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="res/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="container">
            <header>
                <?php
                include("inc/header.php");     
                ?>
            </header>

            <nav>   
                <?php
                include("inc/nav.php");
                ?>
            </nav>

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
    </body>
</html>
