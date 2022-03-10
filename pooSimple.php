<?php

class Simple{
    private $nomPrive = "Oiram" ;
    public $nomPublique = "Mario" ;

    public function getNomPrive(){

        return $this->nomPrive ;


        
    }

    public function setNomPrive($nom){

        return $this->nomPrive = $nom ;


        
    }
}
?>