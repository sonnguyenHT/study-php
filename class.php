<?php
class PartyAnimal {
    function __construct(){
        echo ("constructed<br>");
    }
    function something(){
        echo ("something<br>");
        function __destruct(){
            echo ("destructed<br>");
        }
    }
}

$x = new PartyAnimal();
$y = new PartyAnimal();
$x->something();