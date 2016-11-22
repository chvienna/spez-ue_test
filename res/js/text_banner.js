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
    $("#myBtn1").click(function () {
        setTxtBanner('Sie haben Ihr Medikament genommen.', green , originText, originColor);
    });
    
    $("#myBtn2").click(function () {
        setTxtBanner('Mein Text2', grey , originText, originColor);
    });
});

function setTxtBanner(txt, color, originText, originColor) {
    $("#txtBanner").css("background-color", color).text(txt);
    window.setTimeout(function () {
        $("#txtBanner").css("background-color", originColor).text(originText);
    }, 3000);
}
