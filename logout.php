<?php
//Denne siden er utviklet av Kurt A. Aamodt, siste gang endret 03.03.2014
//Denne siden er kontrollert av Erik Bjørnflaten siste gang 31.05.2014  

//Brukes for utlogging av brukere.
session_start();
session_destroy();
header('Location: default.php');
?>