<?php

namespace EsgiIw\TpDesignPattern\Observer;

class ConcreteObserver implements ObserverInterface {
    public function update() {
        echo "L'événement a été modifié. Mettre à jour les données...\n";
    }
}