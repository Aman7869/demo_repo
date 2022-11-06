<?php

session_start();

$captcha = rand(1000, 9999);

$_SESSION["captcha"] = $captcha;

// Generate a 50x24 standard captcha image
$im = imagecreatetruecolor(50, 24);


// $bg = imagecolorallocate($im, 22, 86, 165);
$bg = imagecolorallocate($im, 225, 225, 225);

$fg = imagecolorallocate($im, 0, 0, 0);

// Give the image a blue background
imagefill($im, 0, 0, $bg);


imagestring($im, rand(1, 7), rand(1, 7),
			rand(1, 7), $captcha, $fg);

header("Cache-Control: no-store,
			no-cache, must-revalidate");

// The PHP-file will be rendered as image
header('Content-type: image/png');

imagepng($im);

imagedestroy($im);
?>
