<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="author" content="Mikail Köker">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/woning.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>woning_update.php</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="woningoverzicht.php">MAKELAAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto topnav">
            <li class="nav-item">
                <a class="nav-link" href="woningoverzicht.php">Overzicht</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="woning_create.php">Huis toevoegen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="woning_update.php">Huis updaten</a>
            </li>
        </ul>
    </div>
</nav>

<h1>Woning updaten</h1>
<?php
$idhome = $_POST["idvak"];

require_once "woning_connect.php";

$homes = $db->prepare("
                                  select idHome,
                                         aFloors,
                                         aRooms,
                                         Height,
                                         Width,
                                         Depth,
                                         Area,
                                         Rent_Mortgage,
                                         Price,
                                         image
                                  from   home
                                  where  idHome = :idHome
                              ");
$homes->execute(["idHome" => $idhome]);


echo "<form action='woning_update3.php' method='post'>";
foreach ($homes as $home) {

    echo "<div class='box'>";
    echo " idHome: " . $home["idHome"] . "<br />";
    echo " <input type='hidden' name='idvak' ";
    echo " value=' " . $home["idHome"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " aFloors: <input type='text' ";
    echo " name = 'floorsvak' ";
    echo " value=' " . $home["aFloors"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " aRooms: <input type='text' ";
    echo " name = 'roomsvak' ";
    echo " value=' " . $home["aRooms"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " Height: <input type='text' ";
    echo " name = 'heightvak' ";
    echo " value=' " . $home["Height"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " Width: <input type='text' ";
    echo " name = 'widthvak' ";
    echo " value=' " . $home["Width"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " Depth: <input type='text' ";
    echo " name = 'depthvak' ";
    echo " value=' " . $home["Depth"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " Area: <input type='text' ";
    echo " name = 'areavak' ";
    echo " value=' " . $home["Area"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " Rent_Mortgage: <input type='text' ";
    echo " name = 'rentvak' ";
    echo " value=' " . $home["Rent_Mortgage"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " Price: <input type='text' ";
    echo " name = 'pricevak' ";
    echo " value=' " . $home["Price"] . "' ";
    echo "> <br />";

    echo "<div class='inputbox'>";
    echo " image: <input type='text' ";
    echo " name = 'imagevak' ";
    echo " value=' " . $home["image"] . "' ";
    echo "> <br />";
}
echo "<input type='submit' class='btn btn-dark'>";
echo "</form>";
echo "</div>";

?>

</body>
</html>
