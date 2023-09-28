<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="first" id="first"> +
        <input type="text" name="second" id="second">
        <input type="submit" name="sub" id="sub" value="submit">
    </form>
    <?php
    if (isset($_POST['sub'])) {
        
        $nombre1 = $_POST['first'];
        $nombre2 = $_POST['second'];

        $resultat = $nombre1 + $nombre2;

        echo "<p>Le résultat est : $resultat</p>";
    }
    ?>
</body>
</html>