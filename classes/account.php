<?php
include './connexion.php';
include './index.php';
abstract class account{
    protected $accountNum;
    protected $titulaire;
    protected $soldeInit;

    public function __construct($accountNum ,$titulaire, $soldeInit){
        $this->accountNum = $accountNum;
        $this->titulaire=$titulaire;
        $this->soldeInit=$soldeInit;
    }
    public function creerAcc($conn, $type){
        
    }
   
}
?>
