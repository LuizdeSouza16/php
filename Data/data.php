<?php
	
	echo date("d/m/Y H:i:s");
	echo "<br>";
	echo time();
	echo "<br>";

	$ts =  strtotime("+1 we");

	echo date("d/m/Y H:i:s", $ts);
?>