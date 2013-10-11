<?php

require("constantes.php");

class Conexion {
    
    public $enlace;
    
    public function Conexion($bd){
         $this->conectar($bd);      
    }
    
    private function conectar($bd){
        $this->enlace = mysql_connect(SERVIDOR, USUARIO, CLAVE) or die("Error de conexion");
        mysql_select_db($bd, $this->enlace) or die("Error al conectar con la base de datos");
    }
    
    public function resultados($query){
        $resultados = mysql_query($query, $this->enlace);
        return $resultados;
    } 
    
    public function desconectar(){
        mysql_close($this->enlace);
    }

}

?>
