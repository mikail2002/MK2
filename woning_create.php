<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta name="author" content="Mikail Köker">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/woning.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>woning_create.php</title>
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
    <h1>Huis toevoegen</h1>
        <p>Vul hieronder de benodigde gegevens in</p>
<div class="box">
    <form action="woning_create2.php" method="post">
            <div class="inputbox">
                <input class="" type="text" name="adresvak" required="">
                <label>Adres</label>
            </div>
            <div class="inputbox">
                <input type="text" name="verdiepingvak" required="">
                <label>Verdiepingen</label>
            </div>
            <div class="inputbox">
                <input type="text" name="kamervak" required="">
                <label>Aantal kamers</label>
            </div>
            <div class="inputbox">
                <input type="text" name="hoogtevak" required="">
                <label>Hoogte</label>
            </div>
            <div class="inputbox">
                <input type="text" name="breedtevak" required="">
                <label>Breedte</label>
            </div>
             <div class="inputbox">
                 <input type="text" name="dieptevak" required="">
                 <label>Diepte</label>
             </div>
             <div class="inputbox">
                  <input type="text" name="typevak" required="">
                  <label>Huur/Koop</label>
             </div>
            <div class="inputbox">
                <input type="text" name="prijsvak" required="">
                <label>Prijs</label>
            </div>
            <div class="inputbox">
                <input type="text" name="imagevak" required="">
                <label>Photo</label>
            </div>
            <input class="btn btn-dark" type="submit">
    </form>
</div>
</body>
</html>