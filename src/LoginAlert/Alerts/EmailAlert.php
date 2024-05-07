<?php

namespace EsgiIw\TpDesignPattern\LoginAlert\Alerts;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;

class EmailAlert implements LoginAlertInterface {
    public function sendAlert(string $message) {
        echo "Envoi d'un mail aux administrateurs : $message\n";
    }
}
