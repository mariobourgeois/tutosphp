<?php
    include("poo.php");

 //   include("fonction.php") ;
    $majeur = new Majeur();
    //var_dump($majeur);

    $prenom = "Mario" ;
    $nom = strtoupper ("Bourgeois") ;
    $age = 16 ;
    $affAge = true ;
    
    //affiche ma variable

   echo $majeur->majeurOrNot($prenom , $nom , $age) ;
