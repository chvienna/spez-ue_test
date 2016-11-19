$(document).ready(function () {
    
    //textbanner SAVED
    $("#saveBtn").click(function () {
//        $("#txtBanner").fadeIn().css("background-color", "#ddf0de");
         $("#txtBanner").fadeIn().css("background-color", "#ddf0de").text("Gespeichert!").delay(2000);
        
    });
    
    //textbanner BREAK
     $("#breakBtn").click(function () {
//        $("#txtBanner").fadeIn().css("background-color", "#ddf0de");
         $("#txtBanner").fadeIn().css("background-color", "#e8c8c8").text("Abgebrochen!").delay(2000);
        
    });
    
    
    //textbanner OWN TEXT
    $(".txtBtn").click(function () {
        setTxtBannerGreen($(".txtBtn").val());
    });
    
     function setTxtBannerGreen($txt){
        $("#txtBanner").fadeIn().css("background-color", "#ddf0de").text($txt).delay(2000);
    }
});


