<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Relativité restreinte ● QCM Donjon RPG</title>
    <link href="styles/default.css" rel="stylesheet" type="text/css">
    <link href="styles/default-qcm.css" rel="stylesheet" type="text/css">
    <link href="styles/default-dialogue.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <!-- Retour -->
    <a href="carte.html" class="retour">&#171; Retour vers la carte</a>
    <!-- Fin Retour -->
    <!-- CONTENU -->
    <div class="contenu">
        <!-- PRESENTATION -->
        <div class="dialogue">
            <img class="dialogue-icone" src="images/alphys.png" width="15%" height="15%">
            <div class="dialogue-box" id="dialogue-qcm">
                <div class="dialogue-texte">
                    <?php 
					if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
						echo 'Vous avez réussi ! Ce n\'était pas si compliqué au final. Mais ce ne sera pas le seul QCMonstre que vous aurez vaincu. D\'autres viendront vous semer des embûches, mais cela facilitera le combat contre le Boss des QCMonstres, le baccalauréat ! Jouez le rôle d\'un professeur, d\'un mentor ou d\'un maître en expliquant votre leçon à un sombre crétin ! C\'est bien ce que j\'ai fait il y a quelques minutes de cela, hein ? Bon, allez-vous en, c\'est dangereux de traîner seul ici.. Moi ? Je connais la forêt et sa faune animale sur le bout de mes doigts, alors ne vous inquiètez pas pour mon sort.'; 
					} else { //Message par défaut
						echo 'Oh ! Que faites-vous ici ! C\'est dangereux de se promener seul dans la forêt ! Mais maintenant c\'est trop tard, vous avez lancé un combat contre ce monstre de type Physique plutôt agressive. Moi? Euh... je vous assisterai en vous observant combattre ! Je sais que vous avez les potentiels ! Exploitez-les !'; 
					} 
					?>
                    <hr>
                    <!-- EFFACER -->
                    <form action="relativite-restreinte.php" method="post">
                        <input class="choix" id="choix-effacer" type="RESET" value="Je veux effacer mes choix !" />
                        <!-- FIN EFFACER -->
                        <!-- FUIR -->
                        <a href="foret.html">
                            <div class="choix">
                                <div class="choix-texte" id="choix-fuir">
									<?php 
									if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
										echo 'Euh... Au revoir ! (<i>S\'en aller</i>)'; 
									} else { //Message par défaut
										echo 'Non, je ne me sens pas capable au final. Allez, salut ! (<i>S\'en aller</i>)'; 
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
					$qcm=array(1=>array('libelle'=>'En relativité restreinte, la valeur de la vitesse de la lumière dans le vide et dans un référentiel galiléen',
                    'choix'=>array('a'=>'Est absolue',
								   'b'=>'Est relative',
                                   'c'=>'Est absolument relative',
								   'd'=>'dépendante du mouvement de la source lumineuse',
								   'e'=>'Dépend du référentiel')),
								   
					2=>array('libelle'=>' Deux personnes munies de chronomètres, fixes dans deux référentiels galiléens, observent les deux mêmes évènements.\n'.'
										Les durées séparant ces deux évènements sont sensiblement différentes si',
                    'choix'=>array('a'=>'Ces deux personnes sont en mouvement l\'une par rapport à l\'autre à une vitesse de valeur élevée',
								   'b'=>'Ces deux personnes ne sont pas en mouvement l\'une par rapport à l\'autre',
                                   'c'=>'Ces deux personnes sont en mouvement l\'une par rapport à l\'autre à une vitesse de valeur faible')),

					3=>array('libelle'=>'Une fusée se dirige avec une vitesse v vers une station spatiale immobile dans un référentiel galiléen. Pour un occupant de la station, par comparaison avec une horloge de la station, une horloge embarquée dans la fusée',
					'choix'=>array('a'=>'Prend de l\'avance',
								   'b'=>'Prend du retard',
								   'c'=>'Ne fonctionne plus',
							       'd'=>'Reste identique')),
								   
					4=>array('libelle'=>'Une durée mesurée d\'un phénomène est toujours',
					'choix'=>array('a'=>'Supérieure ou égale à sa durée propre',
								   'b'=>'Inférieure ou égale à sa durée propre',
								   'c'=>'Égale à sa durée propre')),
								
					5=>array('libelle'=>'La mécanique classique',
					'choix'=>array('a'=>'Est un cas particulier de la mécanique relativiste',
								   'b'=>'Est une généralisation de la mécanique relativiste',
								   'c'=>'N\'a aucun lien avec la mécanique relativiste')),
								   
					6=>array('libelle'=>'D\'après les postulats de la relativité restreinte, si on décrit le mouvement d\'un électron soumis à un champ électromagnétique dans deux référentiels galiléens différents',
					'choix'=>array('a'=>'Les trajectoires son décrites de façons identiques',
								'b'=>'Les vitesses sont, à chaque instant, identiques',
								'c'=>'Les mêmes lois de l\'électromagnétisme sont respectées')),			   
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
						'a'
					),
					3=>array(
						'b'
					),
					4=>array(
						'a'
					),
					5=>array(
						'a'
					),
					6=>array(
						'c'
					)	
				);
			
			
				echo '<div class="resultat-titre">&#10024; Voici tes résultats &#10024;</div>
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
						echo '<div style="color: red; display:inline; font-size: 16px;">&#10008;</div> Tu aurais dû opter pour
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