<!--desktop left title-->
<div id="headerTitel" class="hidden-xs hidden-sm col-md-3">
    TAGEBUCH  
</div>

<!--mobile left icon for active page-->
<div id="headerPageIconMob" class="col-xs-3 hidden-md hidden-lg">
    <img class="img-responsive" src="img/test.png" alt="imgTagebuch">
</div>

<!--desktop / tablet: centered calendar-->
<!--<div class="hidden-xs col-sm-4 col-xs-offset-1"> -->
  
<!--desktop / tablet / mobile: centered calendar-->
<div id="headerCal" class="col-xs-6 col-sm-2 col-sm-offset-2"> 
    <script>
        $(function () {
            $("#datepicker").datepicker({
                showButtonPanel: true
            });
        });
    </script>
    
    <input type="text" id="datepicker">
</div>

<!--mobile: centered calendar-->
<!--<div class="col-xs-4 col-xs-offset-1 hidden-sm hidden-md hidden-lg">
    <h4><b><?php echo date("d.m.Y"); ?></b></h4>
</div>-->

<!--desktop / mobile: right icons-->
<div id="headerLetterIcon" class="col-xs-3 pull-right">
    <img class="img-responsive" src="img/letter.png" alt="imgTagebuch">
</div>





