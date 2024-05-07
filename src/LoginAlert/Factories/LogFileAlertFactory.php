<?php

namespace EsgiIw\TpDesignPattern\LoginAlert\Factories;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;
use EsgiIw\TpDesignPattern\LoginAlert\Alerts\LogFileAlert;
use EsgiIw\TpDesignPattern\LoginAlert\LoginAlertFactory;



class LogFileAlertFactory extends LoginAlertFactory {
    public function createAlert(): LoginAlertInterface {
        return new LogFileAlert();
    }
}
