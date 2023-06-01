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

//class animal
class Animal extends Products{   
    public $animal;
    public $icon;

    public function __construct($id, $titolo, $prezzo, $tipologia, $img, $animal, $icon){
        parent::__construct($id, $titolo, $prezzo, $tipologia, $img);
        $this->animal = $animal;
        $this->icon = $icon;
    }
}

$prodotti = [
    new Animal(1, 'croccantini', 30, 'cibo', 'https://picsum.photos/200/300', 'cane', '<i class="fa-solid fa-dog"></i>'),
    new Animal(2, 'scatoletta', 15, 'cibo', 'https://picsum.photos/200/300', 'gatto', '<i class="fa-solid fa-cat"></i>'),
    new Animal(3, 'palla', 5, 'giochi', 'https://picsum.photos/200/300', 'cane', '<i class="fa-solid fa-dog"></i>'),
    new Animal(4, 'topolino', 30, 'giochi', 'https://picsum.photos/200/300', 'gatto', '<i class="fa-solid fa-cat"></i>'),
];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oop-2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-md">
                <a class="navbar-brand" href="#"><h1>Aniaml Shop</h1></a>
            </div>
        </nav>
        <div class="container d-flex justify-content-center">
            <div class="row mt-5">
                <?php foreach ($prodotti as $key => $element) {?>
                    
                    <div class="card col-4 " style="width: 18rem;">
                        <img src="<?php echo $element->img?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><?php echo $element->titolo ?></h5>
                            <h6>tipologia: <?php echo $element->tipologia ?></h6>
                            <span>animale: <?php echo $element->animal ?></span>
                            <span class="d-block">prezzo: <?php echo $element->prezzo ?>$</span>
                        </div>
                        <div id="icon">
                            <?php echo $element->icon?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
            

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>


<style>
.card{
    padding:0;
}
#icon{
    position: absolute;
    top: 10px;
    right: 10px;
    color: red;
}
</style>