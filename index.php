<?php
include 'connexion.php';
include './classes/account.php';

if(isset($_POST["envoyer"])){
   $tit=$_POST["titulaire"];
   $solde=$_POST["soldeInit"];
   $type=$_POST["typeAcc"];
   $minSolde=$_POST["minimumSolde"];
   $sommeLimit=$_POST["sommelimit"];
   $limitCr=$_POST["limitCredit"];
   
   $test=new account($tit,$solde);

   if($type=='savingAcc'){
    $valeur=$minSolde;
   }
   else if($type=='currentAcc'){
    $valeur=$sommeLimit;
   }
   else if($type=='businessAcc'){
    $valeur=$limitCr;
   }

   $test->creerAcc($conn,$type,$valeur);
//    $info=new savingAcc($minSolde);
//    $infos=$info->displaySaving();

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire bancaire</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Formulaire bancaire</h4>
                        <form method="POST" action="" >
                            <!-- Champ Titulaire -->
                            <div class="mb-3">
                                <input type="text" class="form-control" id="titulaire" placeholder="Titulaire" required name="titulaire">
                            </div>

                            <!-- Champ Solde Initial -->
                            <div class="mb-3">
                                <input type="number" class="form-control" id="solde_initial" placeholder="Solde initial" required name="soldeInit">
                            </div>
                            
                            <!-- Sélecteur Type de Compte -->
                            <div class="mb-3">
                                <select class="form-select" id="typeCompte"  name="typeAcc">
                                    <option value="" disabled selected>Type de compte</option>
                                    <option value="savingAcc">Saving Account</option>
                                    <option value="currentAcc">Current Account</option>
                                    <option value="businessAcc">Business Account</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="businessAccount" placeholder="limit Credit"  name="limitCredit" >
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="currentAccount" placeholder="somme limit"  name="sommelimit" >
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="savingAccount" placeholder="minimum Solde"  name="minimumSolde" >
                            </div>

                            <!-- Bouton de soumission -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="envoyer">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lien vers Bootstrap JS et Popper.js -->
     <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb2Y5R3oWf/Hf7gq5uXk5f5sd5zCwBzL9Nqj7f4nTRBqFaypP" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqEuJtIcqB6ZFSO+XY4+k3TGoPvsXjO7nljH/oV0m5mH6" crossorigin="anonymous"></script>
</body>
</html>
