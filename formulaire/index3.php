<?php

include('connnexion.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Viol</title>
</head>
<body>
    <div class="principal">
        
        <div class="secondaire"> <!-- fond degrade -->
                <div class="sidebar_gche">

                    <div class="menu">
                           <div class="puce_blanche">
                            <div class="cercle">
                                <span>01</span>
                            </div>
                               <div class="list-item"> <a href="index.php"> Accidents </a></div>  
                            </div> 
                          
                            <div class="puce_blanche">
                                <div class="cercle">
                                  <span>02</span>
                                </div>
                                <div class="list-item"><a href="index2.php">vol</a></div>
                             </div> 

                            <div class="puce_blanche">
                                <div class="cercle" style="background-color: #67a84e ;">
                                    <span>03</span>
                                </div>
                            <div class="list-item"><a href="index3.php">viol</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>04</span>
                                </div>
                            <div class="list-item"> <a href="index4.php">meurtre</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>05</span>
                                </div>
                            <div class="list-item"> <a href="index5.php">suicide</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>06</span>
                                </div>
                            <div class="list-item"> <a href="index6.php">incendie</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>07</span>
                                </div>
                            <div class="list-item"><a href="index7.php">innodation</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>08</span>
                                </div>
                            <div class="list-item"><a href="index8.php">negligeance médical </a> </div>
                            </div>
                    </div>
                </div>
                
                <div class="fond_blanc">
                    <div class="section_centrale">
                        
                        <div class="formulaire">
                                <div class="info">
                                  <h3>Les viols en côte d'ivoire</h3>
                                    <p>Veuillez remplire ce formulaire </p>
                                </div> 

                           <form action="ajout3.php" method="POST">
                                <div class="champ">

                                    <fieldset> 
                                        <legend>Titre</legend>
                                        <input type="text" id="titre" name="titre" placeholder="Titre"  required>
                                    </fieldset> <br>

                                            <fieldset> 
                                                <legend>nombres de victimes</legend>
                                                <input type="text" id="nbre_victime" name="nbrevictimes" placeholder="Nombres De victimes"  required>
                                            </fieldset> <br>

                                     <fieldset> 
                                        <legend>types</legend>
                                        <div>
                                            <select class="selectt" id="" name="typeviol"  required>
                                               <option value="Viol collective">Viol collective</option>
                                               <option value="Viol de droit">Viol de droit</option>
                                               <option value="Harcellement sexuel">Harcellement sexuel</option>
                                               <option value="Autres">Autres</option>
                                            </select>
                                         </div>
                                    </fieldset>
                                </div>

                              <div class="genr">
                                    <fieldset class="sgenr"> 
                                        <legend>Enfant</legend>
                                        <input type="text" name="nbrenfants"  placeholder="Enfant" >
                                    </fieldset>

                                    <fieldset class="sgenr"> 
                                        <legend>Femme</legend>
                                        <input type="text" name="nbrfemmes" placeholder="Femme"  >
                                    </fieldset>

                                    <fieldset class="sgenr"> 
                                        <legend>Homme</legend>
                                        <input type="text" name="nbrhommes" placeholder="Homme"  >
                                    </fieldset>
                                </div><br><br>

                                <div class="">
                                   

                                    <fieldset> 
                                 <legend>Lieu</legend>
                             <select id="ville" name="lieu" class="selectt"  required>
                                 <?php
                                      //selection des ville de la base de données
                                      $prendre_ville = $db->query("SELECT id,ville FROM ville");
                                     while($lire_ville = $prendre_ville->fetch(PDO::FETCH_ASSOC)){
                                     extract($lire_ville);
                                 ?>
                                 <option value=<?= $id ?>><?= $ville; ?></option>
                                 <?php } ?>
                             </select>
                                 </fieldset>
                                </div><br>
                                
                                             <div class="champ">
                                                <fieldset>
                                                    <legend>source</legend>
                                                    <input type="text" name="source" placeholder="Source"  required>
                                                </fieldset>
                                            </div> <br>

                                    <fieldset> 
                                        <legend>Date de Evenement</legend>
                                        <input class="selectt" type="date" name="dateEvenement" placeholder="Date De Publication"  required>
                                    </fieldset><br>
 
                                     <div class="valid">
                                     <input type="submit" name="envoyer" value="Envoyer" id="inpu">
                                 </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div> 
    </div>