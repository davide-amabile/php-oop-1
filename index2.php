<?php

// creare un classe
class FamilyMember{
    public $name;
    public $surname;
    public $age;
    public $over;
    public $sale;

    // creare funzione per verificare se è maggiorenne
    public function checkOver($age)
    {
        if($age < 18){
            $this->over = "minorenne";
            $this->sale = "Sconto minorenne del 25%";
        }elseif( $age >= 18 && $age < 60){
            $this->over = "maggiorenne";
            $this->sale= "Tariffa piena";
        }elseif($age >= 60){
            $this->over = "over 60";
            $this->sale= "Sconto over 60 del 40%";
        }
    }
}

$member1 = new FamilyMember();
$member1->name = "Davide";
$member1->surname = "Amabile";
$member1->age = 36;
$member1->checkOver(36);

$member2 = new FamilyMember();
$member2->name = "Ginfranco";
$member2->surname = "Lucchini";
$member2->age = 61;
$member2->checkOver(61);

$member3 = new FamilyMember();
$member3->name = "Anna";
$member3->surname = "Amabile";
$member3->age = 6;
$member3->checkOver(6);
var_dump($member3);
var_dump($member1);
var_dump($member2);
?>