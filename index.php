<?php
// creare una classe user
class User{
// creare attributi nella classe
public $surname;
public $nation;
public $number;
public $role;


// creare funzione constructor
function __constructor($_surname, $_nation, $_number, $_role)
{
    $this->surname=$_surname;
    $this->nation=$_nation;
    $this->number=$_number;
    $this->role=$_role;
}

}

// creiamo gli oggetti
$player1 = new User("Julio Cesar", "Brasile", "12", "Portiere");
var_dump($player1);



