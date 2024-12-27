<?php
include './connexion.php';
class currentAcc extends account{

    private $limit;

    public function __construct($accountNum,$titulaire,$soldeInit,$limit){
        parent::__construct($accountNum,$titulaire,$soldeInit);
        $this->limit=$limit;
    }


}
?>