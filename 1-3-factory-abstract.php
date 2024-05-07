<?php

namespace EsgiIw\TpDesignPattern;

use EsgiIw\TpDesignPattern\AlertContent\Factories\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\AlertContent\Factories\SmsAlertContentFactory;

$emailFactory = new EmailAlertContentFactory();
$emailContent = $emailFactory->createEmailContent('Le compte utilisateur a été validé.');
echo $emailContent->getContent() . "\n"; 

$smsFactory = new SmsAlertContentFactory();
$smsContent = $smsFactory->createSmsContent('Inscription à l\'événement confirmée.');
echo $smsContent->getContent() . "\n";

$emailFactory = new EmailAlertContentFactory();
$emailContent = $emailFactory->createEmailContent('Rappel : Votre événement aura lieu demain !');
echo $emailContent->getContent() . "\n"; 

