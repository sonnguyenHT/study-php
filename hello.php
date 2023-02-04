<?php
class hello {
    protected $lang='fr';
    function __construct()
    {
        echo ("constructed");
    }
    function greet() {
        if ($this->lang == 'fr')
            return "Bonjour";
        if ($this->lang == 'es')
            return "......";
        return "hi";
    }
}

class social extends hello {
    function bye() {
        if ($this->lang == 'fr')
            return "Au revoir";
        if ($this->lang == 'es')
            return "Adios";
        return "good bye";
    }
}

$hi = new social();
echo "<br>". $hi->greet()."<br>";
echo $hi->bye()."<br>";