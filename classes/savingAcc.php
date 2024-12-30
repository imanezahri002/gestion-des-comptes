<?php
    include './connexion.php';
    class savingAcc extends account{
        private $minSolde;
        

        public function __construct($soldeInit,$titulaire,$accountNum,$minSolde){
            parent::__construct($accountNum,$titulaire,$soldeInit);
            $this->minSolde=$minSolde;
            $this->tauxInt=$tauxInt;
        }
        public function displaySaving(){
            $rqt=("SELECT * FROM savingAccount NATURAL JOIN account ");
            $stmt=$conn->prepare($rqt3);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r($result);
            return $result;

        }



    }
?>