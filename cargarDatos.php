<?php

include('DirectoresWestern.php');

$leoneDir = new Director("Sergio Leone");

$puniadoPeli = new Pelicula("Por un puñado de dólares", "99 min", "1964");
$puniadoPeli->agregarActor("Clint Eastwood");
$puniadoPeli->agregarActor("Gian Maria Volontè");
$puniadoPeli->agregarActor( "Marianne Koch");
$puniadoPeli->agregarActor("Wallach");
$puniadoPeli->agregarActor("José Calvo");
$puniadoPeli->agregarPremio("N/A");

$puniadoMasPeli = new Pelicula("Por unos dólares más", "132 min", "1965");
$puniadoMasPeli->agregarActor("Clint Eastwood");
$puniadoMasPeli->agregarActor("Lee Van Cleef");
$puniadoMasPeli->agregarActor( "Gian Maria Volonteè");
$puniadoMasPeli->agregarActor("Klaus Kinski");
$puniadoMasPeli->agregarActor("Mariane Koch");
$puniadoMasPeli->agregarPremio("N/A");

$buenoFeoMalo = new Pelicula("El bueno, el feo y el malo", "161 min", "1966");
$buenoFeoMalo->agregarActor("Clint Eastwood");
$buenoFeoMalo->agregarActor( "Eli Wallach");
$buenoFeoMalo->agregarActor("Lee Van Cleef");
$buenoFeoMalo->agregarActor("Rada Rassimov");
$buenoFeoMalo->agregarActor("Luigi Pistilli");
$buenoFeoMalo->agregarPremio("N/A");


$leoneDir->agregarPelicula($puniadoPeli);
$leoneDir->agregarPelicula($puniadoMasPeli);
$leoneDir->agregarPelicula($buenoFeoMalo);

$clintDirector = new Director("Clint Eastwood");

$imperdonablesPeli = new Pelicula("Los imperdonables", "131 min", "1992");
$imperdonablesPeli->agregarActor("Clint Eastwood");
$imperdonablesPeli->agregarActor("Gene Hackman");
$imperdonablesPeli->agregarActor( "Morgan Freeman");
$imperdonablesPeli->agregarActor("Richard Harris");
$imperdonablesPeli->agregarActor("Jaimz Woolvet");
$imperdonablesPeli->agregarPremio("Premio de la Academia a la Mejor Película");
$imperdonablesPeli->agregarPremio("Premio de la Academia al Mejor Director (Clint Eastwood)");
$imperdonablesPeli->agregarPremio("Premio de la Academia al Mejor actor de Reparto (Gene Hackman)");

$jinetePalidoPeli = new Pelicula("El Jinete Pálido", "131 min", "1992");
$jinetePalidoPeli->agregarActor("Clint Eastwood");
$jinetePalidoPeli->agregarActor("Michael Moriarty");
$jinetePalidoPeli->agregarActor( "Laura Dern");
$jinetePalidoPeli->agregarActor("Chris Penn");
$jinetePalidoPeli->agregarActor("Richard Dysart");
$jinetePalidoPeli->agregarPremio("N/A");


$infiernoCobardesPeli = new Pelicula("Infierno de Cobardes", "105 min", "1973");
$infiernoCobardesPeli->agregarActor("Clint Eastwood");
$infiernoCobardesPeli->agregarActor("Verna Bloom");
$infiernoCobardesPeli->agregarActor( "Marianna Hill");
$infiernoCobardesPeli->agregarActor("Mitchell Ryan");
$infiernoCobardesPeli->agregarActor("Jack Ging");
$infiernoCobardesPeli->agregarPremio("N/A");

$clintDirector->agregarPelicula($imperdonablesPeli);
$clintDirector->agregarPelicula($jinetePalidoPeli);
$clintDirector->agregarPelicula($infiernoCobardesPeli);


$directores = array($leoneDir, $clintDirector);

header('Content-Type: application/json');
echo json_encode($directores, JSON_PRETTY_PRINT);

?>