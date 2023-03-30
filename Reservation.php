<?php

class Reservation{
    private Hotel $_hotel;
    private Client $_client;
    private Chambre $_chambre;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;



public function __construct($hotel,$client,$chambre,$dateDebut,$dateFin){
    $this -> _hotel = $hotel;
    $this -> _client = $client;
    $this -> _chambre = $chambre;
    $this -> _dateDebut = new DateTime ($dateDebut);
    $this -> _dateFin = new DateTime ($dateFin);
    $hotel -> ajouterReservation($this);
    $client -> ajouterReservation($this);
    $chambre -> ajouterReservation($this);
    $chambre -> setEtat(true);
    }



public function getHotel(){
    return $this -> _hotel;
    }
              
public function setHotel($hotel){
    $this -> _hotel = $hotel;

    return $this;
    }
              
public function getClient(){
    return $this -> _client;
    }
              
public function setClient($client){
    $this -> _client = $client;

    return $this;
    }
              
public function getChambre(){
    return $this -> _chambre;
    }
              
public function setChambre($chambre){
    $this -> _chambre = $chambre;

    return $this;
    }
              
public function getDateDebut(){
    return $this -> _dateDebut;
    }
              
public function setdateDate($dateDebut){
    $this -> _dateDebut = $dateDebut;

    return $this;
    }
    
public function getDatefin(){
    return $this -> _datefin;
    }
                  
public function setDateFin($dateFin){
    $this -> _datefin = $dateFin;

    return $this;
}

//Calculer les dates :

public function calcDate(){
    $dateDebut = new DateTime ($this -> _dateDebut -> format('d-m-Y'));
    $dateFin = new DateTime ($this -> _dateFin -> format('d-m-Y'));
    $diff = $dateDebut -> diff($dateFin);
    return $diff -> d;
}

// calculer le prix d'un sejour :


public function calculPrix(){
    $totalRes = $this -> calcDate() * $this -> _chambre -> getPrix();
    return $totalRes;
}



public function infoReservation(){
    echo "Hotel : " .$this -> _hotel -> getNomHotel() ." **** " .$this -> _hotel -> getVille() ." / " 
    ."Chambre : " .$this -> _chambre -> getNbChambre() ." ( " .$this -> _chambre -> getNbLit() ." lits - " 
    .$this -> _chambre -> getPrix() ." € - Wifi"  ." : " .$this -> getchambre() -> getWifi() ." ) 
    " ." du "  .$this -> _dateDebut -> format('d-m-Y')." au ".$this -> _dateFin -> format('d-m-Y') ." " ."<br>" ;
}

public function __toString(){
    $dateDebut = $this -> _dateDebut -> format('d-m-Y');  
    $dateFin = $this -> _dateFin -> format('d-m-Y'); 
    return $this -> _client ."    " ." Chambre ".$this -> _chambre -> getNbChambre() ." - " .$dateDebut ." au " .$dateFin ." " ."<br>";
}
}
