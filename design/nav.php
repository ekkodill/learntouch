<!--Denne siden er utviklet av Kurt A. Amodt og Dag-Roger Eriksen,. siste gang endret 02.03.2014
Denne siden er kontrollert av Erik Bjørnflaten siste gang 26.04.2014  !-->

<?php include("mail.php"); ?>
<?php include("settings.php"); ?>
 <nav>
 	<?php if(logged_in() === true) { echo "<div class='loggetInnSom'><a href='minside.php'>".$user_data['fornavn'] ." ". $user_data['etternavn']."</a></div>"; 
		
 	}
 	if($user_data['brukertype'] != 3) {
 		echo "<a style='float:left;margin-right:20px;' href='#settings'><img src='img/settings.png' alt='Epost innstillinger' title='Epost innstillinger'></a>
 		<a style='width: 32px;float:left;' href='#sendmail'><img src='img/mail.png' alt='Send epost' title='Send epost'></a><br>";
 		echo "<br><a href='oppgave.php'>Ny oppgave</a>"; 	 
 		}
 	if($user_data['brukertype'] != 2 && $user_data['brukertype'] != 1) {
 		echo "<a href='minside.php'>Min side</a>";
 	}
 		 ?>
 		
        <a href="vis_brukere.php">Medlemsliste</a>
		<a href="skriv.php">Skrivesenter</a>
        <a href="profil.php">Min Profil</a><br>
       <div class="skille"> <div class="knappHoyre"><a href="logout.php">Logg ut</a></div>
        </div>
    </ul>
</nav> 





