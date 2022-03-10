<?php

    //Déclaration de variables virgule et chaine
    $virgule = ",";
    $maVariableChaine = "Bonjour" ;
    $maVariableChaine = $maVariableChaine." le monde" ;
    $maVariableChaine .= " !" ;
    echo $maVariableChaine . "<br>" ;

    //Déclaration de variable nombre
    $monNombre1 = 17 ;
    $monNombre2 = 20 ;

    //Somme de chaine
    $somme = $monNombre1 + $monNombre2 ;
    echo "Somme de "
    .$monNombre1." + "
    .$monNombre2." = ".$somme ;
    echo "<br>" ;

    //déclaration de boolean
    $myBoolean = true ;
    var_dump($myBoolean) ;
    echo "<br>" ;

    //Création variable tableau simple
    //Autre façon d'écrire tableau simple: array( "chaine1", "chaine2", "chaine3" );
    $montableauSimple = ["Jérome", "Yannis", "Nicolas"] ;
    //var_dump tableau simmle
    var_dump($montableauSimple) ;

    //Création variable tableau multidimensionnel
    $montableauMulti = [    
                            ["nom" => "Zamant" , "prénom" => "Jérome"], 
                            ["nom" => "Dubois" , "prénom" => "Yannis"],
                            ["nom" => "Emmanuel" , "prénom" => "Nicolas"]
                       ] ;
    //var_dump tableau multidimensionnel 
    var_dump($montableauMulti) ;

    




    

?>