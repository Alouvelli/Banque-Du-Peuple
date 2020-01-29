<?php

session_start();

require_once  "../../model/comptedb.php";
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    suppressionCompte($id);

    $_SESSION['message'] = "Compte supprimé avec succés!";
    $_SESSION['msg_type'] = "danger";

    header('location:comptes');
}


?>