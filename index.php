<?php

require("Model.php");
require("View.php");
require("Controller.php");



try{
	$action = (!empty($_GET["action"]))? $_GET["action"]: "";
	//action liste
	if ($action=='Detail') {
		detailAction();
	}
	else {
		listeAction();
	}

}
catch(Exception $e) {
	$data["errorMessage"]=$e->getMessage();
	afficherVue("vError", $data);

}
	