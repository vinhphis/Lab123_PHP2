<?php
namespace Vinhphis\Lab123\Models;
use Vinhphis\Lab123\Models\DataBase;

class ProductModel
{
    public function getAllProduct()
    {
        $database = new DataBase();
        $sql = "SELECT * FROM product ";
        return $database->getData($sql);
    }

    public function insertProduct($name, $price, $mota)
    {
        $database = new DataBase();
        $sql = "INSERT INTO product( name_product, price, mota) 
                VALUES('$name','$price','$mota') ";
        return $database->getData($sql);
    }

    public function xoaProduct($id_product)
    {
        $database = new DataBase();
        $sql = "DELETE FROM product WHERE id_product = '$id_product' ";
        return $database->getData($sql);
    }
}

