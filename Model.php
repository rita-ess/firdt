<?php


//connexion à la base de données
function ouvrirConnexion(){
	return new PDO("mysql:host=localhost;dbname=smi2019", "root", "");
}


//liste de tous les étudiants
function listeEtudiants() {	
	return ouvrirConnexion()->query("select * from etudiants");
}



function chercherDetail($c) {	
	return ouvrirConnexion()->query("select * from etudiants where ID = '$c'");
}
