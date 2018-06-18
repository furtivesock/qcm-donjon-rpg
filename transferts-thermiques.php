<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Transferts thermiques ● QCM Donjon RPG</title>
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
            <img class="dialogue-icone" src="images/souterrain-personnage.jpg" width="15%" height="15%">
            <div class="dialogue-box" id="dialogue-qcm">
                <div class="dialogue-texte">
                    <?php 
					if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
						echo 'Je crois que nous n\'avons plus rien à dire... Mais c\'était passionnant.<br>
						Mais il y a sûrement d\'autres choses qui n\'ont pas été dites. Puis discuter avec moi ne suffit pas pour que tu progresses dans ton aventure. Mets en pratique ces connaissances. Comment ? Dans la vie réelle, bien sûr ! Oui, je parle à toi, celui qui se trouve devant son écran !'; 
					} else { //Message par défaut
						echo 'Salut, toi ! Tu veux discuter un peu des transferts thermiques avec moi ? Je peux le lire dans tes yeux. C\'est bien pour ça que t\'es venu me voir, n\'est-ce pas ?<br>
						N\'oublie pas ta [<b>Feuille à papier</b>], ton [<b>Crayon</b>] et ta [<b>Calculatrice</b>] !'; 
					} 
					?>
                    <hr>
                    <!-- EFFACER -->
                    <form action="transferts-thermiques.php" method="post">
                        <input class="choix" id="choix-effacer" type="RESET" value="Je veux effacer mes choix !" />
                        <!-- FIN EFFACER -->
                        <!-- FUIR -->
                        <a href="souterrains.html">
                            <div class="choix">
                                <div class="choix-texte" id="choix-fuir">
                                    <?php 
									if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
										echo 'Salut ! (<i>S\'en aller</i>)'; 
									} else { //Message par défaut
										echo 'Non, je ne voulais pas t\'adresser la parole au final. (<i>S\'en aller</i>)'; 
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
					$qcm=array(1=>array('libelle'=>'L\'énergie interne d\'un système macroscopique résulte', /*Déclaration de la question*/
                    'choix'=>array('a'=>'de contributions microscopiques', /*Déclaration des réponses*/
                                   'b'=>'de contributions microscopiques et macroscopique',
                                   'c'=>'de contributions macroscopique')),
								   
					2=>array('libelle'=>'Lorsque l’agitation des entités microscopiques constituant un système macroscopique augmente, la température T de ce système ',
                    'choix'=>array('a'=>'augmente',
                                   'b'=>'reste constante',
                                   'c'=>'diminue')),
								   
					3=>array('libelle'=>'L\'énergie interne d\'un système macroscopique',
					'choix'=>array('a'=>'Peut varier suite à des transferts thermiques avec l\'extérieur',
								   'b'=>'Peut varier suite à des travaux échangés avec l\'extérieur',
								   'c'=>'Peut ne pas varier')),
								   
					4=>array('libelle'=>'La variaton d’énergie interne d’un système condensé de capacité thermique C peut s’écrire sous la forme  ',
					'choix'=>array('a'=>'C×ΔT',
								   'b'=>'ΔT/C',
								   'c'=>'C/ΔT')),
								   
					5=>array('libelle'=>'8) Les trois modes de transferts thermiques entre un système et l\'extérieur sont',
                    'choix'=>array('a'=>'la conductivité, la convection et le rayonnement',
                                   'b'=>'la conduction, la convection et le rayonnement',
                                   'c'=>'la conduction, la convection et le travail')),
						   
					6=>array('libelle'=>'Le flux thermique a pour unité',
					'choix'=>array('a'=>'Le Joule',
								   'b'=>'Le Watt',
								   'c'=>'Le joule seconde J.s')),
								   								   
			   
					7=>array('libelle'=>'Une paroi plane constituée d’un matériau de conductvité thermique λ a une épaisseur e et une secton S. Si une diférence de température ΔT existe entre ses deux faces, sa résistance thermique Rth vaut alors',
					'choix'=>array('a'=>'e/λS',
								   'b'=>'ΔT/λS',
								   'c'=>'λS*(e/ΔT)')),

					8=>array('libelle'=>'Au cours du fonctionnement d\'un moteur de voiture, le mélange gazeux d\'air et d\'essence reçoit par transfert thermique 36,1 kJ et cède un travail de 19,4 kJ à l\'extérieur. Ces deux transferts d\'énergie sont les seuls à prendre en compte. Pour ce mélange gazeux d\'air et d\'essence, sur un cycle ',
					'choix'=>array('a'=>'W= –16,7 kJ',
								   'b'=>'W= –19,4 kJ',
								   'c'=>'Q= –36,1 kJ')),

					9=>array('libelle'=>'Pour le mélange gazeux d\'air et d\'essence de la  question précédente, sur un cycle',
					'choix'=>array('a'=>'ΔU> 0',
								   'b'=>'ΔU< 0',
								   'c'=>'ΔU= 0')),								   
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
						'a','b','c'
					),
					4=>array(
						'a'
					),
					5=>array(
						'b'
					),
					6=>array(
						'b'
					),
					7=>array(
						'a'
					),
					8=>array(
						'b'
					),
					9=>array(
						'a'
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