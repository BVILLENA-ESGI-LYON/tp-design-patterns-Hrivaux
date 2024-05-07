<?php

require 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\Observer\ConcreteSubject;
use EsgiIw\TpDesignPattern\Observer\ConcreteObserver;

$subject = new ConcreteSubject();

$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();

$subject->attach($observer1);
$subject->attach($observer2);

$subject->modifyEvent();