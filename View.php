<?php
function afficherVue($file,array $data=array()){

	if (file_exists("Views/".$file.".php")) {
				
				extract($data);
				ob_start();
				require ("Views/".$file.".php");
				$page = ob_get_clean();
				include ("Views/template.php");
	}
	else {
				throw new Exception("Fichier '$file.php' introuvable");
	}
}
		
	