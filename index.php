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
    public function setuserName($_userName) {
        return $this->userName = $_userName;
    }
    public function setUserSurname($_userSurname) {
        $this->userSurname = $_userSurname;
    }
    public function setEmail($_email) {
        return $this->email = $_email;
    }

}




class userPremium extends user {
    public $discount;
    public $livello;
    public function __construct($_userName,$_userSurname,$_email,$_livello){
        $this->livello = $_livello;
        $this->userName = $_userName;
        $this->userSurname = $_userSurname;
        $this->email = $_email;

        if($_livello <= 5) {
            $this->discount = 5;
        }elseif($_livello >= 5 && $_livello <= 9 ){
            $this->discount = 10;
        }
        elseif($_livello == 10) {
            $this->discount = 12;
        }
    }

    public function getLivello() {
        return $this->livello;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setLivello($_livello) {
        $this->livello = $_livello;
    }

}

class Product {
    public $nameProduct;
    public $price;
    public $description;
    public $data;

    public function __construct($_nameProduct,$_price,$_description,$_data) {
        $this->nameProduct = $_nameProduct;
        $this->price = $_price;
        $this->description = $_description;
        $this->data = $_data;
    }

    public function getNameProduct(){
        return $this->nameProduct;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getData(){
        return $this->description;
    }
    public function setNameProduct($_nameProduct){
        $this->nameProduct = $_nameProduct;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }
    public function setDescription($_description){
        $this->description = $_description;
    }
    


}

$marco = new user ("marco","ecc","sn@git.it");
$mario = new userPremium ("mario","ecc","sn@git.com",10);
$penna = new Product("penna",1,"scrivere",2077);

var_dump($marco);
var_dump($mario);


?>