<?php

namespace EsgiIw\TpDesignPattern\AlertContent;

abstract class AlertContent {
    protected $message;

    public function __construct($message) {
        $this->message = $message;
    }

    abstract public function getContent(): string;
}
