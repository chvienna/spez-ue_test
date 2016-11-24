
//Lösung, wo im HTML mehrere values übergeben werden; nicht eigene ids notwendig, dafür ggf etwas unübersichtlich in der Wartung
//<button type="button" class="btn btn-default" onclick="setTxtBanner('mein text', green)">Set own text with txtBtn</button>



$(document).ready(function () {
 
});
var green = "#ddf0de";
var red = "#e8c8c8";
    
function setTxtBanner(txt, color) {
    var originTxt = $('#txtBanner').text();
    var originCol = $('#txtBanner').css("background-color");
    
    $("#txtBanner").css("background-color", color).text(txt);
    window.setTimeout(function () {
        $("#txtBanner").css("background-color", originCol).text(originTxt);
    }, 3000);
}




//    //textbanner SAVED
//    $("#saveBtn").click(function () {
//        $("#txtBanner").css("background-color", "#ddf0de").text("Gespeichert!");
//        window.setTimeout(function () {
//            $("#txtBanner").css("background-color", bgColor).text(text);
//        }, 3000);
//    });
//
//    //textbanner BREAK
//    $("#breakBtn").click(function () {
//        $("#txtBanner").fadeIn().css("background-color", "#e8c8c8").text("Abgebrochen!");
//        window.setTimeout(function () {
//            $("#txtBanner").css("background-color", bgColor).text(text);
//        }, 3000);
//    });


