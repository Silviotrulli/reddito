<?php
$reg = "";
$com = "";

if(isset($_POST["reddito"])) {
    $reddito = $_POST["reddito"];

    $reg = $reddito * 0.0123;
    $com = $reddito * 0.008;
}
//variabile css
$bootstrap = "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>";
//variabile js
$jsbootstrap = "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js' integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI' crossorigin='anonymous'></script>";

echo $bootstrap;
echo $jsbootstrap;
?>

<html>

<head>
    <title>Calcolo tasse</title>

   
</head>

<body>


        <h4>Calcolo addizionali</h4>

        <form method="post">
            <label>Reddito:</label>
            <input type="number" name="reddito" class="form-control">

            <br>

            <br>
            <button class="btn btn-primary">Calcola</button>
        </form>

        <?php
        if($reg != "") {
            echo "<label>reddito:</label>
        >";
            echo "Regionale: " . number_format($reg,2) . " €<br>";
            echo "Comunale: " . number_format($com,2) . " €";
            echo "</div>";
        }
        ?>

    </div>
</div>

</body>
</html>
