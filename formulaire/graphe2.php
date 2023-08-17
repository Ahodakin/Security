<?php

include('connnexion.php');

@$envoyer = $_GET["envoyer"];
@$lieu = $_GET["lieu"];
@$annee = $_GET["lieu"];

$prendre_ville = $db->query("SELECT id,ville FROM ville");
if (isset($envoyer)) {
    if (($lieu != 0) && ($annee != 0)) {
for ($mois = 1; $mois <= 12; $mois++) { 
    $info = $db->prepare("SELECT COUNT(*) AS total FROM accidents INNER JOIN ville ON lieu = 
    id WHERE MONTH(dateEvenement) = $mois AND (lieu =$lieu) OR (YEAR(dateEvenement) = $annee)");
    $info->execute();
    $info->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $info->fetch();

    $total[] = $tab['total'];
}
}
}

@$total_jan = $total[0];
@$total_feb = $total[1];
@$total_mar = $total[2];
@$total_apr = $total[3];
@$total_may = $total[4];
@$total_jun = $total[5];
@$total_jul = $total[6];
@$total_aug = $total[7];
@$total_sep = $total[8];
@$total_oct = $total[9];
@$total_nov = $total[10];
@$total_dec = $total[11];

?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
   <title>graphe2</title>


    <style>
        * {
            margin: 0; 
            padding:0;
        }
	    .chartCard {
	    width: 100vw;
	    display: flex;
	    	align-items: center;
   		justify-content: center;
 	    }
 	    .chartBox {
             width: 50%;
     padding: 10px;
    border-radius: 15px;
    border: 3px solid rgba(255, 26, 104, 1);
    background: white;
    /* margin-right: -53px; */
     margin-top: -451px;
    margin-left: 353px;

	    }
     </style>
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
                               <div class="list-item"> <a href="graphe.php"> Accidents </a></div>  
                            </div> 
                          
                            <div class="puce_blanche">
                                <div class="cercle" style=" background-color:#67a84e ;">
                                  <span>02</span>
                                </div>
                                <div class="list-item"><a href="graphe2.php">vol</a></div>
                             </div> 

                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>03</span>
                                </div>
                            <div class="list-item"><a href="graphe3.php">viol</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>04</span>
                                </div>
                            <div class="list-item"> <a href="graphe4.php">meurtre</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>05</span>
                                </div>
                            <div class="list-item"> <a href="graphe5.php">suicide</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>06</span>
                                </div>
                            <div class="list-item"> <a href="graphe6.php">incendie</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>07</span>
                                </div>
                            <div class="list-item"><a href="graphe7.php">innodation</a></div>
                            </div>
                            <div class="puce_blanche">
                                <div class="cercle">
                                    <span>08</span>
                                </div>
                            <div class="list-item"><a href="graphe8.php">negligeance médical </a> </div>
                            </div>
                    </div>
                </div>
                
                <div class="fond_blanc">
                <div class="image">
                    <img src="images.png" alt="">
                    </div>
                    <div class="section_centrale">
                        <div class="graphe">
                            <form method="GET" action="">
                        <fieldset>
                        <!-- <legend>Lieu</legend> -->
                                <select id="ville" name="lieu" class="selectt">
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
                        <fieldset>
                        <select name="annee" id="graphhe">
                            <option>Choisir une annee</option>
                            <option <?= (isset( $_GET["annee"]) && $_GET["annee"] == "2022")? "selected": ""; ?> value="2022">2022</option>
                            <option <?= (isset( $_GET["annee"]) && $_GET["annee"] == "2021")? "selected": ""; ?> value="2021">2021</option>
                            <option <?= (isset( $_GET["annee"]) && $_GET["annee"] == "2020")? "selected": ""; ?> value="2020">2020</option>
                            <option <?= (isset( $_GET["annee"]) && $_GET["annee"] == "2019")? "selected": ""; ?> value="2019">2019</option>
                            <option <?= (isset( $_GET["annee"]) && $_GET["annee"] == "2018")? "selected": ""; ?> value="2018">2018</option>
                         </select>
                      </fieldset> <br>
                         <div class="buttom">
                            <input type="submit" name="envoyer" value="Recherche" id="recherch">
                        </div>
                        </div>
                       
                      </div> 
                      
                    </div>
                    </form>
                    <div class="chartBox">
		         <canvas id="myChart"></canvas>
	            </div>
                </div>
                <!-- <div class="chartCard">
	   
       <canvas id="myChart0"></canvas>
   </div> -->
</div>



<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   
   //setUp
   const data = {
       labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
       datasets: [{
           label: 'Nombre d\'accidents / Mois',
           data: [
               <?php echo $total_jan; ?>,
               <?php echo $total_feb; ?>,
               <?php echo $total_mar; ?>,
               <?php echo $total_apr; ?>,
               <?php echo $total_may; ?>,
               <?php echo $total_jun; ?>,
               <?php echo $total_jul; ?>,
               <?php echo $total_aug; ?>,
               <?php echo $total_sep; ?>,
               <?php echo $total_oct; ?>,
               <?php echo $total_nov; ?>,
               <?php echo $total_dec; ?> 
           ],
           backgroundColor: [
               'rgba(255, 26, 104, 0.2)',
           ],
           borderColor: [
               'rgba(255, 26, 104, 1)',
           ],
           borderWidth: 1
       }]
   };

   //confiG
   const config = {
       type: 'bar',
       data,
       options: {
           scales: {
               y: {
                   beginAtZero: true
               }
           }
       }
   };

  
   //render init block
   const myChart = new Chart(
       document.getElementById('myChart'),
       config
   );

</script>

                    
               </div>               
    </div>
</body>
</html>