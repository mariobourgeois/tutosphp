<?php 

    // (ET logique)
    // AND = &&
    $vraiEtFaux = true && false ;
    var_dump ( $vraiEtFaux ) ;

    $vraiEtVrai = true && true ;
    var_dump ( $vraiEtVrai ) ;

    $fauxEtFaux = false && false ;
    var_dump ( $fauxEtFaux ) ;

    echo "<br>";

    // (OU logique)
    // OR = &&
    $vraiOuFaux = true || false ;
    var_dump ( $vraiOuFaux ) ;

    $vraiOuVrai = true || true ;
    var_dump ( $vraiOuVrai ) ;

    $fauxOuFaux = false || false ;
    var_dump ( $fauxOuFaux ) ;

    echo "<br>";

    // Caractère de comparaison
    $age = 12 ;
    // ==
    if ($age == 12) {
        echo "age = 12" ;
    }

    echo "<br>";

    // (Différent) != ou <>
    if ($age != 30) {
        echo "age est différent de 30" ;
    }

    echo "<br>";

    // (Inférieur) <
    if ($age < 30) {
        echo "age < 30" ;
    }

    echo "<br>";

      // (supérieur) >
      if ($age < 30) {
        echo "age < 30" ;
    }

    echo "<br>";

    if ($age > 10){
        echo "$age > 10";
    }

    echo "<br>";

    if (($age > 10) && ($age < 30)){
        echo "10 < $age < 30";
    }

?>