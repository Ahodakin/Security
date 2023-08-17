
<?php

include('connnexion.php');

    if(isset($_POST['envoyer'])) {
    $titre = $_POST['titre'];
    $nbrevictimes = $_POST['nbrevictimes'];
    $engins = $_POST['engins']; 
    $nbrenfants = $_POST['nbrenfants'];
    $nbrfemmes = $_POST['nbrfemmes'];
    $nbrhommes = $_POST['nbrhommes'];
    $lieu= $_POST['lieu'];
    $source= $_POST['source'];
    $dateEvenement= $_POST['dateEvenement'];
    $datepost= date("Y-m-d");
//declaration de variables

    $insertion= $db->query("INSERT INTO accidents(titre,nbrevictimes,engins,nbrenfants,nbrfemmes,nbrhommes,lieu,source,dateEvenement,datepost) 
    VALUES('$titre','$nbrevictimes','$engins','$nbrenfants','$nbrfemmes','$nbrhommes','$lieu','$source','$dateEvenement','$datepost')");

  }

    
    //INSERTION DANS LA TABLE accidents
    
    if($insertion){
            echo '<script>alert("Vos données à été ajouté avec succès!")</script>';
            echo '<script>window.location.href="index.php";</script>';

    }
    else{
      echo "error";
    }
    
?>


