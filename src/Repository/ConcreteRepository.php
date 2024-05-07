<?php

namespace EsgiIw\TpDesignPattern\Repository;

class ConcreteRepository implements RepositoryInterface {
    private $data = [];

    public function getById($id) {
        return isset($this->data[$id]) ? $this->data[$id] : null;
    }

    public function getAll() {
        return $this->data;
    }

    public function create(array $data) {
        $newId = count($this->data) + 1;
        $this->data[$newId] = $data;
        return $newId;
    }

    public function update($id, array $data) {
        if (isset($this->data[$id])) {
            $this->data[$id] = $data;
            return true;
        } else {
            return false; 
        }
    }

    public function delete($id) {
        if (isset($this->data[$id])) {
            unset($this->data[$id]);
            return true;
        } else {
            return false; 
        }
    }
}
