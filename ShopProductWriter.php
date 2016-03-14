<?php
require_once "ShopProduct.php";

/**
 * Created by PhpStorm.
 * User: moon
 * Date: 2016/3/10
 * Time: 23:46
 */
class ShopProductWriter
{
    private $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()})\n";
        }
        print $str;
    }
}