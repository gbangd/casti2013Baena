<?php

//Llamado a la clase conexion.php
require_once 'conexion.php';

class Productos {
    
    public $enlaceDeDatos;
    
    public function Productos(){
       $this->enlaceDeDatos = new Conexion("empresa");
    }
    
    public function modificar_articulos($code, $name, $price, $stock, $id){
        $this->enlaceDeDatos->resultados("UPDATE articulos SET nombre='$name', codigo='$code', precioUnidad='$price', stock='$stock' WHERE id='$id'");
        return $this->afectados();
    }
    
    public function filtrar_cantidad_precio(){
        $resultados = $this->enlaceDeDatos->resultados("SELECT * FROM empresa.articulos WHERE precioUnidad > 20 AND stock <= 15");
        return $resultados;
    }
    
    public function buscar_por_id($id){
        $resultados = $this->enlaceDeDatos->resultados("SELECT * FROM articulos WHERE id='$id'");
        return $resultados;
    }
    
    public function afectados(){
       $afectados = mysql_affected_rows($this->enlaceDeDatos->enlace);
        
        if ($afectados > 0)
            return true;
        else 
            return false; 
    }
    
}

?>
