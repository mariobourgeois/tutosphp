<?php 

    // boucle.php?nombre=
    $nombre = 0 ;
    if( isset($_GET["nombre"])){
        if($_GET["nombre"] !=""){
            $nombre = $_GET["nombre"] ;
        }
    }

    // Boucle pour
    //ex: 5 x 1 = 5;
    for ($i=0; $i <10 ; $i++) { 
        
        $calcul = $nombre * $i ;
        echo $nombre." x ".$i." = " .$calcul ;
        echo "<br>" ;
    }

    echo "<br>" ;

   /*// Boucle tant que
    $a = 0 ;
    while ($a <= 10) {
        $calcul = $nombre * $i ;
        echo $nombre." x ".$i." = " .$calcul ;
        echo "<br>" ;
        $a ++;
    } */

?>
