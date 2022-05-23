<html>
    <form action="" method="GET">

    <input type="number" min="0" max="10" value="0" name="numero" required>
    <button onclick="calcular()">Enter</button><br>

    </form>

    <?php
    error_reporting(0);
    $cont = 0;
    for($num = $_GET['numero']; $cont <=10; $cont++){
        echo "$num * $cont = ";
        echo  $num * $cont . '<br>';
    }
    ?>
</html>
