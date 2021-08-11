<?PHP
//////////////////////////////////////////////
// Sistema somos-emkt. controller           //
//                                          //
// Descripcion: Evaluacion EMKT. inciso 4   //
// Dev by: René A. Álvarez                  //
//                                          //
//////////////////////////////////////////////
?>
<?php 


include_once ('../config/db.php');

class emkt{
    public $id;
    public $nombres;
    public $apellidos;
    public $edad;
    public $email;
    public $habilidades;
    
    
    
    // getter and setter scructures
    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEdad() {
        return $this->edad;
    }

    function getEmail() {
        return $this->email;
    }

    function getHabilidades() {
        return $this->habilidades;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setHabilidades($habilidades) {
        $this->habilidades = $habilidades;
    }
    
    
    
    
    
// funcion db connection and accion
     public  function RequestRegister() {
        try {
    
            $db = new connection();
            $conexion = $db->get_connection();
            var_dump($this);
            echo '<br>'.$this->nombres;
            $statement = $conexion->prepare("CALL SP_AddEmpRequest(?,?,?,?,?)");
            $statement->bind_param("ssiss", $this->nombres, $this->apellidos, $this->edad, $this->email, $this->habilidades);

            if (!$statement->execute()) {
                throw new Exception($statement->error);
            }
           
            $db->close();
            return TRUE;
        } catch (Exception $e) {
            $db->close();
   
            return FALSE;
        }
    }
}