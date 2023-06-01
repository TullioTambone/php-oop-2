<?php

//classe padre
class Products{
    public $animal;
    public $food;
    public $toys;

    public function __construct(Animal $animal, Food $food, Toys $toys){
        $this->animal = $animal;
        $this->food = $food;
        $this->toys = $toys;
    }
}

//class animal
class Animal{   
    public $dog;
    public $cat;

    public function __construct($dog, $cat){
        $this->dog = $dog;
        $this->cat = $cat;
    }
}

//class food
class Food{
    public $croccantini;
    public $scatoletta;

    public function __construct($croccantini,$scatoletta){
        $this->croccantini = $croccantini;
        $this->scatoletta = $scatoletta;
    }
}

//class gadget
class Toys{
    public $ball;
    public $mouse;
    
    public function __constructor($ball, $mouse){
        $this->ball = $ball;
        $this->mouse = $mouse;
    }
}
?>