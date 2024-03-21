<?php

namespace EsgiIw\TpDesignPattern\Model\Database;

class DbConnection
{
    private static ?DbConnection $instance = null;

    public static function getInstance(): static
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct() {
        // Connexion DB
    }
}