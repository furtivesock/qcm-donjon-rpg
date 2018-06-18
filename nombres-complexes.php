<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nombres complexes ● QCM Donjon RPG</title>
    <link href="styles/default.css" rel="stylesheet" type="text/css">
    <link href="styles/default-qcm.css" rel="stylesheet" type="text/css">
    <link href="styles/default-dialogue.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <!-- Retour -->
    <a href="carte.html" class="retour" href="carte.html">&#171; Retour vers la carte</a>
    <!-- Fin Retour -->
    <!-- CONTENU -->
    <div class="contenu">
        <!-- PRESENTATION -->
        <div class="dialogue">
            <img class="dialogue-icone" src="images/lac-fleur.PNG" width="15%" height="15%">
            <div class="dialogue-box" id="dialogue-qcm">
                <div class="dialogue-texte">
                    <?php 
					if(isset($_POST[ 'btn_valid'])){ //Message qui s'affiche quand l'utilisateur a cliqué sur Valider
						echo 'Nooon ! Peut-être que tu M\'as vaincue, mais mes amies fleurs se vengeront de ma mort ! 
						<br>Dans tous les cas, tu devras affronter l\'ULTIME FLEUR au mois de juin ! J\'espère que tu le REGRETTERAS bien ! Comme je suis une fleur gentille, je te conseillerai vivement de t\'entraîner sur <a href="http://www.apmep.fr/-Terminale-S-240-sujets-depuis-1999-" target="_blank">apmep.fr</a>... Je me meurs, fleurs chéries... bweheheh'; 
					} else { //Message par défaut
						echo 'Mais... nous n\'avions pas prévu que tu allais nous provoquer de la sorte. Quelle étrange manière de nous saluer. On ne te veut point du mal... Alors renonce à ton combat ! De plus, j\'espère, pour ta peau, que tu t\'es équipé des bons items tels qu\'une [<b>Feuille de papier</b>] et un [<b>Crayon</b>].'; 
					} 
					?>
                    <hr>
                    <!-- AIDE -->
                    <div class="choix" id="choix-aide">
                        <div class="choix-texte">
                            Je veux consulter mon grimoire de formules !
                        </div>
                    </div>
                    <div id="Aide">
                        Un nombre complexe z, non nul, admet 3 types d'écriture :<br>
						– une écriture algébrique : z = a + i b, où a et b sont deux nombres réels ;  a est la partie réelle de z et b, sa partie imaginaire ;<br>
						– une écriture trigonométrique : <img src="http://latex.codecogs.com/gif.latex?%5Cinline%20%5Csmall%20z%3Dr%28%5Ccos%7B%5Ctheta%7D&plus;%5Cmathrm%7Bi%7D%5C%2C%5Csin%7B%5Ctheta%7D%29">, où r désigne le module de z et <img src="http://latex.codecogs.com/gif.latex?%5Cinline%20%5Csmall%20%5Ctheta"> un argument de  z,<br>
						– une écriture exponentielle : <img src="http://latex.codecogs.com/gif.latex?%5Cinline%20%5Csmall%20z%3Dr%7B%5Cmathrm%7Be%7D%7D%5E%7B%5Cmathrm%7Bi%7D%5Ctheta%7D">.<br><br>
						Deux nombres complexes sont égaux si et seulement s'ils ont la même partie réelle et la même partie imaginaire.<br>
						Pour multiplier des nombres complexes non nuls, on multiplie leurs modules et on ajoute leurs arguments.<br>
						Le plan étant rapporté à un repère orthonormé direct, l'image du nombre z = a + i b est le point M de coordonnées (a ; b). On dit alors que z est l'affixe du point M.<br>
						<font size="1pt"><i>Source : www.assistancescolaire.com</i></font>
                    </div>
                    <script>
                        document.querySelector("#choix-aide").onclick = function() {
                            if (window.getComputedStyle(document.querySelector('#Aide')).display == 'none') {
                                document.querySelector("#Aide").style.display = "block";
                            } else {
                                document.querySelector("#Aide").style.display = "none";
                            }
                        }
                    </script>
                    <!-- FIN AIDE -->
                    <!-- EFFACER -->
                    <form action="nombres-complexes.php" method="post">
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
					$qcm=array(1=>array('libelle'=>'Si z est un nombre complexe alors Im(-iz) est égal à', /*Déclaration de la question*/
                    'choix'=>array('a'=>'i*Re(z)', /*Déclaration de la question*/
                                   'b'=>'-Re(z)',
                                   'c'=>'Im(z)',
								   'd'=>'-Im(i*z)')),
								   
					2=>array('libelle'=>'Un argument du nombre complexe  -√6 + i*√ 2 est',
                    'choix'=>array('a'=>'π /6',
                                   'b'=>'-π /6',
                                   'c'=>'5π /6',
								   'd'=>'-π /3')),
								   
					3=>array('libelle'=>'Un argument de -2e ^(I*π/4) est',
					'choix'=>array('a'=>'-π /4',
								   'b'=>'3π /4',
								   'c'=>'π /4',
								   'd'=>'-3π /4 ')),
								   
					4=>array('libelle'=>'e^(i*π /3)-e^(i*2π /3) est égal à ',
					'choix'=>array('a'=>'e^(-i*π /3)',
								   'b'=>'e^(iπ)',
								   'c'=>'1',
								   'd'=>'i√3')),
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
							<input type="radio" name="choice['.$num.'][]" value="'.$id.'">'.$choix; 
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
						'd'
					),
					3=>array(
						'c'
					),
					4=>array(
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
