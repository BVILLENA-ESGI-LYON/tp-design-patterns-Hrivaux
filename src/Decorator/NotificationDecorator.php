<?php
namespace EsgiIw\TpDesignPattern\Decorator;

class NotificationDecorator extends EventDecorator {
    public function execute() {
        parent::execute();
        echo "Envoie de la notification...\n";
    }
}