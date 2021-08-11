<?PHP
//////////////////////////////////////////////
// Json, newJson.                           //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 3   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////

 $menuitems = array(
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
        echo json_encode($menuitems,true);