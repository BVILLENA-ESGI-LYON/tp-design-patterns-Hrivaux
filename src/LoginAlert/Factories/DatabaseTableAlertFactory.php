<?php

namespace EsgiIw\TpDesignPattern\LoginAlert\Factories;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;
use EsgiIw\TpDesignPattern\LoginAlert\Alerts\DatabaseTableAlert;
use EsgiIw\TpDesignPattern\LoginAlert\LoginAlertFactory;

class DatabaseTableAlertFactory extends LoginAlertFactory {
    public function createAlert(): LoginAlertInterface {
        return new DatabaseTableAlert();
    }
}
