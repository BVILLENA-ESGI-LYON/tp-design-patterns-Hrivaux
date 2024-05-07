<?php

namespace EsgiIw\TpDesignPattern\Observer;

class ConcreteSubject implements SubjectInterface {
    private $observers = [];

    public function attach(ObserverInterface $observer) {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function modifyEvent() {
        
        $this->notify();
    }
}