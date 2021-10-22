<?php 
// provate ad immaginare quali sono le classi necessarie per creare uno shop online.
// Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario.
// Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
// oppure diverse tipologie di prodotti.


class user {
    public $userName;
    public $userSurname;
    public $email;
    
    public function __construct($_userName,$_userSurname,$_email)
    {
        $this->userName = $_userName;
        $this->userSurname = $_userSurname;
        $this->email = $_email;
    }

    public function getuserName() {
        return $this->userName;
    }
    public function getUserSurname() {
        return $this->userSurname;
    }
    public function getEmail() {
        return $this->email;
    }

}

class userPremium extends user {
    public $discount;
    public $livello;
    private function __construct($_livello){
        // $this->userName = $_userName;
        // $this->userSurname = $_userSurname;
        // $this->email = $_email;
        $this->livello = $_livello;

        if($_livello <= 5) {
            $this->discount = 5;
        }elseif($_livello >= 5 && $_livello <= 9 ){
            $this->discount = 10;
        }
        elseif($_livello == 10) {
            $this->discount = 12;
        }
    }
    public function getuserName() {
        return $this->userName;
    }
    public function getUserSurname() {
        return $this->userSurname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getDiscount() {
        return $this->discount;
    }
}

class Product {
    public $nameProduct;
    public $price;
    public $description;

    public function __construct($_nameProduct,$_price,$_description) {
        $this->nameProduct = $_nameProduct;
        $this->price = $_price;
        $this->description = $_description;
    }
}

$marco = new user ("marco","ecc","sn@git.it");
$paolo = new userPremium (4);
var_dump($marco);
var_dump($paolo);


?>