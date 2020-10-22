<?php
// creare una classe user
class User{
// creare attributi nella classe
public $surname;
public $nation;
public $number;
public $role;


// creare funzione constructor
function __construct($_surname, $_nation, $_number, $_role)
{
    $this->surname=$_surname;
    $this->nation=$_nation;
    $this->number=$_number;
    $this->role=$_role;
}

}

// creiamo gli oggetti
$player1 = new User("Julio Cesar", "Brasile", "12", "Portiere");
$player2 = new User("Maicon", "Brasile", "13", "Difensore");
$player3 = new User("Lucio", "Brasile", "6", "Difensore");
$player4 = new User("Samuel", "Argentina", "25", "Difensore");
$player5 = new User("Chivu", "Romania", "26", "Difensore");
$player6 = new User("Zanetti", "Argentina", "4", "Centrocampista");
$player7 = new User("Cambiasso", "Argentina", "19", "Centrocampista");
$player8 = new User("Pandev", "Macedonia", "27", "Ala");
$player9 = new User("Eto'o", "Camerun", "4", "Ala");
$player10 = new User("Sneijder", "Olanda", "10", "Trequartista");
$player11 = new User("Milito", "Argentina", "4", "Punta");
var_dump($player10);
// creare array con igiocatori
$players = [
    $player1,
    $player2,
    $player3,
    $player4,
    $player5,
    $player6,
    $player7,
    $player8,
    $player9,
    $player10,
    $player11,
];

var_dump($players);











