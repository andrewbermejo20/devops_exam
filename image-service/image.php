<?php
$width = 4;
$height = 4;

$image = imagecreatetruecolor($width, $height);
for($row = 1; $row <= $height; $row++) {
    for($column = 1; $column <= $width; $column++) {
        $red = mt_rand(0,255);
        $green = mt_rand(0,255);
        $blue = mt_rand(0,255);
        $colour = imagecolorallocate($image, $red, $green, $blue);
        imagesetpixel($image, $column - 1, $row - 1, $colour);
    }
}

header('content-type: image/png');
header(sprintf('content-disposition: inline; filename="%s.png"', time()));
imagepng($image);
