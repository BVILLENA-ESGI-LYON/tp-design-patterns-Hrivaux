<?php
namespace EsgiIw\TpDesignPattern\Decorator;


class LoggingDecorator extends EventDecorator {
    public function execute() {
        echo "Connexion...\n";
        parent::execute();
        echo "Connexion...\n";
    }
}