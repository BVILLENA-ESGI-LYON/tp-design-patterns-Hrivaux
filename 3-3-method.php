<?php
declare(strict_types=1);

use EsgiIw\TpDesignPattern\EventRegistration\SportsEventRegistration;
use EsgiIw\TpDesignPattern\EventRegistration\BDEEventRegistration;

require_once 'vendor/autoload.php';

$participant = "John Doe";

$bdeEventRegistration = new BDEEventRegistration($participant);
$bdeEventRegistration->register();

$sportsEventRegistration = new SportsEventRegistration($participant);
$sportsEventRegistration->register();