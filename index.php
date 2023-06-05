<?php
require_once __DIR__ . '/models/products.php';
require_once __DIR__ . '/models/animals.php';
require __DIR__ . '/database/db.php';

trait AnimalInfo {
    public $animal;
    public $icon;

    public function setAnimalInfo($animal, $icon) {
        $this->animal = $animal;
        $this->icon = $icon;
    }

    public function getAnimalName() {
        return $this->animal;
    }

    public function getAnimalIcon() {
        return $this->icon;
    }
}



var_dump($prodotti);
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
            <div class="row mt-5 justify-content-center">
                <?php foreach ($prodotti as $key => $element) {?>
                    
                    <div class="card col-12 col-md-6 col-lg-4 " style="width: 18rem;">
                        <img src="<?php echo $element->img?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><?php echo $element->titolo ?></h5>
                            <h6>tipologia: <?php echo $element->tipologia ?></h6>
                            <span>animale: <?php echo $element->getAnimalName() ?></span>
                            <span class="d-block">prezzo: <?php echo $element->prezzo ?>$</span>
                        </div>
                        <div id="icon">
                            <?php echo $element->getAnimalIcon()?>
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