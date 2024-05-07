<?php

namespace EsgiIw\TpDesignPattern\AlertContent\Contents;

use EsgiIw\TpDesignPattern\AlertContent\AlertContent;

class EmailAlertContent extends AlertContent {
    public function getContent(): string {
        return "<p>{$this->message}</p>";
    }
}

class SmsAlertContent extends AlertContent {
    public function getContent(): string {
        return "{$this->message}";
    }
}
