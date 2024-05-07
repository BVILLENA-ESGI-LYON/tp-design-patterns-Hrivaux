<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\EventRegistration;

abstract class EventRegistration
{
    final public function register()
    {
        $this->validateRegistration();
        $this->reservePlace();
        $this->sendConfirmation();
    }

    abstract protected function validateRegistration();

    protected function reservePlace()
    {
        echo "Place réservée.\n";
    }

    protected function sendConfirmation()
    {
        echo "Confirmation d'inscription envoyée.\n";
    }
    
}