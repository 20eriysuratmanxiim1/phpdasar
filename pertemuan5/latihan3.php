<?php
    $siswa = [
        ["Eriy", " 1914430", "Multimedia", "eriysuratman@gmail.com"],
        ["Feriy", " 1914431", "Teknik Mesin", "feriysuratno@gmail.com"],
        ["Ricky", " 1914432", "Desain", "rickyramdhani@gmail.com"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <?php foreach ($siswa as $ssw) :?>
        <ul>
        <li>Siswa : <?= $ssw[0]; ?></li>
        <li>NIS : <?= $ssw[1]; ?></li>
        <li>Jurusan : <?= $ssw[2]; ?></li>
        <li>Email : <?= $ssw[3]; ?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>