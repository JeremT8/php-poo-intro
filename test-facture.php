<?php

require "classes/Facture.php";
require "classes/Client.php";

$facture = new Facture("00001", 100, new DateTime(), new Client(1, "Sophie"));

$client = new Client(2, "paul");

$client->getFactures()[0]->setStatut(Facture::STATUT_PAYEE);
$client->addFacture(new Facture("0002", 120, new DateTime(), $client));
$client->addFacture(new Facture("0003", 180, new DateTime(), $client));
$client->addFacture(new Facture("0004", 170, new DateTime(), $client));

var_dump($client);
var_dump($client->getChiffreAffaire());
var_dump($facture->getMontantTTC());

