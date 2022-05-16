<?php
class Product{
    public $name;
    private $price;
    public $typeOfProduct;
    public $size;

    public function getPrice(){
        return $this->price;
    }

    function __construct($_name, $_price, $_typeOfProduct){
        $this->name = $_name;
        $this->price = $_price;
        $this->typeOfProduct = $_typeOfProduct;
    }
}

class Guest{
    public $name;
    public $address;
    public $phone;
    public $cart = 152;
    public $sconto = false;
    protected $creditCard;
    protected $yearOfExpireCc;
    
    public function totalPrice(){
        if($this->sconto){
            return $this->cart * 20 / 100;
        }
        else{
            return $this->cart;
        }
    }

}

class Account extends Guest{
    public $sconto = true;
}


?>