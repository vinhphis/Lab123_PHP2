<?php

namespace Vinhphis\Lab123\Controllers;

use Vinhphis\Lab123\Models\ProductModel;

class ProductController
{
    function listProduct()
    {
        $productModel = new ProductModel();
        $listProduct = $productModel->getAllProduct();
        include "src/Views/ProductView.php";
    }

    function addProduct()
    {
//    $listCategory = getAllCategory();
        include "src/Views/ProductAdd.php";
    }

// thêm sản phẩm
    function addProducts($name, $price, $mota)
    {
        $productModel = new ProductModel();
        if (empty($name) || empty($price) || empty($mota)) {
            echo '<script>alert("Không được bỏ trống")</script>';
        } else {
            $check = $productModel->insertProduct($name, $price, $mota);
            if (!$check) {
                echo '<script>alert("Thêm sản phẩm thành công")</script>';
            }
        }
    }

    function deleteProduct($id_product)
    {
        $productModel = new ProductModel();
//    gọi hàm xoaProduct bên Models
        $productModel->xoaProduct($id_product);
    }
}

