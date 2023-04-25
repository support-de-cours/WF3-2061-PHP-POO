<?php 
$fruits = [
    "Pommes",
    "Poires",
    "Bananes",
    "Kiwis",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php foreach($fruits as $fruit): ?>
        <li><?= $fruit ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>