<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Książka kucharska</title>
</head>

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ksiazkakucharska";

$connection = mysqli_connect($host, $user, $password) or die('Błąd podczas połączenia z serwerem<br> Błąd: ' . mysqli_error());
// echo "Udało się połączyć z serwerem<br>";
$selection = mysqli_select_db($connection, $database) or die('Błąd podczas połączenia z bazą danych<br> Błąd: ' . mysqli_error());
// echo "Udało się połączyć z bazą danych<br>";

$id = microtime(true);
$nazwa = $_POST['nazwa'];
$krotki_opis = $_POST['krotki_opis'];

$sql = mysqli_query($connection, "INSERT INTO przepisy SET id='$id', nazwa='$nazwa', krotki_opis='$krotki_opis'") or die('Błąd podczas dodawania przepisu do bazy danych');
// echo "Udało się pomyślnie dodać przepis do bazy danych<br>";
$disconnection = mysqli_close($connection) or die('Błąd podczas rozłączania z serwerem<br> Błąd: ' . mysqli_error());

echo 

<div class="container">

        <h1 class="mb-4">OSTATNIO DODANE PRZEPISY</h1>

        <div class="card mt-4">

            <div class="card-body">
                <h4 class="card-title">PRZEPIS ZOSTAŁ POMYŚLNIE DODANY</h4>
                <a href="index.php" class="btn btn-success">POWRÓT DO LISTY NAJNOWSZYCH PRZEPISÓW</a>
                <a href="add.html" class="btn btn-danger">DODAJ KOLEJNY PRZEPIS</a>
            </div>
        </div>

    </div>';

?>

<!-- echo 'Udało się rozłączyć z serwerem<b>' -->


