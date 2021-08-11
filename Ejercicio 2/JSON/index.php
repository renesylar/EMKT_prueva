<!DOCTYPE html>
<?PHP
//////////////////////////////////////////////
// Json, index page. Json generator         //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 2   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Json encorder</title>
    </head>
    <body>
        <?php
        $array = array(
            "menu" => 
                array("id" => "file",
                      "value" => "File",
                      "popup" =>
                        array("menuitem" =>array(
                        array("value" => "New", "onclick" => "CreateNewDoc()"),
                        array("value" => "Open", "onclick" => "OpenDoc()"),
                        array("value" => "Close", "onclick" => "CloseDoc()")
                    )
                            )
                ),
            
        );
        echo json_encode($array,true);
        ?>
    </body>
</html>
