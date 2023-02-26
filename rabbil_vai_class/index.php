<?php

class Product
{
    public $productPrice = "100k";

    // construstor

    public function __construct()
    {
        echo "I am Contstructor";
    }

    public function productCategoryList()
    {
        $categoryList = array('A', 'B', 'C');
        print_r($categoryList);
    }
}


$object = new Product();
$obj->productCategoryList();