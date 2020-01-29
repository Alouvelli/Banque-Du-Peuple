<?php

require_once  "../model/clientdb.php";

if (isset($_POST['enregistrer']))
{
   $nom= $_POST['nom'];
   $prenom= $_POST['prenom'];
   $adresse= $_POST['adresse'];
   $telephone= $_POST['telephone'];

    ajoutClient($nom, $prenom, $adresse, $telephone);

    header('location:clients');
}


if (isset($_POST['update']))
{
    $id=$_POST['id'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $adresse= $_POST['adresse'];
    $numero= $_POST['telephone'];

    updateClient($id, $nom, $prenom, $adresse, $numero);

    header('location:clients');
}


if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    suppressionTousLesComptesByIdCli($id);
    
    suppressionClient($id);

    header('location:clients');
}



?>