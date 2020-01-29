<!DOCTYPE html>

<?php

require_once "../../model/comptedb.php";


if ($_GET['edit']){
    $modifCli = rechercheClientById($_GET['edit']);
}

?>
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
    
    <section id="hero">
  <div class="container wow fadeInUp">
  
  <div class="container col-md-6" >
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2 class="m-3 font-weight-bold text-primary">FORMULAIRE DE MODIFICATION D'UN CLIENT</h2>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                <form action="clientController" method="post"
                                class="form-signin col-md-6 offset-2">
                                    <div class="form-group">
                                        <label for="nom">ID CLIENT</label>
                                        <input type="text" name="id" id="id" class="form-control"
                                            value="<?=$modifCli[0]?> "readonly>
                                    </div>
                                <div class="form-group">
                                    <label for="nom">NOM</label>
                                    <input type="text" name="nom" id="nom" class="form-control"
                                        value="<?=$modifCli[1]?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom">PRENOM</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control"
                                        value="<?=$modifCli[2]?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="adresse">ADRESSE</label>
                                    <input type="text" name="adresse" id="adresse" class="form-control"
                                        value="<?=$modifCli[3]?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="telephone">TELEPHONE</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control"
                                        value="<?=$modifCli[4]?>" required>
                                </div>
                                <hr>
                                <div>
                                    <button name="update" type="submit" class="btn btn-info">Sauvegarder les changements</button>

                                </div>
                            </form>

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
