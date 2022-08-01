<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'publics/bootstrap/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'publics/font-awesome/css/all.css'?>">
    <link rel="stylesheet" href="<?= base_url().'publics/sweet-alert/css/sweetalert2.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'publics/css/home.css'?>">
    <title>e-Anatra</title> 
</head>
<body> 

    <nav class="navbar navbar-expand-sm shadow sticky-top bg-light" id="navbar">  
        <div class="container">
            <a href="" class="navbar-brand">
                <i class="fas fa-graduation-cap " style="font-size : 30px"></i>
                <span class="title">e-Anatra</span>
            </a>
            <ul class="navbar-nav" id="menu">
				<li class="navbar-item mr-4">
					<a href="#" class="navbar-link">Accueil</a>
				</li>
				<li class="navbar-item mr-4">
					<a href="#" class="navbar-link" >A propos</a>
				</li>
				<li class="navbar-item mr-4">
					<a href="#" class="navbar-link">Guide</a>
				</li>
                <li class="navbar-item mr-4">
					<a href="#" class="navbar-link">Contact</a>
				</li>
				
			</ul>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <form class="">
                    <div class="inputwithico">
                        <input type="text" class="form-control input" placeholder="Rechercher..." name="log_email">
                        <i class="fas fa-search icone" aria-hidden="true"></i>
                    </div>
                        
                    </form>
                </li>
            </ul>
        </div>    
    </nav>

    <div id="box_accueil">
    <div class="container-fluid" id="accueil">
        <!-- <img id="accueil_image" src="" width="1345px" height="550px" alt="" style="margin-left : -15px"> -->
        <div class="container-fluid" id="mask">
            <div class="row" id="box_welcome">
                  <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1 class="text-center h2">Bienvenue sur notre plate-forme</h1>
                </div>
                 <div class="col-md-3"></div>                   
            </div>
            <div class="row">
                <div class="col-md-3">
                <i class="fas fa-chevron-left" style="color:white ; float : left ; font-size : 40px"></i>
                </div>
                <div class="col-md-6">
                    <p class="text-center">
                        Vous êtes élève au collège ou au lycée, vous avez des difficultés à l’école ou vous voulez augmentez votre moyenne
                        Ceci est fait pour vous.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-chevron-right" style="color:white ; float : right ; font-size : 40px"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <button class="btn btn-block btn-lg" id="btn_login">Se connecter</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-info btn-block btn-lg" id="btn_signin">S'inscrire</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- A propos begins -->
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>A propos de <span style="color : #007bff">e-Anatra</span></h2>
                <p>
                    e-Anatra est une plate-forme d’éducation en ligne pour les collegiens et lycéens, ou plus précisement 
                    les élèves de 6ème à Terminale. nous vous proposons un methode d’étude amélioré et amusant avec :
                </p>
                <ul>
                    <li>Des cours</li>
                    <li>Des exercices</li>
                    <li>Des quiz</li>
                    <li>Des vidéos</li>
                </ul>
                <p>
                Nous vous offrons la possibilité de communiquer directement avec l’administration en cas de besoin    
                </p>
            </div>
            <div class="col-md-6 embed-responsive embed-responsive-16by9">
                <video controls class="embed-responsive-item">
                    <source src="<?=base_url().'publics/images/e laearning exemple.mp4'?>"/>
                </video>
            </div>
        </div>
    </div>
    <!-- A propos ends -->

    <!-- guide begins -->
    <div class="container mt-4">
    <!-- <h1 class="text-center mt-4" style="font-size : 48px ; color : #007bff ; font-weight : 600">Guide</h1>
                <p class="text-center" style="font-size : 18px ; ">Veuillez suivre les instructions suivantes pour une integration rapide et efficace
Toute inscription à ce site est gratuit  </p> -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center mt-4" style="font-size : 48px ; color : #007bff ; font-weight : 600">Guide</h1>
                <p class="text-center" style="font-size : 18px ; ">Veuillez suivre les instructions suivantes pour une integration rapide et efficace
Toute inscription à ce site est gratuit  </p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row mt-4 card-group" id="guide">
            <div class="col-md-3 card shadow m-4">
                <div class="card-img-top">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_ynztwmfw.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center bold">
                    Inscription

                    </h4>
                    <p class="card-text">
                    Inscrivez vous si vous n’ avez pas encore de compte, cliquer sur 
                    <a href="">S'incrire</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 card shadow m-4">
                <div class="card-img-top">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_zunhpwue.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center">
                    Choisissez votre classe
                    </h4>
                    <p class="card-text">
                    Vous devez choisir votre classe. 
                    Celle-ci doit 
                    correspondre à votre 
                    classe à l’ école.
                    
                    </p>
                </div>
            </div>
            <div class="col-md-3 card shadow m-4">
                <div class="card-img-top">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ktwnwv5m.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center bold">Connectez-vous</h4>
                    <p class="card-text">
                    Une fois votre compte 
                    enregistré, veuillez 
                    entrer votre pseudo 
                    avec votre mot de passe.
                    </p>
                </div>
            </div>
            <div class="col-md-3 card shadow m-4">
                <div class="card-img-top">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_5u6A5U.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center bold">Commencez à étudier</h4>
                    <p class="card-text">
                    Profitez de notre service, commencez à réviser et à faire des exercices. 
                    Votre avenir est entre de bonne main
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- guide ends -->

    <!-- Contact begins -->

    <div class="container mt-4" id="contact">
        <h1 class="text-center mt-4" style="font-size : 48px ; color : #007bff ; font-weight : 600">Contactez-nous</h1>
        <div class="row mt-4">
            <div class="col-md-6">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_GAiHca.json"  background="transparent"  speed="1"  style="width: 500px; height: 400px;"  loop autoplay></lottie-player>
            </div>
            <div class="col-md-6 border shadow">
                <h1 class="text-center">
                    Envoyez-nous vos avis
                </h1>
                <form action="" class="form-group">
                    <input type="text" class="form-control mt-3" placeholder="Nom...">
                    <input type="text" class="form-control mt-3" placeholder="Email">
                    <input type="text" class="form-control mt-3" placeholder="Télephone">
                    <textarea name="" id="" cols="30" rows="5" class="form-control mt-3" placeholder="Message..."></textarea>
                    <input type="submit" value="Envoyer" class="btn btn-lg btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>

    <!-- Contact ends -->

    <!-- footer begins-->
    <div class="container mt-4" >
        <div class="row mt-4" id="footer">
            <div class="col-md-3">
                <a href="" class="navbar-brand text-center">
                    <i class="fas fa-graduation-cap " style="font-size : 25px"></i>
                    <span class="title" style="font-size : 25px">e-Anatra</span>
                </a>
                <p style="font-size : 18px">
                    Vous pouvez aussi nous retrouver sur quelques réseaux sociaux
                </p>
                <div>
                    <span style="font-size : 30px ; color : #007bff" class="m-2">
                        <i class="fab fa-facebook"></i>
                    </span>
                    <span style="font-size : 30px ; color : #007bff" class="m-2">
                        <i class="fab fa-instagram"></i>
                    </span>
                    <span style="font-size : 30px ; color : #007bff" class="m-2">
                        <i class="fab fa-twitter"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="mb-2">
                    Liens rapides
                </h4>
                <ul>
                    <li class="mb-3">
                        <a href="">
                            Accueil
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="">
                            A propos
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="">
                            Guide
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="">
                        Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>
                    Autres contact
                </h4>
                <ul>
                    <li class="mb-3">
                        Email : <a href="">admin@gmail.com</a>
                    </li>
                    <li class="mb-3">
                        Télephone : <a href="">+261 0324052974</a>
                    </li>
                    <li class="mb-3">
                        Facebook : <a href="">E-Anatra</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Autres</h4>
                <p style="font-size : 18px">Abonnez-vous pour les dernières mis à jour</p>
                <form action="" class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                    <input type="submit" value="S'abonner" class="btn btn-info mt-2">
                </form>
            </div>
        </div>
    </div>
    <!-- footer ends-->
    <div class="container-fluid  mt-4">
        <h1 style="font-size : 35px" class="text-center">Created by mr. <span style="color:#007bff ; font-style : italic">Jonathan</span> all right reserved</h1>
    </div>

    </div>

    <div id="box_signin" class="d-none">
        <div class="container-fluid mt-2">
            <i class="fas fa-arrow-left" id="retour"></i>
        </div>
        <div class="container">
            <div class="row shadow border rounded mt-4">
                <div class="col-md-6">
                    <img src="<?=base_url().'publics/images/signin.svg'?>" alt="" height="475px" width="475px"class="m-4">
                </div>
                <div class="col-md-6">
                    <h1 class="text-center title" style="font-size : 40px">S'inscrire</h1>
                    <p class="text-center">Toute inscription sur ce plateforme est gratuit</p>
                    <form action="" class="form-group" id="form_signin">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="s_nom" class="mt-3">Nom</label>
                                <input type="text" class="form-control" id="s_nom" name="s_nom">
                            </div>
                            <div class="col-md-6">
                                <label for="s_prenom" class="mt-3">Prénom</label>
                                <input type="text" class="form-control" id="s_prenom" name="s_prenom">
                            </div>
                        </div>
                        <label for="s_email" class="mt-3">Email</label>
                        <input type="text" class="form-control" id="s_email" name="s_email">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="s_mdp" class="mt-3">Mot de passe</label>
                                <input type="password" class="form-control" id="s_mdp" name="s_mdp">
                            </div>
                            <div class="col-md-6">
                                <label for="s_cmdp" class="mt-3">Confirmer mot de passe</label>
                                <input type="password" class="form-control" id="s_cmdp" name="s_cmdp">
                            </div>
                        </div>
                        <input type="checkbox" name="" id="s_condition" class="mt-4">
                        <label for="s_condition" class="mt-4">
                            Oui, je comprends et j'accepte toutes les <a href="">conditions</a> d'utilisation.
                        </label>
                        <input type="submit" value="Soumettre" class="mt-2 btn btn-info btn-block btn-lg">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>
    </div>

    <script src="<?= base_url().'publics/js/jquery.js'?>"></script>
    <script src="<?= base_url().'publics/bootstrap/js/bootstrap.js'?>"></script>
    <script src="<?= base_url().'publics/font-awesome/js/all.js'?>"></script>
    <script src="<?= base_url().'publics/sweet-alert/js/sweetalert2.min.js'?>"></script>
    <script src="<?= base_url().'publics/js/home.js'?>"></script>
</body>
</html>