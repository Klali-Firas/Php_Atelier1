<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parite</title>
</head>
<body>
    <form method="post">
        <input type="text" name="inp" id="inp">
        <input type="submit" name="sub" id="sub">
    </form>
    <?php
        if(isset($_POST['sub'])){
            $num=$_POST['inp'];
            $res=$num%2==0?"paire":"impaire";
            echo "<p>$num</p>";
            echo ("<p>".$num ." est ".$res."</p>");
        }
    ?>
</body>
</html>