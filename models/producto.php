<?php

class Producto{

    public function __construct(
        private int $id,
        private string $nombre,
        private int $precio,
        private string $descripcion,
        private string $categoria,
        private int $stock
        ){}
    
    public function obtenerProducto(){
        return $this->id." ".$this->nombre." ".$this->precio." ".$this->descripcion." ".$this->categoria." ".$this->stock;
    }    
    
}