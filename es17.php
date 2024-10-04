<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = rand(10,20);
        $stmp = "<ol>";
        $lista = [];
        $colori = array("red","green","blue","yellow","aquamarine");
        for($i = 0; $i<= $num; $i++) {
            $color = $colori[rand(0,4)];
            $lista[] = $i;
            $stmp = $stmp . "<li style='color : $color'>($i)</li>";
        }
        echo $stmp . "</ol>";
    ?>
</body>
</html>