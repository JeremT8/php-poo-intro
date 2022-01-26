<?php

// Créer des classes client et facture

class Client
{
    private int $numClient;
    private string $nom;

    private array $factures = [];

    public function __construct(int $numClient, string $nom)
    {
        $this->numClient = $numClient;
        $this->nom = $nom;
    }

    /**
     * Get the value of numClient
     */
    public function getNumClient()
    {
        return $this->numClient;
    }

    /**
     * Set the value of numClient
     *
     * @return  self
     */
    public function setNumClient($numClient)
    {
        $this->numClient = $numClient;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function addFacture(Facture $facture) 
    {
        $this->factures[] = $facture;
        return $this;
    }

    public function getChiffreAffaire(){
        $total = 0;
        foreach($this->factures as $f){
            if($f->getStatut() === Facture::STATUT_PAYEE){
                $total += $f->getMontant();
            }   
        }

        return $total;
    }

    /**
     * Get the value of factures
     */ 
    public function getFactures()
    {
        return $this->factures;
    }
}
