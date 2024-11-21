<?php
class Variante
{
    public $color;
    public $almacenamiento;
    public $precio;
    public function __construct($color, $almacenamiento, $precio)
    {
        $this->color = $color;
        $this->almacenamiento = $almacenamiento;
        $this->precio = $precio;
    }
}
class Producto
{
    public $nombre;
    public $marca;
    public $precio;
    public $variantes = [];
    public function __construct($nombre, $marca, $precio, $variantes = [])
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->variantes = $variantes;
    }
    public function agregarVariante($variante)
    {
        $this->variantes[] = $variante;
    }
}
class Categoria
{
    public $nombre;
    public $productos = [];
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }
}
class Tienda
{
    public $categorias = [];
    public function agregarCategoria($categoria)
    {
        $this->categorias[] = $categoria;
    }
}
?>