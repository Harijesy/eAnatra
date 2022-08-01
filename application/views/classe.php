<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'publics/bootstrap/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'publics/font-awesome/css/all.css'?>">
    <link rel="stylesheet" href="<?= base_url().'publics/sweet-alert/css/sweetalert2.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'publics/css/classe.css'?>">
    <title>Choisissez votre classe</title>
</head>
<body>
    
    <div class="container mt-3">
        <h1 class="text-center">Choisissez votre <span style="color : #007bff">classe</span></h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 rounded mt-4 border shadow" id="box_choix">
                <p class="text-center" style="color : grey ; font-size : 40px ;">
                    <i class="far fa-user"></i>
                </p>
                <form action="" id="choix_classe" class="form-group">
                    <label for="s_section">Section</label>
                    <select class="form-control" name="s_section" id="s_section">
                    <option style="color : grey ;">Veuillez selectionnez votre section</option>
                    <option id="acces_college">Collège</option>
                    <option id="acces_lycee">Lycée</option>
                    </select>

                    <div id="college" class="d-none">
                        <label for="s_college">Classe</label>
                        <select class="form-control" name="s_college" id="s_college">
                        <option style="color : grey ;">Veuillez selectionnez votre classe</option>
                        <option>6ème</option>
                        <option>5ème</option>
                        <option>4ème</option>
                        <option>3ème</option>
                        </select>
                    </div>

                    <div id="lycee" class="d-none">
                        <label for="s_lycee">Classe</label>
                        <select class="form-control" name="s_lycee" id="s_lycee">
                        <option>2nd</option>
                        <option>première</option>
                        <option>terminal</option>
                        </select>
                    </div>

                    <input type="submit" value="Soumettre" class="btn btn-info btn-lg btn-block my-3">
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="d-none" data-toggle="modal" data-target="#modelId" id="btn_log">
      Launch
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <h3 class="text-center mt-2">Veuillez vous connecter maintenant</h3>
                        <form action="" class="form-group">
                            <label for="l_email" class="mt-3">Email</label>
                            <input type="text" class="form-control" id="l_email">
                            <label for="l_mdp" class="mt-3">Mot de passe</label>
                            <input type="password" class="form-control" id="l_mdp">
                            <input type="submit" value="Se connecter" class="btn btn-info btn-lg btn-block mt-3">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>

    
    <script src="<?= base_url().'publics/js/jquery.js'?>"></script>
    <script src="<?= base_url().'publics/bootstrap/js/bootstrap.js'?>"></script>
    <script src="<?= base_url().'publics/font-awesome/js/all.js'?>"></script>
    <script src="<?= base_url().'publics/sweet-alert/js/sweetalert2.min.js'?>"></script>
    <script src="<?= base_url().'publics/js/classe.js'?>"></script>
</body>
</html>