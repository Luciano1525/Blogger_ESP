<?php

class Producto {

    private $id_producto;
    private $nombre;
    private $precio;
    private $cantidad;
    private $imagen;

    public function __construct($id, $nom, $pre, $can, $img)
    {
        $this-> id_producto = $id;
        $this-> nombre = $nom;
        $this-> precio = $pre;
        $this-> cantidad = $can;
        $this-> imagen = $img;
        
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function get_id(){
        return $this->id_producto;
    }

    public function get_precio(){
        return $this->precio;
    }

    public function get_cantidad(){
        return $this->cantidad;
    }

    public function get_imagen(){
        return $this->imagen;
    }

}



?>