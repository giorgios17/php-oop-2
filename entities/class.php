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

class User{
    public $name;
    public $address;
    public $phone;
    public $cart = 152;
    public $isRegistered;
    public $creditCard;
    public $yearOfExpireCc;
    

    function __construct($_name, $_address, $_creditCard, $_yearOfExpireCc, $_isRegistered){
        $this->name = $_name;
        $this->address = $_address;
        $this->creditCard = $_creditCard;
        $this->yearOfExpireCc = $_yearOfExpireCc;
        $this->isRegistered = $_isRegistered;
    }

    public function totalPrice(){
        if($this->isRegistered){
            return $this->cart - ($this->cart  * 20 / 100);
        }
        else{
            return $this->cart;
        }
    }

}

class Payment extends User{

    function paymentCheck(){
        if($this->yearOfExpireCc < 2022){
            return 'Carta di credito scaduta';
        }
        else{
            return 'Pagamento effettuato';
        }
    }
}

?>