<?php
include_once __DIR__ . '/classes/Smartphone.php';
include_once __DIR__ . '/classes/Computer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP e OOP 2: Ereditarietà</title>
</head>
<body>
<h1 class='title'>Prodotti</h1>

<p class='text'><?php echo "{$smartphone->print()} {$smartphone->memoria} {$smartphone->color}" ?></p>
<p class='text'><?php echo $smartphone2->print() . ' ' . $smartphone2->memoria . ' ' . $smartphone2->color ?></p>
<p class='text'><?php echo $computer->print() ?></p>


</body>
</html>
