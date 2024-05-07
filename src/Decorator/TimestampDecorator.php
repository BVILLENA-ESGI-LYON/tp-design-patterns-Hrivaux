<?php 
namespace EsgiIw\TpDesignPattern\Decorator;

class TimestampDecorator extends EventDecorator {
    public function execute() {
        echo "Ajout d'un horodatage avant d'exécuter l'événement\n";
        parent::execute();
        echo "Ajout d'un horodatage avant d'exécuter l'événement\n";
    }
}