<h1>POO Hotel</h1>

<?php


spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});

$hotel1 = new Hotel ("Hilton **** Strasbourg","10 route de la Gare","67000","STRASBOURG");
$hotel2 = new Hotel ("Regent **** Paris","61 Rue Dauphine ","75006" ,"PARIS");

$client1 = new Client("MURMANN","Micka");
$client2 = new Client ("GIBELLO","Virgile");




$chambre1 = new Chambre ("1", false, 1, 120, false, $hotel1);
$chambre2 = new Chambre ("2", false, 1, 120, false, $hotel1);
$chambre3 = new Chambre ("3", false, 2, 120, true, $hotel1);
$chambre4 = new Chambre ("4", false, 2, 120, true, $hotel1);
$chambre5 = new Chambre ("5", true, 1, 220, false, $hotel1);
$chambre6 = new Chambre ("6", true, 1, 300, false, $hotel1);
$chambre7 = new Chambre ("7", true, 1, 170, false, $hotel1);






$reservation1 = new Reservation ($hotel1,$client2,$chambre1,"01-01-2021","05-01-2021");
$reservation2 = new Reservation ($hotel1,$client1,$chambre2,"11-03-2021","15-03-2021");
$reservation3 = new Reservation ($hotel1,$client1,$chambre3,"01-04-2021","17-04-2021");



echo $hotel1 -> infoHotel();
echo $hotel2 -> infoHotel();
echo $hotel1 -> reservations();
$client1 -> reservationClient();
echo $hotel1 -> statutChambres();



?>




