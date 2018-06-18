<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chaînes de montagnes ● QCM Donjon RPG</title>
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
						echo 'Voici votre café. En attendant que sa température soit optimale, ça vous dirait de parler de... chaînes de montagnes ? Je sens que vous rêvez de ça toutes les nuits.'; 
					} 
					?>
                    <hr>
                    <!-- EFFACER -->
                    <form action="chaines-montagnes.php" method="post">
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
					$qcm=array(1=>array('libelle'=>'Les ophiolites',  /*Déclaration de la question*/
                    'choix'=>array('a'=>'sont des associations de roches issues d\'une ancienne lithosphère océanique.', /*Déclaration des réponses*/
                                   'b'=>'ont subi un métamorphisme HP-BT et sont très déformées.',
                                   'c'=>'sont aussi appelées roches vertes',
								   'd'=>'sont incorporées aux chaînes de montagnes lors de la collision')),
								   
					2=>array('libelle'=>'Une marge passive fossile',
                    'choix'=>array('a'=>'est un reste de lithosphère océanique',
                                   'b'=>'se reconnaît à ses blocs basculés séparés par des failles normales.',
                                   'c'=>'est un témoin d\'un ancien domaine océanique')),
								   
					3=>array('libelle'=>'Les zones de subduction',
					'choix'=>array('a'=>'sont des zones de convergence lithosphérique',
								   'b'=>'se caractérisent par l\'enfoncement de la lithosphère dans l\'asthénosphère.',
								   'c'=>'ont une signature métamorphique de type HP-BT',
								   'd'=>'fonctionnent sous l\'effet de la poussée exercée par les dorsales océaniques')),
								   
					4=>array('libelle'=>'Les transformations minéralogiques liées à la subduction',
					'choix'=>array('a'=>'sont de type HP-BT.',
								   'b'=>'sont dues à l\'enfouissement des roches.',
								   'c'=>'sont conservées dans les roches métamorphiques sous forme de minéraux reliques.',
								   'd'=>'sont absentes dans les orches constituant une chaîne de collision.')),
								   
					5=>array('libelle'=>'La subduction',
					'choix'=>array('a'=>'est la disparition de lithosphère océanique dans le manteau.',
								   'b'=>'crée une force de traction au sein de la lithosphère océanique',
								   'c'=>'ne concerne jamais la lithosphère continentale, peu dense.',
								   'd'=>'est le moteur essentiel de la tectonique des plaques')),
								   
					6=>array('libelle'=>'La densité de la lithosphère océanique',
					'choix'=>array('a'=>'augmente à mesure qu\'elle se refroidit',
								   'b'=>'augmente à mesure qu\'elle s\'éloigne de la dorsale',
								   'c'=>'est inférieure à celle de la lithosphère continentale',
								   'd'=>'augmente car la croûte océanique s\'épaissit.')),
								   
					7=>array('libelle'=>'La collision de deux lithosphères continentales',
					'choix'=>array('a'=>'crée des reliefs.',
								   'b'=>'entraîne un épaississement de la croûte continentale.',
								   'c'=>'crée des marges continentales passives.',
								   'd'=>'fait suite à un blocage de la subduction.')),
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
						'a','c','d'
					),
					2=>array(
						'b','c'
					),
					3=>array(
						'a','b','c'
					),
					4=>array(
						'a','b','c'
					),
					5=>array(
						'a','b','d'
					),
					6=>array(
						'a','b'
					),
					7=>array(
						'a','b','d'
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