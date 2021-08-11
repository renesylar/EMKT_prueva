//////////////////////////////////////////////
// Json, JS consumer                        //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 3   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////

$.getJSON("newJson.php", function (json) {
    console.log(JSON.stringify(json.menu.id));

    $("#id_menu").text(json.menu.id);
    $("#value_menu").text(json.menu.value);
    $("#popup_menuitem1_value").text(json.menu.popup.menuitem[0].value);
    $("#popup_menuitem2_value").text(json.menu.popup.menuitem[1].value);
    $("#popup_menuitem3_value").text(json.menu.popup.menuitem[2].value);
    $("#popup_menuitem1_onclick").text(json.menu.popup.menuitem[0].onclick);
    $("#popup_menuitem2_onclick").text(json.menu.popup.menuitem[1].onclick);
    $("#popup_menuitem3_onclick").text(json.menu.popup.menuitem[2].onclick);
})