<html>
<head>
    <meta charset="UTF-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <?php $con = new mysqli("localhost", "root", "", "dane3"); ?>
    <?php
        if(isset($_POST["nr"]) && !empty($_POST["nr"])){
            $sql = "DELETE FROM `produkty` WHERE `id` = '".$_POST["nr"]."';";
            $con->query($sql);
        }
    ?>
    <div class="banerLewy">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div class="banerPrawy">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    <div class="lista">
        <h3>Polecamy</h3>
        <?php
        $sql="SELECT `id`, `nazwa`, `ilosc`, `opis`, `zdjecie` FROM `produkty` WHERE `id`=18 or `id`=22 or `id`=23 or `id`=25;";
        $res = $con->query($sql);
        while($row = $res->fetch_assoc()){
            echo "
            <div class='film'>
                <h4>".$row["id"].". ".$row["nazwa"]."</h4>
                <img src='".$row["zdjecie"]."' alt='film'>
                <p>".$row["opis"]."</p>
            </div>            
          