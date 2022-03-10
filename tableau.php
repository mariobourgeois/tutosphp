<?php 

    // Variable tableau simple
    $monTableauSimple = [   "Jérome" ,
                            "Yannis" ,
                            "Nicolas",
                            "Véronique"
                            ] ;


    // One item
    echo $monTableauSimple[2] ;
    echo "<br>" ;

    echo "<hr>" ;


    // Print all items in my array
    for ($i=0; $i < count($monTableauSimple) ; $i++){
        echo $monTableauSimple[$i] ;
        echo "<br>" ;
    }

    echo "<hr>" ;

    // Print inverse all items in my array
    for ($i= count($monTableauSimple)-1; $i >=0 ; $i--){
        echo $monTableauSimple[$i] ;
        echo "<br>" ;
    }

    echo "<hr>" ;

    foreach ($monTableauSimple as $key => $row) {
        echo $key." - ".$row ;
        echo "<br>" ;
    }


     // variable tableau multidimensionnel
    $monTableauMulti = [ ["nom" =>"Zamant" ,  "prenom" =>"Jérôme"],
                         ["nom" =>"Dubois" ,  "prenom" =>"Yannis"],
                         ["nom" =>"Emmanuel" , "prenom" =>"Nicolas"]
                        ];

    foreach ($monTableauMulti as $key => $row) {
        echo $key["nom"]." ".$row["prenom"] ;
        echo "<br>" ;
    }

        echo "<br>" ;
        echo "<hr>" ;
        echo "<br>" ;

    foreach ($monTableauMulti as $rowMulti) {
        foreach ($rowMulti as $key => $row) {
            echo $key.": ".$row ;
            echo "<br>" ;
        }
        echo " <hr> <br> <br>" ;
    }

?>