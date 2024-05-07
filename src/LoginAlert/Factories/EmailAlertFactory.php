<?php

namespace EsgiIw\TpDesignPattern\LoginAlert\Factories;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;
use EsgiIw\TpDesignPattern\LoginAlert\Alerts\EmailAlert;
use EsgiIw\TpDesignPattern\LoginAlert\LoginAlertFactory;


class EmailAlertFactory extends LoginAlertFactory {
    public function createAlert(): LoginAlertInterface {
        return new EmailAlert();
    }
}
