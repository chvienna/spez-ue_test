<!--desktop left title-->
<div id="headerTitel" class="hidden-xs hidden-sm col-md-3">
    <?php
    if (isset($_GET['content'])) {
        echo $_GET['content'];
    } else
        echo "tagebuch";
    ?>
</div>

<!--mobile / tablet left icon for active page-->
<div id="headerPageIcon" class="col-xs-2 hidden-md hidden-lg">
    <?php
    if (isset($_GET['content'])) {
        switch ($_GET['content']) {
            case 'tagebuch':
                echo "<img class='img-responsive' src='img/tb1gr.png' alt='imgTagebuch'>";
                break;
            case 'nebenwirkungen':
                echo "<img class='img-responsive' src='img/nw1gr.png' alt='imgNebenwirkungen'>";
                break;
            case 'behandlung':
                echo "<img class='img-responsive' src='img/beh1gr.png' alt='imgBehandlung'>";
                break;
            case 'bericht':
                echo "<img class='img-responsive' src='img/ber11gr.png' alt='imgBericht'>";
                break;
            default:
                echo "<img class='img-responsive' src='img/tb1gr.png' alt='imgTagebuch'>";
        }
    } else {
        echo "<img class='img-responsive' src='img/tb1gr.png' alt='imgTagebuch'>";
    }
    ?>   
</div>

<!--mobile / tablet / desktop: centered calendar-->
<div id="headerCal" class="col-xs-8"> 
    <input type="text" id="datepicker">
</div>

<!--mobile / tablet / desktop: right icon-->
<div id="headerLetterIcon" class="col-xs-2 pull-right">
    <img class="img-responsive" src="img/letterMaxgr.png" alt="imgTextGroesse">
</div>



<!--<div id="headerCal" class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-2">--> 

