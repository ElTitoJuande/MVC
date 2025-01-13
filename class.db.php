<?php
class db{
    private $conn;

    public function __construct(){
        require_once('../../../cred.php');
        $this->conn = new mysqli("localhost", USU_CONN, PSW_CONN, "usuarios");
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
    public function checkUsuario(String $nom){
        $sentencia = "SELECT COUNT(*) FROM usuario WHERE usuario= ?";
        $consulta = $this->conn->prepare($sentencia);
        $consulta->bind_param("s", $nom); 
        $consulta->bind_result($count);
        
        $consulta->execute();
        $consulta -> fetch();

        $existe = false;
        if($count == 1)$existe = true;

        $consulta->close();
        
        return $existe;
    }
    public function registrarUsu(String $nom, String $psw){
        $sentencia = "INSERT INTO usuario (usuario, contrasenia) VALUES (?,?)";
        $consulta = $this->conn->prepare($sentencia);
        $consulta->bind_param("ss", $nom,$psw); 

        $consulta->execute();
        
        $res = false;
        if($consulta->affected_rows == 1) $res = true;

        $consulta->close();

        return $res;
    }
}
?>