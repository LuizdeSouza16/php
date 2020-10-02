<?php 


$file = fopen("arquivo.txt", "w+");

fclose($file);

unlink("arquivo.txt");


echo "arquivo removido!"; 

?>