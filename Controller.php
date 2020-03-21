<?php

function listeAction() {
	$data["etudiants"] = listeEtudiants();	
	afficherVue("vListe",$data);
}

function detailAction(){
    $data["etudiant"] = chercherDetail($_GET["code"]);
    afficherVue("vDetail",$data);
}



