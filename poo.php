<?php

    class Majeur{
       // private $nomPrive = "Petit nom" ;
      //  public $nomPublique = "Bourgeois" ;
        
      function majeurOrNot($nom, $prenom, $age)
      {
          $affSortie = "Bonjour";
          if ($age > 21) {
              $affSortie =  $affSortie . " " . $nom . " " . $prenom . " vous avez majeur.";
          } else {
              $affSortie =  $affSortie . " " . $nom . " " . $prenom . " vous n'etes pas majeur.";
          }
      
          return $affSortie ;
            
    }
}

?>