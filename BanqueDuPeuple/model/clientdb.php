<?php
    require_once 'db.php';

    function ajoutClient($nom, $prenom, $adresse, $telephone)
    {
        
        $sql = "INSERT INTO client VALUES(null, '".$nom."', '".$prenom."', '".$adresse."', '".$telephone."') ";

        
        getConnection()->exec($sql);

        
    }
    function updateClient($id, $nom, $prenom, $adresse, $telephone)
    {
    
        $sql= "UPDATE client set nom='".$nom."', prenom='".$prenom."', adresse='".$adresse."', telephone='".$telephone."' where idCli=".$id.";";
        
        getConnection()->exec($sql);
    }

    function rechercheClientById($id){

    
        $sql = "SELECT * from client where idCli = ".$id;
        return getConnection()->query($sql)->fetch();
    
    }
    

    function suppressionClient($id)
    {
        $sql = "DELETE from client where idCli =".$id;
   
        getConnection()->exec($sql);
   
        
    }

    function suppressionTousLesComptesByIdCli($id_client){
    
        $sql= "DELETE from compte where idCli=".$idCli;

        getConnection()->exec($sql);
    }
    
    
    function listeClients()
    {
        
        $sql = "SELECT * FROM client";

        return getConnection()->query($sql)->fetchAll();

        


    }
 ?>
