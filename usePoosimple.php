<?php

    include("pooSimple.php");

    $simpleTest = new Simple();

  
    echo $simpleTest->nomPublique ."<br>" ;

    $simpleTest->nomPublique = "Maria" ;
    echo $simpleTest->nomPublique ."<br>" ;

    // echo $simpleTest->nomPrive ; impossible car nomPrive est en private
    echo $simpleTest->getNomPrive()."<br>" ;
    $simpleTest->setNomPrive("Airam");
    echo $simpleTest->getNomPrive()."<br>" ;
?>