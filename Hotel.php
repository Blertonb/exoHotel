<?php

class Hotel{
    private string $_nomHotel;
    private string $_ville;
    private string $_adresse;
    private string $_codePostal;
    private array $_reservations;
    private array $_chambres;

public function __construct($nomHotel, $ville, $adresse,$codePostal){
    $this -> _nomHotel = $nomHotel;
    $this -> _ville = $ville;
    $this -> _adresse = $adresse;
    $this -> _codePostal = $codePostal;
    $this -> _reservations = array();
    $this -> _chambres= array();
    }
    
public function getnomHotel(){
    return $this -> _nomHotel;
    }
          
public function setnomHotel($nomHotel){
    $this -> _nomHotel = $nomHotel;

        return $this;
    }
          
public function getVille(){
    return $this -> _ville;
    }
          
public function setVille($ville){
    $this -> _ville = $ville;

    return $this;
    }
          
public function getAdresse(){
    return $this -> _adresse;
    }
          
public function setAdresse($adresse){
    $this -> _adresse = $adresse;

    return $this;
    }
          
public function getcodePostal(){
    return $this -> _codePostal;
    }
          
public function setcodePostal($codePostal){
    $this -> _codePostal = $codePostal;

    return $this;
    }

public function getReservations(){
    return $this -> _reservations;
    }
              
public function setReservations($reservations){
    $this -> _reservations = $reservations;

    
    return $this;
    }


public function getChambres(){
    return $this -> _chambres;
    }
                  
public function setChambre($chambre){
    $this -> _chambres []= $chambre;
    
        
    return $this;
    }

public function ajouterReservation($reservation){
    return $this ->_reservations[] = $reservation;
}

public function ajouterChambre($chambre){
     $this -> _chambres[] = $chambre;
    }

public function __toString(){
    return $this -> _nomHotel ." " .$this -> _ville ." " .$this -> _adresse
    ." " .$this -> _codePostal ."<br>";
    }


// count pour calculer :

public function infoHotel(){
    echo "<h2> " .$this -> _nomHotel ."</h2>" .$this -> _ville." " .$this -> _adresse . " " .$this ->_codePostal ." " ."<br>";
    echo "nombre de chambre : " .count($this -> _chambres)."<br> ";
    echo "Nombre de chambres réservées : " .$this -> chambresReservees() ."<br>";
    echo "nombre de chambres disponible : ".$this -> chambresDispo()."<br>";
}

public function chambresReservees(){
    $chambresReservees = count($this -> _reservations);
    if ($chambresReservees += 0){
    foreach ($this -> _reservations as $reservation){
         return $chambresReservees;
    }
}
}

public function chambresDispo(){
    $chambresDispo = count($this->_chambres) - $this-> chambresReservees();
    return $chambresDispo;
}

public function totalReservations(){
    if (count($this -> _reservations) >0){
    echo $this->_nomHotel ."<h3> Réservations de " .$this ->_nomHotel ." </h3>  " ;
    foreach ($this -> _reservations as $reservation){
    echo $reservation;
    } 
}
}

public function statutChambres(){
    echo "<h3>Statuts des chambres de " ."<strong>" .$this -> _nomHotel ."</strong>" ."</h3> <br>";
    echo "<table style='width:700px'>
            <tr style ='text-align:justify'>
                <th> CHAMBRE </th>
                <th> PRIX </th>
                <th> WIFI </th>
                <th> ETAT </th>
            </tr>";
    foreach ($this -> _chambres as $chambre){
        echo "<tr>
                <td style = 'padding-bottom:30px; padding-top: 30px'> Chambre " .$chambre -> getNbChambre() ."</td>
                <td style = 'padding-bottom:30px'>" .$chambre -> getPrix() ." € " ."</td>
                <td style = 'padding-bottom:30px'>" .$chambre -> getWifi() ."</td>
                <td style = 'padding-bottom:30px'>" .$chambre -> getEtat() ."</td>
            </tr>";
    }
    echo "</table>";
}


public function reservations(){
    echo "<h3> Réservations de l'hôtel " .$this -> _nomHotel ." </h3>"."<br>";
    echo '<button class = "btn btn-success" style = "background-color: green; color:white; border-color:green">'  .count($this->_reservations) ." RESERVATIONS "  .'</button> <br> <br>';
    if ($this -> _reservations > 0){
        foreach ($this -> _reservations as $reservation)
            echo $reservation;
    }
     else {
        echo "Aucune réservation ! <br>";
    }
}

}

