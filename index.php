<?php
require "vendor/autoload.php";

use Vinhphis\Lab123\Controllers\ProductController;

$ProductController = new ProductController();
//$ProductModel = new ProductModel();

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $ProductController->listProduct();
        break;
    case 'add-product':
        if (isset($_POST['Save'])) {
            $ProductController->addProducts($_POST['name'], $_POST['price'], $_POST['mota']);
        }
        $ProductController->addProduct();
        break;
    case 'delete-product':
        if (isset($_GET['id_product'])) {
            $ProductController->deleteProduct($_GET['id_product']);
        }
        $ProductController->listProduct();
        break;
    default :
        $ProductController->listProduct();
        break;
}