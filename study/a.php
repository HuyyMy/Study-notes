<?php

$data = file_get_contents('timg.bmp');
$ret = unpack('v/Vsize/v/v/VpixelStart/V/Vwidth/Vheight/v/vbytePerPixel/V*6', substr($data, 0x0, 54));
$size = $ret['size'];
$offset = $ret['pixelStart'];
$width = $ret['width'];
$height = $ret['height'];
$bitDepth = $ret['bytePerPixel'];

$pixelLenPerChar = 4;
$charImgWidth = (int) ($width / $pixelLenPerChar);
$charImgHeight = (int) ($height / $pixelLenPerChar);

for ($i = 0; $i !== $charImgHeight; $i++) {
    $buf = '';
    for ($j = 0; $j !== $charImgWidth; $j++) {
        $sum = 0;
        for ($k = 0; $k !== $pixelLenPerChar; $k++) {
            for ($l = 0; $l !== $pixelLenPerChar; $l++) {
                $sum += getPixelColor($pixelLenPerChar * $i + $k, $pixelLenPerChar * $j + $l);
            }
        }
        $sum = (int) ($sum / $pixelLenPerChar / $pixelLenPerChar);
        $buf = getChar($sum) . $buf;
    }
    echo $buf . PHP_EOL;
}

function getPixelColor($x, $y) {
    global $width, $size, $data;
    $b = ord($data[$size - 3 * ($width * $x + $y) - 3]);
    $g = ord($data[$size - 3 * ($width * $x + $y) - 2]);
    $r = ord($data[$size - 3 * ($width * $x + $y) - 1]);
    return (min($r, $g, $b) + max($r, $g, $b)) >> 1;
}

function getChar($colorValue) {
    $map = '@#mdohsy+/-:.` ';
    return $map[(int) ($colorValue / 18)];
}
