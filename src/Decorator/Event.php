<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class Event implements EventInterface {
    public function execute() {
        echo "Executing the event...\n";
    }
}