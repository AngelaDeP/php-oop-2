<?php

class User {


    public $registered = false;
    public $statusCard;
    public $name;
    public $discount;
    
    

    public function __construct($registered, $statusCard, $name) {
        $this->registered = $registered;
        $this->statusCard = $statusCard;
        $this->name = $name;
    }

    public function purchaseResult() {
        if ($this->registered == true && $this->statusCard == "valid") {
            $this->discount = 20;
            return "Ordine effettuato $this->name, hai avuto uno sconto del $this->discount!";
        } else if ($this->registered == false && $this->statusCard == "valid") {
            $this->discount = 0;
            return "Ordine effettuato $this->name, il tuo sconto è del $this->discount, registrati per avere sconti vantaggiosi!";
        } else if ($this->statusCard == "expired") {
            return "Ordine fallito $this->name, controlla la tua carta di credito!";
        }
    }

}



?>