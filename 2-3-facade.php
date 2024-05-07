<?php

require 'vendor/autoload.php';

use EsgiIw\TpDesignPattern\Repository\ConcreteRepository;
use EsgiIw\TpDesignPattern\Facade\RepositoryFacade;

$repository = new ConcreteRepository();

$facade = new RepositoryFacade($repository);


$entite = $facade->getById(1);
echo "Entité avec l'ID 1 : " . json_encode($entite) . "\n";

$entites = $facade->getAll();
echo "Toutes les entités : " . json_encode($entites) . "\n";

$nouvelIdEntite = $facade->create(['nom' => 'Brad Pitt']);
echo "Nouvel ID de l'entité : " . $nouvelIdEntite . "\n";

$facade->update($nouvelIdEntite, ['nom' => 'Angelina Jolie']);
echo "Entité mise à jour avec l'ID " . $nouvelIdEntite . "\n";

$facade->delete($nouvelIdEntite);
echo "Entité avec l'ID " . $nouvelIdEntite . " supprimée\n";
