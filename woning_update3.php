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
$floor = $_POST["floorsvak"];
$room = $_POST["roomsvak"];
$height = $_POST["heightvak"];
$width = $_POST["widthvak"];
$depth = $_POST["depthvak"];
$area = $_POST["areavak"];
$rent = $_POST["rentvak"];
$price = $_POST["pricevak"];
$image = $_POST["imagevak"];

require_once "woning_connect.php";

$sql = $db->prepare("
          update home set    idHome = :idHome,
                              aFloors = :aFloors,
                              aRooms = :aRooms,
                              Height = :Height,
                              Width = :Width,
                              Depth = :Depth,
                              Area = :Area,
                              Rent_Mortgage = :Rent_Mortgage,
                              Price = :Price,
                              image = :image
                              where   idHome = :idHome
      ");

$sql->execute([
    "idHome" => $idhome,
    "aFloors" => $floor,
    "aRooms" => $room,
    "Height" => $height,
    "Width" => $width,
    "Depth" => $depth,
    "Area" => $area,
    "Rent_Mortgage" => $rent,
    "Price" => $price,
    "image" => $image
]);

echo "<p class='echo1'>Het huis is geupdate.</p> <br />";
echo "<a href='woningoverzicht.php'><p class='echo1'> terug naar het overzicht</p> </a>";
?>

</body>
</html>

