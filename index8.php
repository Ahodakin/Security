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
    <title>n/medical</title>
</head>
<body>
    
<div class="wrappe">
		<nav class="navba">
            <label for="toggle">☰</label>
			<input type="checkbox" id="toggle">
            <div class="main_pages ">
            <img class="logo" src="homes.png">
            <ul>
                <li><a href="home.php"class="active">Accueil</a></li>
                <li><a href="index.php">Formulaire</a></li>
                <li><a href="graphe.php">Statistiques</a></li>
            </ul>
            </div>
		</nav>
    </div>
    <div class="principal">
        
        <div class="secondaire"> <!-- fond degrade -->
                <div class="sidebar_gche">

                    <div class="menu">
                        <a href="index.php">
                           <div class="puce_blanche">
                                <div class="cercle">
                                    <span>01</span>
                                </div>
                                <div class="list-item">  Accidents </div>  
                            </div> 
                        </a>
                        <a href="index2.php">
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>02</span>
                                </div>
                                <div class="list-item">vol</div>
                             </div> 
                        </a>  
                        <a href="index3.php">
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>03</span>
                                </div>
                                <div class="list-item">viol</div>
                            </div>
                        </a>
                        <a href="index4.php">
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>04</span>
                            </div>
                                <div class="list-item"> meurtre</div>
                            </div>
                        </a> 
                        <a href="index5.php">
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>05</span>
                                </div>
                                 <div class="list-item">suicide</div>
                            </div>
                        </a> 
                        <a href="index6.php">
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>06</span>
                                </div>
                                 <div class="list-item">incendie</div>
                            </div>
                        </a>
                        <a href="index7.php">
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>07</span>
                                </div>
                                <div class="list-item">innodation</div>
                            </div>
                        </a>
                        <a href="index8.php">
                            <div class="puce_blanche">
                                <div class="cercle" style="background-color: #67a84e ;">
                                    <span>08</span>
                                </div>
                                 <div class="list-item">Negligeance Médical</div>
                            </div> 
                        </a> 
                    </div>
                </div>
                
                <div class="fond_blanc">
                    <div class="section_centrale">
                        
                        <div class="formulaire">
                                <div class="info">
                                  <h3>Les négligeances medical en côte d'ivoire</h3>
                                    <p>Veuillez remplire ce formulaire </p>
                                </div> 

                           <form action="ajout8.php" method="POST">
                                <div class="champ">
                                    <fieldset> 
                                        <legend>Titre</legend>
                                        <input type="text" id="titre" name="titre" placeholder="Titre"  required>
                                    </fieldset> <br>
                                    
                                    <fieldset> 
                                        <legend>nombres de victimes</legend>
                                        <input type="number" id="nbre_victime" name="nbrevictimes" placeholder="Nombres De victimes"  required>
                                    </fieldset> <br>

                                    <fieldset> 
                                        <legend>types</legend>
                                        <div>
                                            <select class="selectt" id="" name="type"  required>
                                              <option value="Opération<">Opération</option>
                                              <option value="Mauvaise Prescription">Mauvaise Prescription</option>
                                             <option value="Non Assistance">Non Assistance</option>
                                             <option value="Autres">Autres</option>
                                            </select>
                                         </div>
                                    </fieldset>
                                </div>

                              <div class="genr">
                                    <fieldset class="sgenr"> 
                                        <legend>Enfant</legend>
                                        <input type="number" name="nbrenfants"  placeholder="Enfant"  >
                                    </fieldset>

                                    <fieldset class="sgenr"> 
                                        <legend>femme</legend>
                                        <input type="number" name="nbrfemmes" placeholder="Femme"  >
                                    </fieldset>

                                    <fieldset class="sgenr"> 
                                        <legend>Homme</legend>
                                        <input type="number" name="nbrhommes" placeholder="Homme"  >
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
                                 </fieldset> <br>
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
                    
                                   </div><br>
                                     </div>
                                <div class="valid">
                                    <input type="submit" name="envoyer" value="Envoyer" id="inpu">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div> 
    </div>