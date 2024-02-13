<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link href="styl6.css" rel="stylesheet">
</head>
<body>
    <div class="baner1">
        <h2>MÓJ ORGANIZER</h2>
    </div>
    <div class="baner2">
        <form action="organizer.php" method="post">
            Wpis wydarzenia: <input type="text" name="txt">
            <input type="submit" value="ZAPISZ">
        </form>
    </div>
    <div class="baner3">
        <img src="logo2.png" alt="Mój organizer">
    </div>
    <div class="główny">
        <?php
        $lacz = mysqli_connect('localhost','root','','egzamin6');
        $pyt = "SELECT `dataZadania`,`miesiac`,`wpis` FROM `zadania` WHERE `miesiac` = 'sierpien';";
        $wyn = mysqli_query($lacz, $pyt);
        while($row = mysqli_fetch_array($wyn)){
            echo '<div class="dane">';
            echo "<h6>".$row[0].", ".$row[1]."</h6>";
            echo "<p>".$row[2]."</p>";
            echo "</div>";
        }
        mysqli_close($lacz);
        ?>
    </div>
    <div class="stopka">
        <?php
        $lacz = mysqli_connect('localhost','root','','egzamin6');
        $pyt = "SELECT `miesiac`,`rok` FROM `zadania` WHERE `dataZadania` ='2020-08-01';";
        $wyn = mysqli_query($lacz, $pyt);
        while($row = mysqli_fetch_array($wyn)){
            echo "<h1>miesiąc: ".$row[0].", rok: ".$row[1]."</h1>";
        }
        mysqli_close($lacz);
        ?>
        <p>Stronę wykonał: Martyna Borowska</p>
    </div>
</body>
</html>
<?php
        $txt = $_POST['txt'];
        $lacz = mysqli_connect('localhost','root','','egzamin6');
        $pyt = "UPDATE `zadania` SET `wpis`='$txt' WHERE `dataZadania` = '2020-08-27';";
        $wyn = mysqli_query($lacz, $pyt);
        mysqli_close($lacz);
        ?>