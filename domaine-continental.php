<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Domaine continental ● QCM Donjon RPG</title>
    <link href="styles/default.css" rel="stylesheet" type="text/css">
    <link href="styles/default-qcm.css" rel="stylesheet" type="text/css">
    <link href="styles/default-dialogue.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <!-- Retour -->
    <a class="retour" href="Carte.html">&#171; Retour vers la carte</a>
    <!-- Fin Retour -->
    <!-- CONTENU -->
    <div class="contenu">
        <!-- PRESENTATION -->
        <div class="dialogue">
            <img class="dialogue-icone" src="images/grillby.gif" width="15%" height="15%">
            <div class="dialogue-box" id="dialogue-qcm">
                <div class="dialogue-texte">
                    <?php 
					if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
						echo 'Et bien, ce fut un plaisir de discuter avec toi à propos de ce sujet si passionnant qu\'est le domaine continental. Il se peut qu\'on n\'ait pas abordé tous les aspects alors il faudrait que tu te renseignes. A la prochaine.'; 
					} else { //Message par défaut
						echo 'Voici votre café. En attendant que sa température soit optimale, parlons un peu du domaine continental si cela vous tient à coeur.'; 
					} 
					?>
                    <hr>
                    <!-- EFFACER -->
                    <form action="domaine-continental.php" method="post">
                        <input class="choix" id="choix-effacer" type="RESET" value="Oubliez ce que j'ai dit." />
						<!-- FIN EFFACER -->
                        <!-- FUIR -->
                        <a href="souterrains.html">
                            <div class="choix">
                                <div class="choix-texte" id="choix-fuir">
                                    <?php 
									if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
										echo 'Au revoir, merci pour le café ! (<i>S\'en aller</i>)'; 
									} else { //Message par défaut
										echo 'J\'ai changé d\'avis. Merci pour le café tout de même. (<i>S\'en aller</i>)'; 
									} 
									?>
                                </div>
                            </div>
                        </a>
                        <!-- FIN FUIR -->

                </div>
            </div>
        </div>
        <!-- FIN PRESENTATION -->
        <div class="qcm">
            <div class="qcm-box">
                <div class="qcm-box-contenu">
				<form name="chronoForm">
                    <?php 
					/*Début de la déclaration du QCM*/
					$qcm=array(1=>array('libelle'=>'Selon le principe d\'isostasie, l\'ablation d\'une tranche de matériaux à la surface d\'un continent entraîne un rééquilibrage des masses',  /*Déclaration de la question*/
                    'choix'=>array('a'=>'Il y a remontée de l\'ensemble de la lithosphère continentale.', /*Déclaration des réponses*/
                                   'b'=>'Il y a une baisse de l\'ensemble de la lithosphère continentale.',
                                   'c'=>'Il y a remontée de l\'ensemble de la lithosphère océanique adjacente.',
								   'd'=>'Il y a une baisse de l\'ensemble de la lithosphère océanique adjacente.')),
								   
					2=>array('libelle'=>'L\'altitude la plus fréquente sur les continents',
                    'choix'=>array('a'=>'correspond à l\'altitude moyenne des continents qui est de 840 m.',
                                   'b'=>'est évaluée à une altitude de 300 m',
                                   'c'=>'est évaluée à quelques mètres seulement au-dessus du niveau de la mer (altitude 0)')),
								   
					3=>array('libelle'=>'La croûte continentale est globalement représentée par',
					'choix'=>array('a'=>'Le basalte',
								   'b'=>'La péridotite',
								   'c'=>'Le granite',
								   'd'=>'Le gabbro')),
								   
					4=>array('libelle'=>'Si la teneur en un isotope radioactif est de 1/8 de sa valeur initiale après 12 000 ans, sa période radioactive est de',
					'choix'=>array('a'=>'6000 ans',
								   'b'=>'4000 ans',
								   'c'=>'3000 ans')),
								   
					5=>array('libelle'=>'Lorsque les roches sont portées à des profondeurs différentes de celles où elles se trouvaient initialement, elles se transforment à l\'état solide. On nomme ce phénomène ',
					'choix'=>array('a'=>'Le magmatisme',
								   'b'=>'Le volcanisme',
								   'c'=>'Le métamorphisme')),
					);
					/*Fin de la déclaration du QCM*/
					?>


</body>
                    <?php 
					/*Début de l'affichage des questions*/
					foreach($qcm as $num=>$question){ 
						echo '<br>
							<div class="qcm-question">
								<div class="qcm-numero">'.$num.'</div>
								<div class="qcm-question-texte">'.$question['libelle'].' :</div>
							</div>
							<div class="qcm-reponse-ensemble">'; 
						foreach($question['choix'] as $id => $choix){
							echo '
							<br>
								<div class="qcm-reponse">
							<input type="checkbox" name="choice['.$num.'][]" value="'.$id.'">'.$choix; 
							echo '</div>';
						} 
						echo '</div>';
					} 
					/*Fin de l'affichage des questions*/
					?>
                    <!-- DEBUT BOUTON VALIDER -->
                    <div style="text-align: center;">
                        <input type="SUBMIT" name='btn_valid' value="Valider" class="valider" />
                    </div>
                    <!-- FIN BOUTON VALIDER -->
                    </form>
                    <!-- FIN REPONSES TYPE -->
                </div>
            </div>
            <!-- DEBUT POP-UP RESULTATS -->
            <?php 
			if(isset($_POST[ 'btn_valid'])){
				
				echo '<div class="resultat-bloc"><div class="resultat-contenu"><div class="resultat-reponses">'; 
			$reponseQCM=array( //Déclaration des bonnes réponses du QCM 
					1=>array(
						'a'
					),
					2=>array(
						'b'
					),
					3=>array(
						'c'
					),
					4=>array(
						'b'
					),
					5=>array(
						'c'
					)
				);
			
			
				echo '
						<div class="resultat-titre">&#10024; Voici tes résultats &#10024;</div>
						<br/>';
				$point=0;
				$good=false;
				foreach($reponseQCM as $num =>$reponse){
					$good=false;
					echo '<hr>
					<div class="resultat-numero">'.$num.'</div>';
					if(isset($_POST['choice'][$num])){
						echo 'Tu as répondu :
						<div class="resultat-choix">'.implode('</div> et
						<div class="resultat-choix">',$_POST['choice'][$num]).'</div>
						<br>';
						if($_POST['choice'][$num] == $reponse){ //Vérification des réponses de l'utilisateur
							$point++; 
							$good=true; 
						} //Début de l'affichage des résultats
					} else { 
						echo 'Tu es resté
						<div class="resultat-action" id="passif">passif</div>, mais maintenant tu connais la réponse !
						<br>';
					}
					if($good){ 
						echo 'Bien joué, tu as répondu
						<div class="resultat-action" id="juste">juste &#10003;</div>
						<br>';
					} else{ 
						echo '
						<div style="color: red; display:inline; font-size: 16px;">&#10008;</div> Tu aurais dû opter pour
						<div class="resultat-choix">'.implode('</div> et
						<div class="resultat-choix">',$reponse).'</div>
						<br>'; 
					}
				} 
				/*SCORE : Nb bonnes réponses sur nb questions posées, Score en pourcentage et arrondi*/
				echo '</div>
				<table class="resultat-score" cellspacing="3px">
					<tr>
						<td class="note">'.($point).'/'.sizeof($qcm).'</td> 
					</tr>
					<tr>
						<td class="pourcentage">'.round(($point*100)/sizeof($qcm)).'%</td>
					</tr>
				</table>';
				echo '</div></div>';
						//Fin de l'affichage des résultats
			}
			?>
    <!-- FIN POP UP RESULTATS -->
    </div>
    </div>
    </div>
    <!-- FIN CONTENU -->
</body>

</html>