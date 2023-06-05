<?php


//classe padre
class Products{
    public $id;
    public $titolo;
    public $prezzo;
    public $tipologia;
    public $img;

    public function __construct($id, $titolo, $prezzo, $tipologia, $img){
        $this->id = $id;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->tipologia = $tipologia;
        $this->img = $img;
    }
}
?>