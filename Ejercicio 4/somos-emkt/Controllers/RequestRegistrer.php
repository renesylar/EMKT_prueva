<?PHP
//////////////////////////////////////////////
// Sistema somos-emkt, Controller.          //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 4   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////
?>
<?php

include_once '../models/EMKT.php';

if (isset($_POST["submit"])) {
    $ob_emkt = new emkt();
    $ob_emkt->setNombres($_POST['name']);
    $ob_emkt->setApellidos($_POST['last']);
    $ob_emkt->setEdad($_POST['age']);
    $ob_emkt->setEmail($_POST['email']);
    $ob_emkt->setHabilidades($_POST['hability']);

    if ($ob_emkt->RequestRegister()) {
        header('Location:../views/somos-emkt.php?mess=done');
    } else {
         header('Location:../views/somos-emkt.php?mess=error');
    }
} else {
    //404
}
?>