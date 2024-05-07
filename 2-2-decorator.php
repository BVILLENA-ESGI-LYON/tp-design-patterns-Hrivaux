<?php

require 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\Decorator\Event;
use EsgiIw\TpDesignPattern\Decorator\LoggingDecorator;
use EsgiIw\TpDesignPattern\Decorator\TimestampDecorator;
use EsgiIw\TpDesignPattern\Decorator\NotificationDecorator;

$event = new Event();
$event = new LoggingDecorator($event);
$event = new TimestampDecorator($event);
$event = new NotificationDecorator($event);

$event->execute();
