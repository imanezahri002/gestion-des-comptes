<?php
include './connexion.php';
class busnissAcc extends account{

    private $limitCredit ;
    private $tauxTransaction;

    public function __construct($accountNum,$titulaire,$soldeInit,$limitCredit,$tauxTransaction){
        parent::__construct($accountNum,$titulaire,$soldeInit);
        $this->limitCredit=$limitCredit;
        $this->tauxTransaction=$tauxTransaction;
    }

}

?>