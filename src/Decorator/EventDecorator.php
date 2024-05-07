<?php
namespace EsgiIw\TpDesignPattern\Decorator;

abstract class EventDecorator implements EventInterface {
    protected $event;

    public function __construct(EventInterface $event) {
        $this->event = $event;
    }

    public function execute() {
        $this->event->execute();
    }
}