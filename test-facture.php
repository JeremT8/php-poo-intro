<?php

require "classes/Facture.php";
require "classes/Client.php";
require "classes/FabriqueClient.php";
require "classes/FabriqueFacture.php";

$facture = new Facture(
    "00001", 
    100, 
    new DateTime(), 
    new Client(1, "Sophie")
);

$client = new Client(2, "Paul");

$client->addFacture(new Facture("0002", 20, new DateTime(), $client));
$client->addFacture(new Facture("0003", 80, new DateTime(), $client));
$client->addFacture(new Facture("0004", 70, new DateTime(), $client));

$client->getFactures()[0]->setStatut(Facture::STATUT_PAYEE);

var_dump($client);

var_dump($client->getChiffreAffaire());

var_dump($facture->getMontantTTC());

var_dump(FabriqueClient::getClient(2));

var_dump(FabriqueFacture::getFacture("00003"));