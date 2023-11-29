<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <?php
    $kata = "belajar <b><font color='red'>php</font></b>";
    $kata = 'belajar <b><font color="red">php</font></b>';
    $kata = "belajar <b style=\"margin:2px\"><font color=\"green\">php</font<>/b>";
    echo $kata;

    $angka1 = 10; $angka2= 2;
    echo "operator aritmatika:" .$angka1."&".$angka2;
    echo "<br> penjumlahan:" .$angka1 + $angka2;
    echo "<br> pengurangan:" .$angka1 - $angka2;
    echo "<br> perkalian:" .$angka1 * $angka2;
    echo "<br> pembagian:" .$angka1 / $angka2;
    echo "<br> perpangkatan:" .$angka1 ** $angka2;
    echo "<br> modulud:" .$angka1 % $angka2;

    echo $kata;

    ?>
    
</body>
</html>