<?php
//class animal
class Animal extends Products{   
    use AnimalInfo;

    public function __construct($id, $titolo, $prezzo, $tipologia, $img, $animal, $icon){
        parent::__construct($id, $titolo, $prezzo, $tipologia, $img);
        $this->setAnimalInfo($animal, $icon);
    }
}
?>