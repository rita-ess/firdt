<?php


//connexion � la base de donn�es
function ouvrirConnexion(){
	return new PDO("mysql:host=localhost;dbname=smi2019", "root", "");
}


//liste de tous les �tudiants
function listeEtudiants() {	
	return ouvrirConnexion()->query("select * from etudiants");
}



function chercherDetail($c) {	
	return ouvrirConnexion()->query("select * from etudiants where ID = '$c'");
}
