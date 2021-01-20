<!DOCTYPE html>
<html lang="nl" dir="ltr">
    <head>
      <meta name="author" content="Mikail Köker">
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/woning.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <title>woningoverzicht.php</title>
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
    <?php
        if(isset($_POST['submitDeleteBtn'])){
            $link = mysqli_connect("localhost", "root", "", "makelaar");
            /* check connection */
            if ($link->connect_errno) {
                printf("Connect failed: %s\n", $link->connect_error);
                exit();
            }

            $key = $_POST['keyToDelete'];

            $check = mysqli_query($link,"select * from home where idHome = '$key'") or die("Not found");
            if(mysqli_num_rows($check)>0){
                 $queryDelete = mysqli_query($link,"DELETE from home where idHome = '$key'")
                 or die("Not deleted".mysqli_error());?>
                <div class="alert alert-succes"><p>Record deleted!</p></div>
          <?php  }
            else{
                ?>
                <div class="alert alert-warning"><p>Record does not exist!</p></div>
            <?php
            }
        }
    ?>
    <table>
        <thead>
        <tr>
            <th >Picture</th>
            <th >Area</th>
            <th >Price</th>
            <th >Floors</th>
            <th >Rooms</th>
            <th >Rent/Mortgage</th>
            <th >Select</th>
            <th >Delete</th>
        </tr>
        </thead>
    <?php
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
                                ");
    $homes->execute();
    foreach ($homes as $home) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td rowspan='7'><img src='{$home['image']}' width='270px' height='210px'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td rowspan='7'>" . $home["Area"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td rowspan='7'>" ."€ ". $home["Price"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td rowspan='7'>" . $home["aFloors"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td rowspan='7'>" . $home["aRooms"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td rowspan='7'>" . $home["Rent_Mortgage"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        ?>
        <form action='' method='post' role='form'>
        <?php
        echo "<td rowspan='7'><input type='checkbox' name='keyToDelete' value='{$home['idHome']}' required></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td rowspan='7'><input type='submit' name='submitDeleteBtn' value='Delete' class='btn btn-dark'></td>";
        echo "</tr>";
        echo "</tbody>";
        ?>
        </form>
        <?php
    }

         ?>
    </table>
    </body>
</html>