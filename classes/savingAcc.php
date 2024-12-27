<?php
    include './connexion.php';
    class savingAcc extends account{
        private $minSolde;
        private $tauxInt;

        public function __construct($soldeInit,$titulaire,$accountNum,$minSolde,$tauxInt){
            parent::__construct($accountNum,$titulaire,$soldeInit);
            $this->minSolde=$minSolde;
            $this->tauxInt=$tauxInt;
        }



    }
?>