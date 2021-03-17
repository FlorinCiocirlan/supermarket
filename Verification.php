<?php
    namespace supermarket;
    require_once('Supermarket.php');
    require_once('Shovel.php');
    require_once('Milk.php');
    require_once('Truck.php');
    use supermarket\Supermarket\Supermarket;
    use supermarket\Product\Shovel\Shovel;
    use supermarket\Product\Milk\Milk;
    use supermarket\Product\Truck\Truck;

    $milkProduct1 = new Milk('Dorna', 10, 'Milk');
    $milkProduct2 = new Milk('Albalact', 15 , 'Milk');

    $truckProduct1 = new Truck('Aro', 6, 'Truck');
    $truckProduct2 = new Truck('Mercedes', 8, 'Truck');
    $shovelProduct1 = new Shovel('lopatarii', 'Small', 'Chocolate', 'Shovel');
    $shovelProduct2 = new Shovel('SC LOPATA', 'Medium', 'Steel', 'Shovel');


    $supermarket = new Supermarket(6 , 12);
    $supermarket->addProduct($milkProduct1);
    $supermarket->addProduct($milkProduct2);
    $supermarket->addProduct($truckProduct1);
    $supermarket->addProduct($truckProduct2);
    $supermarket->addProduct($shovelProduct1);
    $supermarket->addProduct($shovelProduct2);


    $milkProduct1->checkIfIsSour($supermarket->getStorageTemp());
    $milkProduct2->checkIfIsSour($supermarket->getStorageTemp());
    $truckProduct1->checkIfFashionable($supermarket->getFashionableWheels());
    $truckProduct2->checkIfFashionable($supermarket->getFashionableWheels());
    $shovelProduct1->checkIfStolen();
    $shovelProduct2->checkIfStolen();

    $supermarket->checkIfProductsAreSellable();

    $supermarket->getReport();
    $supermarket->removeNonSallableProducts();
    $supermarket->displayProducts();







