<?php
class db{
    private $conn;

    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "usuarios");
    }
    
    public function compCrede(String $nom, String $psw){
        $sentencia = "SELECT COUNT(*) FROM usuario WHERE usuario = ? AND contrasenia = ?";
        $consulta = $this->conn->prepare($sentencia);
        $consulta->bind_param("ss", $nom, $psw); 
        $consulta->bind_result($count);
        
        $consulta->execute();
        $consulta -> fetch();

        $existe = false;
        if($count == 1)$existe = true;

        $consulta->close();
        return $existe;
    }
}
?>