<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
    <meta lan="fr">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> Création CV </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" scr="../js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="font-family: 'Montserrat'">
        <div id="Header" style="padding:10px">
            <div class="col">
                <h1 class="header-ynov">Plateforme CV</h1>
            </div>
        </div>
        <div id="NavBarSite" class="row align-items-center navbarsite">
            <div class="col-11">
                <nav class="nav nav-pills nav-fill">
                    <a class="bar-nav" href="#">Accueil</a>
                    <a class="bar-nav-active" href="#">Mon CV</a>
                    <a class="bar-nav" href="#">Rendu</a>
                </nav>
            </div>
            <div class="col-1">
                <input class="iconlogin" type="button" onclick="window.location.href='#'" />
            </div>
        </div>
        <div id="NavBarCV">
            <nav class="nav nav-tabs nav-tab-dark" id="myTab" role="tablist">
                <a class="nav-tab-dark-text nav-item nav-link active" id="nav-profil-cv-tab" data-toggle="tab" href="#nav-profil-cv" role="tab" aria-controls="nav-profil-cv" aria-selected="true">Profil</a>
                <a class="nav-tab-dark-text nav-item nav-link" id="nav-formations-tab" data-toggle="tab" href="#nav-formations" role="tab" aria-controls="nav-formations" aria-selected="false">Formations</a>
                <a class="nav-tab-dark-text nav-item nav-link" id="nav-langages-tab" data-toggle="tab" href="#nav-langages" role="tab" aria-controls="nav-langages" aria-selected="false">Langages</a>
                <a class="nav-tab-dark-text nav-item nav-link" id="nav-experiences-tab" data-toggle="tab" href="#nav-experiences" role="tab" aria-controls="nav-experiences" aria-selected="false">Experiences</a>
                <a class="nav-tab-dark-text nav-item nav-link" id="nav-divers-tab" data-toggle="tab" href="#nav-divers" role="tab" aria-controls="nav-divers" aria-selected="false">Divers</a>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active page-border" id="nav-profil-cv" role="tabpanel" aria-labelledby="nav-profil-cv-tab">
                    <div class="row">
                        <form class="col-6 p-4">
                            <div class="form-group">
                                <label class="pt-2">Nom *</label>
                                <input type="text" class="form-control" id="username" placeholder="Nom" required>
                                <label class="pt-2">Prenom *</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Prenom" required>
                                <label class="pt-2">Adresse *</label>
                                <input type="text" class="form-control" id="postaladress1" placeholder="Adresse 1" required>
                                <input type="text" class="form-control mt-1" id="postaladress2" placeholder="Adresse 2">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="pt-2">Code postal *</label>
                                        <input type="text" class="form-control" id="postalcode" placeholder="XXXXX" required>
                                    </div>
                                    <div class="col-8">
                                        <label class="pt-2">Ville *</label>
                                        <input type="text" class="form-control" id="city" placeholder="Ville" required></div>
                                </div>
                                <label class="pt-2">Telephone *</label>
                                <input type="tel" class="form-control" id="phone" placeholder="XX XX XX XX XX" required>
                                <label class="pt-2">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="nom@exemple.com" required>
                                <label class="pt-2">Date de naissance *</label>
                                <input type="date" class="form-control col-4" id="birthdate" required>
                            </div>
                            <button class="btn btn-primary" type="submit">Valider</button>
                            <p>* Informations obligatoires</p>
                            <p><?php echo $query['firstname'] ?></p>
                        </form>

                        <div class="col-6 text-center pt-4">
                            <p class="photoIDfond">
                                <img src="../images/suchwow.jpg" width="350" height="450">
                            </p>
                            <label class="pt-2">Choisir sa photo de profil</label>
                            <input type="file" name="photoCV" />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade page-border" id="nav-formations" role="tabpanel" aria-labelledby="nav-formations-tab">Formation</div>
                <div class="tab-pane fade page-border" id="nav-langages" role="tabpanel" aria-labelledby="nav-langages-tab">Langages</div>
                <div class="tab-pane fade page-border" id="nav-experiences" role="tabpanel" aria-labelledby="nav-experiences-tab">Experiences</div>
                <div class="tab-pane fade page-border" id="nav-divers" role="tabpanel" aria-labelledby="nav-divers-tab">Divers</div>
            </div>
        </div>

        <div id="Footer" class="footer">
            <div class="row">
                <div class="col text-uppercase p-4">
                    <a class="footer-text" href="https://www.ynov.com/contact/">Contact</a>
                </div>
                <div class="col text-uppercase p-4">
                    <a class="footer-text" href="https://www.ynov.com/mentions-legales/">Mentions légales</a>
                </div>
                <div class="col text-uppercase p-4">
                    <a class="footer-text" href="https://www.ynov.com/cookies/">Cookies</a>
                </div>
            </div>
            <div>
                <div class="footer-text p-2">Établissements d’enseignement supérieur technique privé hors contrat</div>
            </div>
        </div>
    </div>
</body>

</html>
