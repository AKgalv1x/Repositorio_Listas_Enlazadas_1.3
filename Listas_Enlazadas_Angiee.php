<?php

class Nodo{
    public $dato;
    public $siguiente;
    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class listasAnime{
    public $comienzo;
    public function __construct(){
       $this->comienzo = null;
    }

    public function insertar($dato){
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente = $this->comienzo;
        $this->comienzo = $nuevoNodo;
    }
    
    public function imprimirHTML(){
        $actual = $this->comienzo;
        echo "<ul>";
        
        while($actual != null){
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
}

$lista = new listasAnime();

$lista->insertar("Bungo Stray Dogs");
$lista->insertar("Vocaloid");
$lista->insertar("Hunter X Hunter");
$lista->insertar("Jibaku Shounen Hanako Kun");
$lista->insertar("Hetalia");
$lista->imprimirHTML();

?>