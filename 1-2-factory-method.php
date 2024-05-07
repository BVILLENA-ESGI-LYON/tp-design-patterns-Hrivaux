<?php

declare(strict_types=1);


require_once 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\LoginAlert\Factories\LogFileAlertFactory;
use EsgiIw\TpDesignPattern\LoginAlert\Factories\DatabaseTableAlertFactory;
use EsgiIw\TpDesignPattern\LoginAlert\Factories\EmailAlertFactory;

echo "Exécution du script 1-2-factory-method.php\n";

$fileLogFactory = new LogFileAlertFactory();
$databaseTableFactory = new DatabaseTableAlertFactory();
$emailFactory = new EmailAlertFactory();

$fileLogAlert = $fileLogFactory->createAlert();
$databaseTableAlert = $databaseTableFactory->createAlert();
$emailAlert = $emailFactory->createAlert();

$fileLogAlert->sendAlert("Connexion utilisateur : Tentative de connexion échouée");
$databaseTableAlert->sendAlert("Connexion utilisateur : Succès de connexion de l'utilisateur X");
$emailAlert->sendAlert("Connexion utilisateur : Nombre élevé de tentatives de connexion échouées");

echo "Fin de l'exécution du script\n";
