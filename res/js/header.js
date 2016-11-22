$(function () {

//DATEPICKER
    //set actual date
    $("#datepicker").val($.datepicker.formatDate('dd.mm.yy', new Date()));
    //datepicker settings
    $("#datepicker").datepicker({
        showOn: "button",
        buttonImage: "img/cal1grXS.png",
        buttonImageOnly: true,
        buttonText: "Wählen Sie ein Datum aus",
        dateFormat: "dd.mm.yy"
    });
});



//set actual date - old version
//    date = new Date();
//    day = date.getDate();
//    month = date.getMonth() + 1;
//    year = date.getFullYear();
//    $("#datepicker").val(day + "." + month + "." + year);