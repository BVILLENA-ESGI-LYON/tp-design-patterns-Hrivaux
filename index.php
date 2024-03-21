<?php

require_once 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;

// Obtient l'instance unique de DbConnection
$dbConnection = DbConnection::getInstance();

// Affiche les informations sur l'instance de la connexion à la base de données
var_dump($dbConnection);
