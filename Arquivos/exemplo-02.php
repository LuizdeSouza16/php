<?php 

$images = scandir("images");

$data = array();

foreach ($images as $img) {
	if(!in_array($img, array(".", ".."))){
		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);

		$info['size'] = filesize($filename);
		$info['modified'] = date("d/m/Y h:i:s", filemtime($filename));
		$info['url'] = "http://localhost/CursoPhp/Arquivos/".$filename;
		array_push($data , $info); 
	}
}

var_dump($data);

?>