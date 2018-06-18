<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Caractéristiques des ondes ● QCM Donjon RPG</title>
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
            <img class="dialogue-icone" src="images/lac-fleur.png" width="15%" height="15%">
            <div class="dialogue-box" id="dialogue-qcm">
                <div class="dialogue-texte">
                    <?php 
					if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
						echo 'Nooon ! Peut-être que tu M\'as vaincue, mais mes amies fleurs se vengeront de ma mort ! 
						<br>
						Dans tous les cas, tu devras affronter l\'ULTIME FLEUR au mois de juin ! J\'espère que tu le REGRETTERAS bien ! Comme je suis une fleur gentille, je te conseillerai vivement de t\'entraîner sur des annales de bac...  Je me meurs, fleurs chéries... bweheheh'; 
					} else { //Message par défaut
						echo 'Mais... nous n\'avions pas prévu que tu allais nous provoquer de la sorte. Quelle étrange manière de nous saluer. On ne te veut point du mal... Alors renonce à ton combat !'; 
					} 
					?>
                    <hr>
                    <!-- EFFACER -->
                    <form action="ondes-particules.php" method="post">
                        <input class="choix" id="choix-effacer" type="RESET" value="Je veux effacer mes choix !" />
                        <!-- FIN EFFACER -->
                        <!-- FUIR -->
                        <a href="lac.html">
                            <div class="choix">
                                <div class="choix-texte" id="choix-fuir">
									Je m'enfuis ! (<i>Retourner en arrière</i>)
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
					$qcm=array(1=>array('libelle'=>'Une onde mécanique transporte', /*Déclaration de la question*/
                    'choix'=>array('a'=>'de la matière', /*Déclaration des réponses*/
                                   'b'=>'de l\'énergie',
                                   'c'=>'de la matière et de l\'énergie')),
								   
					2=>array('libelle'=>'La propagation d\'une onde mécanique',
                    'choix'=>array('a'=>'modifie localement le milieu matériel',
                                   'b'=>'modifie temporairement le milieu matériel',
                                   'c'=>'n\'a aucune conséquence sur le milieu matériel')),
								   
					3=>array('libelle'=>'Dans l’air, une onde mécanique qui se propage peut se traduire par',
					'choix'=>array('a'=>'un coup de vent',
								   'b'=>'un son',
								   'c'=>'de la lumière')),		
								   
					4=>array('libelle'=>'La magnitude d’un séisme',
					'choix'=>array('a'=>'est calculée à partir de mesures sismiques',
								   'b'=>'permet de localiser un séisme',
								   'c'=>'double lorsque l\'énergie libérée par le séisme double')),
								   
					5=>array('libelle'=>'La lumière émise par le Soleil est une onde ',
					'choix'=>array('a'=>' Mécanique',
								   'b'=>'Electromagnétique',
                                   'c'=>'Sonore')),							   
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
						'b'
					),
					2=>array(
						'a','b'
					),
					3=>array(
						'b'
					),
					4=>array(
						'a'
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