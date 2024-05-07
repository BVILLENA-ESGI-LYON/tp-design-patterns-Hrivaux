<?php

namespace EsgiIw\TpDesignPattern\AlertContent\Factories;


use EsgiIw\TpDesignPattern\AlertContent\AlertContentFactory;
use EsgiIw\TpDesignPattern\AlertContent\Contents\EmailAlertContent;
use EsgiIw\TpDesignPattern\AlertContent\Factories\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\AlertContent\AlertContent;
use EsgiIw\TpDesignPattern\AlertContent\Contents\SmsAlertContent;
use Exception;  


class SmsAlertContentFactory implements AlertContentFactory {

    /**
     * Creates an SMS alert content object.
     *
     * @param string $message 
     * @return SmsAlertContent 
     */
    public function createEmailContent($message): AlertContent
    {
        throw new Exception('Impossible de créer du contenu email avec SmsAlertContentFactory');
    }

    /**
     * Creates an SMS alert content object.
     *
     * @param string $message .
     * @return SmsAlertContent 
     */
    public function createSmsContent($message): AlertContent
    {
        return new SmsAlertContent($message);
    }
}
