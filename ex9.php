<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="inp" id="inp">
        <input type="submit" name="sub" id="sub">
    </form>
    <?php
        if(isset($_POST['sub'])){
            $num=$_POST['inp'];
            $res=($num%3==0 AND $num%5==0)? "est multiple":"n'est pas multiple";
            echo "<p>$num $res de 3 et 5.</p>";
        }
    ?>
    
</body>
</html>