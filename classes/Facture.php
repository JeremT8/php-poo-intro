<?php
class Facture
{

    const STATUT_EN_COURS = 1;
    const STATUT_PAYEE = 2;
    const STATUT_ANNULE = 3;
    private int $numFacture;
    private int $montant;
    public static $tva = .20;
    private DateTime $date;
    private Client $client;
    private int $statut = 0; 

    public function __construct(int $numFacture, int $montant, Datetime $date, Client $client)
    {
        $this->numFacture = $numFacture;
        $this->montant = $montant;
        $this->date = $date;
        $this->client = $client;
    }


    //GETTERS & SETTERS
    /**
     * Get the value of numFacture
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }
    /**
     * Set the value of numFacture
     *
     * @return  self
     */
    public function setNumFacture($numFacture)
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    /**
     * Get the value of montant
     */
    public function getMontant()
    {
        return $this->montant;
    }

    public function getMontantTTC() {
        return $this->montant * (1 + self::$tva);
    }
 


    /**
     * Set the value of montant
     *
     * @return  self
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
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
