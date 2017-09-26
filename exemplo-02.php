<?php

if(!is_dir("images")) //se nao existir a pasta images ele cria a pasta
	mkdir("images");

foreach (scandir("images") as $item) { //percorre a pasta images 
	
	if(!in_array($item, array(".",".."))){

		unlink("images/".$item);
	}
}

echo "Ok";


?>