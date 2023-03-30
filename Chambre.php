<?php

class Chambre{
    private int $_nbChambre;
    private bool $_wifi;
    private int $_nbLit;
    private float $_prix;
    private bool $_etat;
    private array $_reservations;
    private array $_chambres;
    private Hotel $_hotel;


public function __construct($nbChambre, $wifi,$nbLit,$prix,$etat,$hotel){
    $this -> _nbChambre = $nbChambre;
    $this -> _wifi = $wifi;
    $this -> _nbLit = $nbLit;
    $this -> _prix = $prix;
    $this -> _etat = $etat;
    $this -> _hotel = $hotel;
    $this -> _reservations = array();
    $this -> _chambres = array();
    $hotel -> ajouterChambre($this);
    
    }

public function getNbChambre(){
    return $this -> _nbChambre;
    }
    
public function setNbChambre($nbChambre){
    $this -> _nbChambre = $nbChambre;

    return $this;
    }

public function getWifi(){
    if ($this -> _wifi === true){
    return "Oui ";
    }else{
    return "Non";
    }
}
    
public function setWifi($wifi){
    $this->_wifi = $wifi;
        
    return $this;
    }


public function getNbLit(){
    return $this -> _nbLit;
    }
        
public function setNbLit($nbLit){
    $this -> _nbLit = $nbLit;

    return $this;
    }
    
public function getPrix(){
    return $this -> _prix;
    }
    
public function setPrix($prix){
    $this -> _prix = $prix;

    return $this;
    }

public function getEtat(){
        if ($this -> _etat === true){
            return  '<button class="btn btn-success" style = "background-color:green; color:white; border-color:green"> DISPONIBLE </button> <br>';
        }else{
           return  '<button class="uk-button uk-button-danger"  style = "background-color: red; color:white; border-color: red"> RESERVEE </button> <br>';
        }
        
    }
    
    public function setEtat($etat){
        $this->_etat = $etat;
    
        return $this;
    }
        
public function getHotel(){
    return $this -> _hotel;
    }
        
public function setHotel($hotel){
    $this -> _hotel = $hotel;

    return $this;
    }



// Les reservations de chambre de l'hotel :


public function ajouterChambre($chambre){
      
    $this -> _chambres[] = $chambre;

}

public function ajouterReservation($reservation){
    $this -> _reservations[] = $reservation;
}

public function __toString(){
    return $this -> _nbChambre ." " .$this -> _wifi . " " .$this -> _nbLit . "  " .$this -> _prix .$this -> _etat . " ";
}

}







