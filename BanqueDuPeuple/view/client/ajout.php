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
    
    <section id="hero">
  <div class="container wow fadeInUp">
  
  <div class="container col-md-6" >
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2 class="m-3 font-weight-bold text-primary">FORMULAIRE D'AJOUT D'UN CLIENT</h2>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                <form action="clientController" method="post">
                    <div class= "form-group">
                        <label class="control-label" for="nom">NOM</label>
                        <h5><input class= "form-control" name="nom" id="nom" placeholder = "Entrer le nom" required/></h5>
                    </div>
                    <div class= "form-group">
                        <label class="control-label" for="prenom">PRENOM</label>
                        <h5><input class= "form-control" name="prenom" id="prenom" placeholder = "Entrer le prénom" required/></h5>
                    </div>
                    <div class= "form-group">
                        <label class="control-label" for="adresse">ADRESSE</label>
                        <h5><input class= "form-control" name="adresse" id="adresse" placeholder = "Entrer l'adresse" required/></h5>
                    </div>
                    <div class= "form-group">
                        <label class="control-label" for="telephone">TELEPHONE</label>
                        <h5><input class= "form-control" name="telephone" id="telephone" placeholder = "Entrer le numéro de téléphone" required/></h5>
                    </div>
                    <div class="mt-6">
                      
                            <div align="right" class= "form-group">
                            <input class= "btn btn-success" type="submit" name="enregistrer" id="enregister" value="Enregister"/>
                            <input class= "btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler" />
                            </div>
                    
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