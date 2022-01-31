<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ksiazkakucharska";

$connection = mysqli_connect($host, $user, $password) or die('Błąd podczas połączenia z serwerem<br> Błąd: ' . mysqli_error());
echo "Udało się połączyć z serwerem<br>";
$selection = mysqli_select_db($connection, $database) or die('Błąd podczas połączenia z bazą danych<br> Błąd: ' . mysqli_error());
echo "Udało się połączyć z bazą danych<br>";

$tytul = $_POST['tytul'];
$tresc = $_POST['tresc'];

$sql = mysqli_query($connection, "INSERT INTO przepisy SET tytul='$tytul', tresc='$tresc'");

$disconnection = mysqli_close($connection) or die('Błąd podczas rozłączania z serwerem<br> Błąd: ' . mysqli_error());
echo "Udało się rozłączyć z serwerem<br>";
