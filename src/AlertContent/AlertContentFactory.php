<?php

namespace EsgiIw\TpDesignPattern\AlertContent;

use EsgiIw\TpDesignPattern\AlertContent\AlertContent;

interface AlertContentFactory {
    public function createEmailContent($message): AlertContent;
    public function createSmsContent($message): AlertContent;
}
