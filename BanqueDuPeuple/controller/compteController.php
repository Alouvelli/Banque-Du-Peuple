<?php


require_once  "../model/comptedb.php";

if (isset($_POST['créer']))
{
   $numCpt= $_POST['numCpt'];
   $idCli= $_POST['idCli'];
   $solde= $_POST['solde'];

   ajoutCompte($numCpt, $solde, $idCli);


    header('location:comptes');
}

if (isset($_POST['modifier']))
{
    $id=$_POST['id'];
    $solde= $_POST['solde'];
    $idCli= $_POST['idCli'];

    updateCompte($id, $solde, $idCli);

    header('location:comptes');
}

if(isset($_GET['delete']))
{
    $id=$_GET['deleteId'];
    
    suppressionCompte($id);

    header('location:comptes');
}

?>