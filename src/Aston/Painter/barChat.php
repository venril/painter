<?php
namespace Aston\Painter;
// Get random data
function getRandScore($nb = 10) {
    $data = array();
    for ($i = 0; $i < $nb; $i++) {
        $data[] = rand(5, 299);
    }
    return $data;
}

// Canvas
$canvasWidth = 600;
$canvasHeight = 400;

// Bars
$barWidth = 23;
$barGutter = 10;

// Data
$scores = getRandScore(10);
$nbBar = count($scores);
$sizeBars = ($barWidth + $barGutter) * $nbBar;
$currX = ($canvasWidth/2) - ($sizeBars/2) + ($barGutter/2);

// Image
$img = imagecreatetruecolor($canvasWidth, $canvasHeight);
$bgColor = imagecolorallocate($img, 255, 255, 255);
$barColor = imagecolorallocate($img, 100, 240, 200);

imagefilledrectangle($img, 0, 0, $canvasWidth, $canvasHeight, $bgColor);

// Generate
foreach ($scores as $score) {
    imagefilledrectangle(
        $img,
        $currX,
        $canvasHeight-$score,
        $currX+$barWidth,
        $canvasHeight,
        $barColor
    );
    $currX += $barWidth + $barGutter;
}

// Output
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
    