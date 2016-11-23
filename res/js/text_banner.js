$(document).ready(function () {
    var originText = $('#txtBanner').text();
    var originColor = $('#txtBanner').css("background-color");
    var green = "#ddf0de";
    var red = "#e8c8c8";
    var grey = "";

//    textbanner SAVED
    $(".saveBtn").click(function () {
        setTxtBanner('Gespeichert', green, originText, originColor);
    });

    //textbanner BREAK
    $(".breakBtn").click(function () {
        setTxtBanner('Abgebrochen', red, originText, originColor);
    });

//    textbanner OWN TEXT 
    $("#notTakenBtn").click(function () {
//                ...proof txtfield
        setTxtBanner('Bitte geben Sie einen Grund an, bevor Sie speichern', red , originText, originColor);
    });
});

function setTxtBanner(txt, color, originText, originColor) {
    $("#txtBanner").css("background-color", color).text(txt);
    window.setTimeout(function () {
        $("#txtBanner").css("background-color", originColor).text(originText);
    }, 3000);
}
