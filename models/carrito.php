<?php

require("producto.php");

public Carrito{

    public function __construct(
        private array carrito;
    ){}

    public function agregarProducto(Producto $producto){
        $this->carrito[] = $producto;
    }

}


?>