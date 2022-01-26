<?php
class Facture
{
    const STATUT_EN_COURSE = 1;
    const STATUT_PAYEE = 2;
    const STATUT_ANNULEE = 3;

    public static $tva = .20;

    private string $numFacture;

    private int $montant;

    private DateTime $date;

    private Client $client;

    private int $statut = 0;

    public function __construct(string $numFacture, int $montant, DateTime $date, Client $client)
    {
        $this->numFacture = $numFacture;
        $this->montant = $montant;
        $this->date = $date;
        $this->client = $client;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    public function getMontantTTC(){
        return $this->montant * (1 + self::$tva);
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }
}
