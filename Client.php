<?php

class Client{
    private string $_nom;
    private string $_prenom;
    private array $_reservations;



 public function __construct($nom, $prenom){
    $this -> _nom = $nom;
    $this -> _prenom = $prenom;
    $this -> _reservations = array();
    }
    
public function getNom(){
    return $this -> _nom;
    }
          
public function setNom($nom){
    $this -> _nom = $nom;
    }
          
public function getPrenom(){
    return $this -> _prenom;
    }
          
public function setPrenom($prenom){
    $this -> _prenom = $prenom;
    }
          




// Les reservations des clients :


public function ajouterReservation($reservation){
    $this -> _reservations[] = $reservation;
    }


    public function prixTotal(){
        $totalClient = 0;
        foreach ($this -> _reservations as $reservation){
            $totalClient = $totalClient + $reservation -> calculPrix();
        } 
        return $totalClient;
    }
    
    public function reservationClient(){
        echo "<h3> Réservations de " .$this -> _prenom ." " .$this -> _nom ."</h3>";
        echo '<button class = "btn btn-success" style = "background-color: green; color:white; border-color:green">' .count($this->_reservations) ." RESERVATIONS" .'</button>' ."<br><br>";
        foreach ($this -> _reservations as $reservation){
            echo $reservation -> infoReservation();
        }
        echo "Total : ".$this -> prixTotal() ." € " ."<br>";
    }

    public function __toString(){
        return $this -> _nom ."  " .$this -> _prenom . "  "  ;
        }
    
}