<?php
    /**for ($i = 0; $i <= 2000; $i+= 2){
        if($i > 200 && $i < 800) continue;

        echo "$i </br>";
    }*/
    
echo '<select>';
    //Exemplo 2
for ($i=date("Y"); $i > date("Y") - 90 ; $i--) { 
    echo '<option value="' .$i.'">'.$i. '</option>';
}

echo '</select>';