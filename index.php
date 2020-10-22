<?php
// creare una classe user
class User{
// creare attributi nella classe
public $surname;
public $nation;
public $number;
public $role;


// creare funzione construct
// N.B.: la funzione è dentro la classe
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

// creare array con gli oggetti
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
    $player11
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inter Finale 2010</title>
</head>
<body>
    <h1>FORMAZIONE INTER FINALE CHAMPIONS LEAGUE 2010</h1>
    <!-- creare ciclo foreach per iniettare gli attributi nel html-->
    <div class="container">
        <?php foreach ($players as $key) { ?>
            <div class="box">
                <ul class="lista">
                    <li>GIocatore: <?php echo $key->surname ?></li>
                    <li>Numero: <?php echo $key->number ?></li>
                    <li>Ruolo: <?php echo $key->role ?></li>
                    <li>Nazione: <?php echo $key->nation ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>
    
    
</body>
</html>











