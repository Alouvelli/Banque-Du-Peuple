<?php
require_once 'db.php';
require_once 'clientdb.php';


function ajoutCompte($numCpt, $solde, $id){

    $sql= "INSERT into compte values(NULL,'".$numCpt."', '".$solde."', '".$id."') ";
    
    getConnection()->exec($sql);

}


function rechercheCompteById($id){

    $sql= "SELECT * from compte where idCpt = ".$id;
    
    return getConnection()->query($sql)->fetch();

}

function rechercheCompteByIdCli($idCli){

    $sql= "SELECT * from compte where idCli = ".$idCli;
    
    return getConnection()->query($sql)->fetchAll();

}


function updateCompte($id, $solde, $idCli){

    $sql= "UPDATE compte set solde='".$solde."', idCli='".$idCli."' where idCpt=".$id.";";
    
    getConnection()->exec($sql);

}

function suppressionCompte($id){

    $sql= "DELETE from compte where idCpt=".$id;

    getConnection()->exec($sql);
}

function generationNumCpt(){

   return $numCpt = 'BDP-'.date("Ymd-his",time());
}


function listeComptes(){

    $sql = "SELECT * from compte";
    
    return getConnection()->query($sql)->fetchAll();

}


?>