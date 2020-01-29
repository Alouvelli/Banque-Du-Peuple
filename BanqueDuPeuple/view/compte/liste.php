<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8"/>
    <title>banque</title>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="public/lib/bootstrap/css/bootstrap.min.css">
    <!-- Libraries CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="public/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="public/lib/animate/animate.min.css">
    <!-- Main Stylesheet File -->
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/style.css">
    
</head>
<body>
    <?php require_once 'suppression.php'; ?>

    <?php
    if(isset($_SESSION['message'])):
    ?>
    <div class = "alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <?php endif?>

  <section id="hero">
  <div class="container wow fadeInUp">
  
  <div class="container col-md-12" >
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2 class="m-3 font-weight-bold text-primary">LISTE DES COMPTES</h2>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <th><h4><strong>ID COMPTE</strong></h4></th>
                                <th><h4><strong>NUMERO COMPTE</strong></h4></th>
                                <th><h4><strong>SOLDE</strong></h4></th>
                                <th><h4><strong>ID CLIENT</strong></h4></th>
                                <th><h4><strong>CLIENT ASSOCIE</strong></h4></th>
                                <th colspan = "2"><h4><strong>ACTIONS</strong></h4></th>
                            </thead>
                            <?php
                                require_once '../../model/comptedb.php';
                                $comptes = listeComptes();
                                $numCpt = generationNumCpt();?>
                                <?php 
                                foreach ($comptes as $compte) 
                                {?>
                                    
                                    <tr>
                                        <td><h5><?=$compte[0]?></h5></td>
                                        <td><h5><?=$compte[1]?></h5></td>
                                        <td><h5><?=$compte[2]?></h5></td>
                                        <td><h5><?=$compte[3]?></h5></td>
                                        <td> 
                                            <h5>
                                            <?=(rechercheClientById($compte['idCli']))[2]?>
                                            <?=(rechercheClientById($compte['idCli']))[1]?>
                                            </h5> 
                                        </td>
                                        <td>
                                        <a href="modifierComptes?edit=<?php echo $compte[0]; ?>"
                                        class = "btn btn-info">Modifier</a>
                                                                        
                                        <a href="suppression.comptes?delete=<?php echo $compte[0]; ?>"
                                        class = "btn btn-danger">Supprimer</a>
                                        </td>
                                    </tr>
                            
                                    <?php } ?>
                        </table>
                </div>
              </div>
            

            
                      
            </div>
        </div>   
    </div>     
    </div>
        </section>
    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
            </div>
        </div>

            <div class="container">
                <div class="copyright"> 
                    &copy; Copyright <strong>Banque Du Peuple</strong>. All Rights Reserved
                </div>
            <div class="credits">
            </div>
            </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="public/lib/jquery/jquery.min.js"></script>
    <script src="public/lib/jquery/jquery-migrate.min.js"></script>
    <script src="public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/wow/wow.min.js"></script>
    <script src="public/lib/waypoints/waypoints.min.js"></script>
    <script src="public/lib/counterup/counterup.min.js"></script>
    <script src="public/lib/superfish/hoverIntent.js"></script>
    <script src="public/lib/superfish/superfish.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="public/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="public/js/main.js"></script>

    </body>
</html>
