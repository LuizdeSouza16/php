<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image ,0 ,0 ,0);

$grey  = imagecolorallocate($image ,100 ,100 ,100);

imagettftext($image, 32,0, 450, 150, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan-regular.ttf" ,"Certificado" );
imagestring($image, 5 , 440, 350, "Oficial" , $titleColor);
imagestring($image, 3 , 440, 370, "Concluido em. ".date("d-m-Y") , $titleColor);

header("Content-Type: image/png");

imagejpeg($image);
imagedestroy($image);

?>