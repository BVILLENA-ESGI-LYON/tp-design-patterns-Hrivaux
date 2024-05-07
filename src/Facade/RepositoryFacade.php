<?php

namespace EsgiIw\TpDesignPattern\Facade;

use EsgiIw\TpDesignPattern\Repository\RepositoryInterface;

class RepositoryFacade {
    protected $repository;

    public function __construct(RepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function getById($id) {
        return $this->repository->getById($id);
    }

    public function getAll() {
        return $this->repository->getAll();
    }

    public function create(array $data) {
        return $this->repository->create($data);
    }

    public function update($id, array $data) {
        return $this->repository->update($id, $data);
    }

    public function delete($id) {
        return $this->repository->delete($id);
    }
}
