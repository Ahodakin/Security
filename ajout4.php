<?php

include('connnexion.php');

    if(isset($_POST['envoyer'])) {
    $titre = $_POST['titre'];
    $nbrevictimes = $_POST['nbrevictimes'];
    $typemeurtre = $_POST['typemeurtre']; 
    $nbrenfants = $_POST['nbrenfants'];
    $nbrfemmes = $_POST['nbrfemmes'];
    $nbrhommes = $_POST['nbrhommes'];
    $lieu= $_POST['lieu'];
    $source= $_POST['source'];
    $dateEvenement= $_POST['dateEvenement'];
    $datepost= date("Y-m-d");
//declaration de variables

    $insertion= $db->query("INSERT INTO meurtres_atteintes_physiques (titre,nbrevictimes,typemeurtre,nbrenfants,nbrfemmes,nbrhommes,lieu,source,dateEvenement,datepost) 
    VALUES('$titre','$nbrevictimes','$typemeurtre','$nbrenfants','$nbrfemmes','$nbrhommes','$lieu','$source','$dateEvenement','$datepost')");

  }

    
    //INSERTION DANS LA TABLE accidents
    
    if($insertion){
            echo '<script>alert("Vos données à été ajouté avec succès!")</script>';
            echo '<script>window.location.href="index4.php";</script>';

    }
    else{
      echo "error";
    }
?>