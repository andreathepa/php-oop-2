<?php

    require_once __DIR__."/Models/Product.php";
    require_once __DIR__."/Models/Food.php";
    require_once __DIR__."/Models/Games.php";
    require_once __DIR__."/Models/Utilities.php";

    $food_1 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Royal Canin Mini Adult', 'Euro 43,99','Dog', '545', 'prosciutto, riso');

    $food_2 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpghttps://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Euro 44,99','Dog','600', 'manzo, cereali');

    $food_3 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpghttps://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Almo Nature Cat Daily Lattina', 'Euro 34,99','Cat','400', 'tonno, pollo, prosciutto');

    $food_4 = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpghttps://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Mangime per pesci Guppi', 'Euro 2,99','Fish','30', 'Pesci, alghe, cereali');

    $Utilities_1 = new Utilities ('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Voliera Wilma in Legno', 'Euro 184,99','Bird', 'Wood', '120 cm x 200 cm');

    $Utilities_2 = new Utilities ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpghttps://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce filtranti per fitro pesci', 'Euro 2,99','Fish','Materiale espanso', 'ND');

    $Games_1 = new Games ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpghttps://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Kong Classic', 'Euro 13,99','Dog','Galleggia e rimbalza', '8,5 cm x 10cm');

    $Games_2 = new Games ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpghttps://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Topini', 'Euro 4,99','Cat','Morbido con codina', 'Pesci, alghe, cereali');



    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <title>Php OOP</title>
    </head>
    <body>
        
        <div class="wrapper">
                <header>
                    <div class="container mt-5 text-center">
                        <h1>BOOLSHOP</h1>
                    </div>
                </header>
                <div class="main">
                    <div class="container my-5">
                        <div class="row">
                                <div class="col-4 card">
                                    <img src="<?php echo $food_1->image ?>" alt="">
                                    <div><?php echo $food_1->title ?></div>
                                    <div>Price: <?php echo $food_1->price ?></div>
                                    <div><?php echo $food_1->type ?></div>
                                    <div>Weight: <?php echo $food_1->weight ?></div>
                                    <div>Ingredients: <?php echo $food_1->ingredients ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $food_2->image ?>" alt="">
                                    <div><?php echo $food_2->title ?></div>
                                    <div>Price: <?php echo $food_2->price ?></div>
                                    <div><?php echo $food_2->type ?></div>
                                    <div>Weight: <?php echo $food_2->weight ?></div>
                                    <div>Ingredients: <?php echo $food_2->ingredients ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $food_3->image ?>" alt="">
                                    <div><?php echo $food_3->title ?></div>
                                    <div>Price: <?php echo $food_3->price ?></div>
                                    <div><?php echo $food_3->type ?></div>
                                    <div>Weight: <?php echo $food_3->weight ?></div>
                                    <div>Ingredients: <?php echo $food_3->ingredients ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $food_4->image ?>" alt="">
                                    <div><?php echo $food_4->title ?></div>
                                    <div>Price: <?php echo $food_4->price ?></div>
                                    <div><?php echo $food_4->type ?></div>
                                    <div>Weight: <?php echo $food_4->weight ?></div>
                                    <div>Ingredients: <?php echo $food_4->ingredients ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $Utilities_1->image ?>" alt="">
                                    <div><?php echo $Utilities_1->title ?></div>
                                    <div>Price: <?php echo $Utilities_1->price ?></div>
                                    <div><?php echo $Utilities_1->type ?></div>
                                    <div>Material: <?php echo $Utilities_1->material ?></div>
                                    <div>Ingredients: <?php echo $Utilities_1->dimension ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $Utilities_2->image ?>" alt="">
                                    <div><?php echo $Utilities_2->title ?></div>
                                    <div>Price: <?php echo $Utilities_2->price ?></div>
                                    <div><?php echo $Utilities_2->type ?></div>
                                    <div>Material: <?php echo $Utilities_2->material ?></div>
                                    <div>Ingredients: <?php echo $Utilities_2->dimension ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $Games_1->image ?>" alt="">
                                    <div><?php echo $Games_1->title ?></div>
                                    <div>Price: <?php echo $Games_1->price ?></div>
                                    <div><?php echo $Games_1->type ?></div>
                                    <div>Features: <?php echo $Games_1->features ?></div>
                                    <div>Ingredients: <?php echo $Games_1->dimension ?></div>
                                </div>
                                <div class="col-4 card">
                                    <img src="<?php echo $Games_2->image ?>" alt="">
                                    <div><?php echo $Games_2->title ?></div>
                                    <div>Price: <?php echo $Games_2->price ?></div>
                                    <div><?php echo $Games_2->type ?></div>
                                    <div>Features: <?php echo $Games_2->features ?></div>
                                    <div>Ingredients: <?php echo $Games_2->dimension ?></div>
                                </div>
                        </div>
                    </div>

                </div>

        </div>
        <script type="text/javascript" src="./js/script.js"></script>

    </body>
</html>