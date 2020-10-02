<?php
	
	$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

	$conteudo = file_get_contents($link); // funcao file_gers_contents n retornou nada

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename,"w+");

	fwrite($file, $conteudo);

	fclose($file);
?>

<img src="<?=$basename?>">