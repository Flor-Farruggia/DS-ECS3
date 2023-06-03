<?php
class Product
{
    public $id;
    public $name;
    public $price;
    Public $stock;
    public $productType;

    public function productData ()
    {
        echo 'The product information: '.'<br>';
        echo 'Id: '.$this->id.'<br>';
        echo 'Name: '.$this->name.'<br>';
        echo 'Price: '.$this->price.'<br>';
        echo 'Stock: '.$this->stock.'<br>';
        echo 'The type of product: '.'<br>';
        echo 'Type of product id: '.$this->productType->id.'<br>';
        echo 'Description for type of product: '.$this->productType->description.'<br>';
    }
}