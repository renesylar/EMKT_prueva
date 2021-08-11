<!DOCTYPE html>
<?PHP
//////////////////////////////////////////////
// Json, index page.                        //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 3   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Json read encorder  </title>
        <!-- ||   Boostrap src´s   || -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


        <!-- ||   JS encargado de obtener datos desde el Json   || -->
        <script src="JS/Json_reader.js"></script>
    </head>
    <body>
        <table class="table table-dark table-striped">
            <thead>
                <tr>

                    <th scope="col">Objeto</th>
                    <th scope="col">Contenido</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>id de menu</td>
                    <td><span id="id_menu"> </span></td>
                </tr>
                <tr>

                    <td>value de menu</td>
                    <td><span id="value_menu"> </span></td>

                </tr>
                <?PHP
                for ($i = 1; $i <= 3; $i++) {
                    ?>
                    <tr>
                        <td> pop menu item <?PHP echo $i; ?></td>

                        <td> <span id="popup_menuitem<?PHP echo $i; ?>_value"></span></td>
                    </tr>
                    <tr>
                        <td>pop menu onclick <?PHP echo $i; ?></td>
                        <td> <span id="popup_menuitem<?PHP echo $i; ?>_onclick"></span></td>
                    </tr>
                    <?PHP
                }
                ?>
                <tr>



                </tr>
            </tbody>
        </table>




    </body>
</html>
