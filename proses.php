<?php
session_start();
class user{
    public $firstname;
    public $lastname;
    public $phonenumber;
    public $address;

    public function setFirstName ($firstname){
        $this->firstname= $firstname;
    }
    public function setLastName ($lastname){
        $this->lastname= $lastname;
    }
    public function setPhoneNumber ($phonenumber){
        $this->phonenumber= $phonenumber;
    }
    public function setAddress ($address){
        $this->address= $address;
    }
    public function Hasil(){
    echo "Hi, My name is " . $this->firstname ." ". $this->lastname ."<br>";
    echo "Phone Number: " . $this->phonenumber . "<br>";
    echo "Address: " . $this->address . "<br>";
    }
}
$proses= new User();
$proses->setFirstName($_POST["firstname"]);
$proses->setLastName($_POST["lastname"]);
$proses->setPhoneNumber($_POST["phonenumber"]);
$proses->setAddress($_POST["address"]);
$proses->Hasil();
?>