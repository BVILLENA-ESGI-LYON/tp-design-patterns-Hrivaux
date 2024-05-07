<?php

namespace EsgiIw\TpDesignPattern\LoginAlert\Alerts;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;

class LogFileAlert implements LoginAlertInterface {
    public function sendAlert(string $message) {
        echo "Ecriture dans un fichier de log : $message\n";
    }
}
