<?php

// Renvoie la liste de tous les billets, tri�s par identifiant d�croissant
function getBillets() {
	$bdd = getBdd();
	$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
			. ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
			. ' order by BIL_ID desc');
	return $billets;
}

// Effectue la connexion � la BDD
// Instancie et renvoie l'objet PDO associ�
function getBdd() {
	$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8',
			'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $bdd;
}