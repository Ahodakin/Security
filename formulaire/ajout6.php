<?php

include('connnexion.php');

    if(isset($_POST['envoyer'])) {
    $titre = $_POST['titre'];
    $nbrevictimes = $_POST['nbrevictimes'];
    $typeIncendie = $_POST['typeIncendie']; 
    $nbrenfants = $_POST['nbrenfants'];
    $nbrfemmes = $_POST['nbrfemmes'];
    $nbrhommes = $_POST['nbrhommes'];
    $lieu= $_POST['lieu'];
    $source= $_POST['source'];
    $dateEvenement= $_POST['dateEvenement'];
    $datepost= date("Y-m-d");
//declaration de variables

    $insertion= $db->query("INSERT INTO incendies (titre,nbrevictimes,typeIncendie,nbrenfants,nbrfemmes,nbrhommes,lieu,source,dateEvenement,datepost) 
    VALUES('$titre','$nbrevictimes','$typeIncendie','$nbrenfants','$nbrfemmes','$nbrhommes','$lieu','$source','$dateEvenement','$datepost')");

  }
    //INSERTION DANS LA TABLE accidents
    
    if($insertion){
            echo '<script>alert("Vos données à été ajouté avec succès!")</script>';
            echo '<script>window.location.href="index6.php";</script>';
    }
    else{
      echo "error";
    }
?>