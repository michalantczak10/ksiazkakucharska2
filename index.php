<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Książka kucharska</title>
</head>

<body>

    <?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ksiazkakucharska";

$connection = mysqli_connect($host, $user, $password) or die('Błąd podczas łączenia z serwerem<br> Błąd: ' . mysqli_error());
echo "Udało się połączyć z serwerem<br>";
$selection = mysqli_select_db($connection, $database) or die('Błąd podczas łączenia z bazą danych<br> Błąd: ' . mysqli_error());
echo "Udało się połączyć z bazą danych<br>";
$wynik = $connection->query("SELECT * FROM przepisy") or die('Błąd podczas pobierania przepisów z dazy danych<br> Błąd: ' . mysqli_error());

echo '<div class="container">';
echo '<h1 class="mb-4">OSTATNIO DODANE PRZEPISY</h1>';
echo '<a href="add.html" class="btn btn-success">DODAJ NOWY PRZEPIS</a>';

if ($wynik->num_rows > 0) {
    while ($wiersz = $wynik->fetch_assoc()) {
        echo '<div class="card mt-4">';
        echo '<div class="card-body">';
        echo '<h4 class="card-title">' . $wiersz["nazwa"] . '</h4>';
        echo '<div class="card-subtitle text-muted mb-2">DATA DODANIA ' . $wiersz["data_dodania"] . '</div>';
        echo '<div class="card-text mb-2">' . $wiersz["krotki_opis"] . '</div>';
        echo '<a href="articles/<%= article.slug %>" class="btn btn-primary">WIĘCEJ SZCZEGÓŁÓW</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo ("Brak przepisów w bazie danych");
}

echo '</div>';

// $tytul = $_POST['nazwa'];
// $tresc = $_POST['skladniki'];

// $sql = mysqli_query($connection, "INSERT INTO przepisy SET nazwa='$tytul', skladniki='$tresc'") or die('Błąd podczas dodawania przepisu do bazy danych');
// echo "Udało się pomyślnie dodać przepis do bazy danych<br>";

$disconnection = mysqli_close($connection) or die('Błąd podczas rozłączania z serwerem<br> Błąd: ' . mysqli_error());
echo "Udało się rozłączyć z serwerem<b>"

?>

</body>
</html>