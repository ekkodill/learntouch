<!--Denne siden er utviklet av Kurt A. Aamodt og Dag-Roger Eriksen, siste gang endret 27.03.2014
Denne siden er kontrollert av Erik Bjørnflaten siste gang 10.04.2014  !-->

<?php
include 'includes/init.php';
//Sjekker at login er submitta
if(empty($_POST) === false) {
	$brukernavn = $_POST['brukernavn'];
	$passord 	= $_POST['passord'];

//Sjekker at brukernavn og passord feltet inneholder noe og sjekker at informasjonen er gyldig.
if (empty($brukernavn) === true || empty($passord) === true) {
		$errors[] = 'Du må skrive inn brukernavn og passord.';
	} else if (user_exists($brukernavn) === false) {
		$errors[] = "Feil brukernavn eller passord";
	} else {
		$login = login($brukernavn, $passord);
		if ($login === false) {
			$errors[] = "Feil brukernavn eller passord";
		} else {
			$_SESSION['brukerPK'] = $login;
			$btype = get_brukerType($login); //Får brukertype fra databasen basert på brukerPK vi nettopp fikk fra innloggingen
			//Sjekker om brukeren er innlogget og redirecter brukertypene til sine respektive "startsider"
			if($btype == 1) {
        		header('Location: vis_brukere.php');
        		exit();
    		} elseif($btype == 2) {
		        header('Location: oppgave.php');
        		exit();
    		}  elseif($btype == 3) {
        		header('Location: minside.php');
        		exit();
    		}    
		}
	}
}  else {
	header('location: default.php');
}

?>

<!doctype html>
<html>
    <?php 
    $pgName = 'Innlogging';
    include 'design/head.php'; ?>
  	<body>
  	<?php include 'design/header.php'; ?>
  	<?php include('design/footer.php'); ?>
		<div id="page">  
		    	<section>
					<div class="midtfelt">
						<?php
							if (empty($errors) === false) {
							?><h2>Vi prøvde og logge deg inn men...</h2><?php
							echo output_errors($errors);
							}?>
					</div>		
				</section>
		</div>
	</body>
</html>



