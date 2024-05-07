<?php

namespace EsgiIw\TpDesignPattern\AlertContent\Factories;

use EsgiIw\TpDesignPattern\AlertContent\AlertContentFactory;
use EsgiIw\TpDesignPattern\AlertContent\AlertContent;
use EsgiIw\TpDesignPattern\AlertContent\Contents\EmailAlertContent;
use EsgiIw\TpDesignPattern\AlertContent\Contents\SmsAlertContent;
use Exception;  


class EmailAlertContentFactory implements AlertContentFactory {
    public function createEmailContent($message): AlertContent {
        return new EmailAlertContent($message);
    }

    public function createSmsContent($message): AlertContent {
        throw new Exception('Impossible de créer du contenu SMS avec EmailAlertContentFactory');
    }
}

class SmsAlertContentFactory implements AlertContentFactory {
    public function createEmailContent($message): AlertContent {
        throw new Exception('Impossible de créer du contenu email avec SmsAlertContentFactory');
    }

    public function createSmsContent($message): AlertContent {
        return new SmsAlertContent($message);
    }
}
