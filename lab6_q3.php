<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
</head>
<body>
    
<?php

function calculateArea($width, $height) {
    $area = $width*$height;
    return $area;
}

$width = 4;
$height = 2;

$result = calculateArea($width, $height);

echo "The area of a rectangle with $width and $height is $result";


?>
</body>
</html>