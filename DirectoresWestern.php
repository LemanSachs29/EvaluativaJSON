<?php
class Director
{
    public string $nombre;
    public $peliculas = [];

    public function __construct($nombre, $peliculas = [])
    {
        $this->nombre = $nombre;
        $this->peliculas = $peliculas;
    }

    public function agregarPelicula($pelicula)
    {
        array_push($this->peliculas, $pelicula);
    }
}

class Pelicula
{
    public string $titulo;
    public string $duracion;
    public int $anio;
    public $reparto = [];
    public $premios = [];

    public function __construct($titulo, $duracion, $anio, $reparto = [], $premios = [])
    {
        $this->titulo = $titulo;
        $this->duracion = $duracion;
        $this->anio = $anio;
        $this->reparto = $reparto;
        $this->premios = $premios;
    }
    public function agregarActor($actor)
    {
        array_push($this->reparto, $actor);
    }
    public function agregarPremio($premio)
    {
        array_push($this->premios, $premio);
    }
}

class Actor
{
    public string $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}

class Premio
{
    public string $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}
