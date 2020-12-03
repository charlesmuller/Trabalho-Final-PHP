<?php 
$login=$_POST['nome'];

//Carregando fontes TrueType

//imagecreatefromjpeg(filename)
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$font1= realpath('BevanRegular.ttf');
$font2= realpath('PlayballRegular.ttf');
//imagettftext(image, size, angle, x, y, color, fontfile, text)

imagettftext($image, 32, 0, 320, 250, $titleColor,$font1,"CERTIFICADO");
imagettftext($image, 32, 0, 320, 300, $titleColor,$font1,"Curso de PHP");
imagettftext($image, 32, 0, 420, 350, $titleColor,$font2,"$login");

imagestring($image, 3, 400, 370, utf8_decode("Concluído em: ").date("d/m/Y"),$titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);
imagejpeg($image, "certificado-".date("Y-m-d").".jpg");

imagedestroy($image);
?>