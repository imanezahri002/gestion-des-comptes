<?php

class account{
    
    protected $titulaire;
    protected $soldeInit;

    public function __construct($titulaire, $soldeInit){
        $this->titulaire=$titulaire;
        $this->soldeInit=$soldeInit;
    }
    public function creerAcc($conn, $type,$valeur){
        $sql="INSERT INTO account(titulaire,soldeInit) VALUES('$this->titulaire',$this->soldeInit)";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $id=$conn->LastInsertID();
        
        if($type=='savingAcc'){
            $rqt1=("INSERT INTO savingaccount (minimumSolde,accountNum)VALUES($valeur,$id)");
            $stmt1=$conn->prepare($rqt1);
            $stmt1->execute();
        }
        if($type=='currentAcc'){
            $rqt2=("INSERT INTO currentaccount (sommelimit,accountNum)VALUES($valeur,$id)");
            $stmt2=$conn->prepare($rqt2);
            $stmt2->execute();
        }
        if($type='businessAcc'){
            $rqt3=("INSERT INTO businessaccount (limitCredit,accountNum)VALUES($valeur,$id)");
            $stmt3=$conn->prepare($rqt3);
            $stmt3->execute();
        }

        

    }
   
}
?>
