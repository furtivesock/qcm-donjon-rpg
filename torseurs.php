<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Torseurs ● QCM Donjon RPG</title>
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
            <img class="dialogue-icone" src="images/ours.PNG" width="15%" height="15%">
            <div class="dialogue-box" id="dialogue-qcm">
                <div class="dialogue-texte">
                    <?php 
					if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
						echo 'Merci beaucoup de votre aide. Ainsi, grâce à vous, les habitants pourront se rendre aux toilettes publiques la nuit en toute sécurité ! Notre village n\'est pas encore 100% sécurisé, on peut s\'attendre au pire... Dont la visite annuelle du légendaire Baccalauréat comme les légendes le racontent ! Soyez prêts à l\'affronter pour nous aider à survivre cette année. Ayez vos connaissances solides comme du fer !'; 
					} else { //Message par défaut
						echo 'Vous acceptez de nous aider ? Le village en sera très reconnaissant ! Pourriez-vous éliminer ces QCMonstres de type SI qui terrifient nos habitants grâce à vos connaissances ?'; 
					} 
					?>
                    <hr>
                    <!-- EFFACER -->
                    <form action="torseurs.php" method="post">
                        <input class="choix" id="choix-effacer" type="RESET" value="Je veux effacer mes choix !" />
                        <!-- FIN EFFACER -->
                        <!-- FUIR -->
                        <a href="village.html">
                            <div class="choix">
                                <div class="choix-texte" id="choix-fuir">
									<?php 
									if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
										echo 'N\'abusez pas non plus, je suis juste un frêle aventurier. Bonne journée à vous.<br>(<i>S\'en aller</i>)'; 
									} else { //Message par défaut
										echo 'Votre proposition est forte aimable mais je ne me sens pas prêt. (<i>S\'en aller</i>)'; 
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
					$qcm=array(1=>array('libelle'=>'Pour un solide en équilibre, la somme des torseurs réduits en un même point qui s\'exercent sur un solide est égale',
                    'choix'=>array('a'=>'A une masse nulle',
                                   'b'=>'A 1',
                                   'c'=>'Au torseur nul',
								   'd'=>'Dépend de la masse du solide')),
								   
					2=>array('libelle'=>'Quel point choisir pour l\'application du PFS ?',
                    'choix'=>array('a'=>'Le point d',
								   'b'=>'Le point avec le plus d\'inconnues',
                                   'c'=>'Celui avec le moins d\'inconnues')),

					3=>array('libelle'=>'Un torseur dans l\'espace est définie par',
					'choix'=>array('a'=>'2 axes',
							       'b'=>'3axes',
							       'c'=>'1 axe par torseur',
							       'd'=>'une infinité d\'axes ')),

					4=>array('libelle'=>'L\'application du PFS permet',
					'choix'=>array('a'=>'De connaitre la position d\'un objet immobile dans l\'univers',
								   'b'=>'De déterminer si un objet est immobile',
								   'c'=>'N\'a pas d\'utilité')),
								   
					5=>array('libelle'=>'Pour résoudre un PFS on peut utiliser: ',
					'choix'=>array('a'=>'La vitesse de l\'objet',
								   'b'=>'Le centre de gravité de l\objet',
								   'c'=>'L\'aérodynamisme')),			   
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
						'c'
					),
					2=>array(
						'b'
					),
					3=>array(
						'b'
					),
					4=>array(
						'b'
					),
					5=>array(
						'b'
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
