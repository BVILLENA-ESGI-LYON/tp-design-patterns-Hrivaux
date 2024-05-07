<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\EventRegistration;

use EsgiIw\TpDesignPattern\EventRegistration\EventRegistration;

final class SportsEventRegistration extends EventRegistration
{
    private $participant;

    public function __construct(string $participant)
    {
        $this->participant = $participant;
    }

    protected function validateRegistration()
    {
        echo "Vérification du certificat médical pour {$this->participant}.\n";
    }

    protected function reservePlace()
    {
        echo "Place réservée pour {$this->participant}.\n";
    }

    protected function sendConfirmation()
    {
        echo "Confirmation d'inscription envoyée à {$this->participant}.\n";
    }
}