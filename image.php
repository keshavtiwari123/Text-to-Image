<?php
if(isset($_GET['text']) && !empty($_GET['text']))
{
	$tex = $_GET['text'];
}
else
{
	$tex = "PLEASE ENTER SOME TEXT";
}
$r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];
$font = 5;
$text = trim($tex);
$height = imagefontheight($font);
$width = $height*strlen($text)*0.6;
$im = imagecreate($width , $height);
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, $r, $g, $b);
imagestring($im, $font, 0, 0, $text, $textcolor);
header('content-type: image/png');
imagepng($im);
imagedestroy($im);
?>