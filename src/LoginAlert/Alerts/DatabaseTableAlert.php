<?php

namespace EsgiIw\TpDesignPattern\LoginAlert\Alerts;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;

class DatabaseTableAlert implements LoginAlertInterface {
    public function sendAlert(string $message) {
        echo "Enregistrement dans une table de la base de données : $message\n";
    }
}
