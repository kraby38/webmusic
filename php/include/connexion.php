<?php
function connection()
{
	/*--------------------------------------------------- connexion base de donnée ---------------------------------------------------*/
	
	$link = mysqli_connect('localhost', 'root', '',"audio") //ligne de connexion a la base de donnée
		or die ("IMPOSSIBLE de se connecter :". mysql_error()); // ligne de test 	
	/*------------------------------------------------------- connexion table -------------------------------------------------------*/
	return ($link);
}
?>