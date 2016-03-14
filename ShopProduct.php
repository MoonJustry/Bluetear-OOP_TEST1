<?php

class ShopProduct
{

    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

    function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    function getProducer()
    {
        return "{$this->producerFirstName}" .
        " {$this->producerMainName}";
    }

    /**
     * @return string
     */
    function getSummaryLine()
    {
        $base = "$this->title ({$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    /**
     * @param $num
     */
    function setDiscount($num)
    {
        $this->discount = $num;
    }

    /**
     * @return mixed  折后价格
     */
    public function getPrice()
    {
        return ($this->price - $this->discount);
    }
}