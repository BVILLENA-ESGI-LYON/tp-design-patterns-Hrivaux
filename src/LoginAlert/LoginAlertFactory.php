<?php
namespace EsgiIw\TpDesignPattern\LoginAlert;

use EsgiIw\TpDesignPattern\LoginAlert\Interfaces\LoginAlertInterface;

abstract class LoginAlertFactory {
    abstract public function createAlert(): LoginAlertInterface;
}
