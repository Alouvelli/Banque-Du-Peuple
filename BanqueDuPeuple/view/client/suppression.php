<?php

session_start();

require_once  "../../model/clientdb.php";
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    suppressionClient($id);

    $_SESSION['message'] = "Client supprimé avec succés!";
    $_SESSION['msg_type'] = "danger";

    header('location:clients');
}


?>