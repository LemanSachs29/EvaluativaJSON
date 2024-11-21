<?php
// Crear la tienda
$tienda = new Tienda();
// Crear categorías
$electronica = new Categoria("Electrónica");
$hogar = new Categoria("Hogar");
// Crear productos para la categoría Electrónica
$iphone = new Producto("iPhone 13", "Apple", 999);
$iphone->agregarVariante(new Variante("Negro", "128GB", 999));
$iphone->agregarVariante(new Variante("Blanco", "256GB", 1099));
$galaxy = new Producto("Galaxy S21", "Samsung", 799);
$galaxy->agregarVariante(new Variante("Negro", "128GB", 799));
$galaxy->agregarVariante(new Variante("Plateado", "256GB", 899));
// Agregar productos a la categoría Electrónica
$electronica->agregarProducto($iphone);
$electronica->agregarProducto($galaxy);
// Crear productos para la categoría Hogar
$dyson = new Producto("Dyson V11", "Dyson", 599);
$dyson->agregarVariante(new Variante("Azul", "Alta", 599));
$dyson->agregarVariante(new Variante("Negro", "Media", 549));
$nespresso = new Producto("Nespresso Essenza Mini", "Nespresso", 149);
$nespresso->agregarVariante(new Variante("Rojo", "0.6L", 149));
$nespresso->agregarVariante(new Variante("Blanco", "0.6L", 149));
// Agregar productos a la categoría Hogar
$hogar->agregarProducto($dyson);
$hogar->agregarProducto($nespresso);
// Agregar categorías a la tienda
$tienda->agregarCategoria($electronica);
$tienda->agregarCategoria($hogar);
// Ahora tienes una tienda completa en forma de objetos
?>