<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta name="author" content="Mikail Köker">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/woning.css">
    <title>woning_create2.php</title>
</head>
<body>
<h1>Huis toevoegen</h1>
<?php

$adres = $_POST["adresvak"];
$verdieping = $_POST["verdiepingvak"];
$kamer = $_POST["kamervak"];
$hoogte = $_POST["hoogtevak"];
$breedte = $_POST["breedtevak"];
$diepte = $_POST["dieptevak"];
$type = $_POST["typevak"];
$prijs = $_POST["prijsvak"];
$idhome = "NULL";
$image = $_POST["imagevak"];


require_once "woning_connect.php";

$sql = $db->prepare("
                              insert into home values
                              (
                                  :idHome, :aFloors, :aRooms,
                                  :Height, :Width, :Depth, :Area, :Rent_Mortgage, :Price, :image
                                )
                          ");

$sql->bindParam(":idHome", $idhome);
$sql->bindParam(":aFloors", $verdieping);
$sql->bindParam(":aRooms", $kamer);
$sql->bindParam(":Height", $hoogte);
$sql->bindParam(":Width", $breedte);
$sql->bindParam(":Depth", $diepte);
$sql->bindParam(":Area", $adres);
$sql->bindParam(":Rent_Mortgage", $type);
$sql->bindParam(":Price", $prijs);
$sql->bindParam(":image", $image);

$sql->execute();


echo "<p class='echo1'>De woning is toegevoegd </p><br />";
echo "<a href='woningoverzicht.php'><p class='echo1'> terug naar het menu </p></a>";
?>
</body>
</html>
