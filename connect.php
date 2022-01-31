<?php
	//Przykładowa składnia połączenia z bazą danych dla PHP i MySQL.
	
	//Łączenie z bazą danych
	
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ksiazkakucharska";
	$usertable="przepisy";
	$yourfield = "id";
	
	$mysqli_connect=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Nie można nawiązać połączenia z bazą danych! Spróbuj ponownie później.'),history.go(-1)/script>/html>");
	mysqli_select_db($mysqli_connect, $dbname);
	
	# Sprawdź, czy dany rekord istnieje
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Nazwa: ".$name."br/>";
		}
	}
?>