<?php
    if(!isset($_COOKIE["username"])){
        header("Location: Index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Perfil</title>
    <script src="https://kit.fontawesome.com/89da924aef.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
</head>
<body id="page-top">
    <div id="wrapper">
        <?php include('Templates/sidebar.php'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include('Templates/navbar.php'); ?>                
                <div class="container-fluid">
                    <div class="card">
                        <form>
                            <div class="card-body border-bottom-primary">
                                <h4>Información personal</h4>
                                <div class="row mt-3">                                    
                                    <div class="col col-md-8 col-sm-12">
                                        <div class="row mt-2">
                                            <div class="col">
                                                <label for="Nombre" class="form-label">Nombre completo</label>
                                                <input type="text" 
                                                    id="Nombre" 
                                                    name="Nombre" 
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="Cedula" class="form-label">Cédula</label>
                                                <input type="number" 
                                                    id="Cedula" 
                                                    name="Cedula" 
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="FechaNacimiento" class="form-label">Fecha de nacimiento</label>
                                                <input type="date" 
                                                    id="FechaNacimiento" 
                                                    name="FechaNacimiento" 
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>  
                                </div>                             
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>