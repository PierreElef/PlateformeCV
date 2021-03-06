<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta lan="fr">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Plateforme CV </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script type="text/javascript" scr="js/bootstrap.js"></script>
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
                    <a class="nav-tab-dark-text nav-item nav-link" id="nav-competences-tab" data-toggle="tab" href="#nav-competences" role="tab" aria-controls="nav-competences" aria-selected="false">Compétences</a>
                    <a class="nav-tab-dark-text nav-item nav-link" id="nav-experiences-tab" data-toggle="tab" href="#nav-experiences" role="tab" aria-controls="nav-experiences" aria-selected="false">Experiences</a>
                    <a class="nav-tab-dark-text nav-item nav-link" id="nav-divers-tab" data-toggle="tab" href="#nav-divers" role="tab" aria-controls="nav-divers" aria-selected="false">Divers</a>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active page-border" id="nav-profil-cv" role="tabpanel" aria-labelledby="nav-profil-cv-tab">
                    <div class="row">
                        <div class="col-6 p-4">
                            <form class="form-group" method="POST">
                                <label class="pt-2">Nom</label>
                                <input type="hidden" name="ID">
                                <input type="text" class="form-control" id="sirname" name="sirname" placeholder="Nom" value="<?php echo $query['sirname'] ?>">
                                <label class="pt-2">Prenom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prenom" value="<?php echo $query['firstname'] ?>">
                                <label class="pt-2">Adresse</label>
                                <input type="text" class="form-control" id="postaladress1" name="postaladress1" placeholder="Adresse 1" value="<?php echo $query['postaladress1'] ?>">
                                <input type="text" class="form-control mt-1" id="postaladress2" name="postaladress2" placeholder="Adresse 2" value="<?php echo $query['postaladress2'] ?>">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="pt-2">Code postal</label>
                                        <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="XXXXX" value="<?php echo $query['postalcode'] ?>">
                                    </div>
                                    <div class="col-8">
                                        <label class="pt-2">Ville</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Ville" value="<?php echo $query['city'] ?>">
                                    </div>
                                </div>
                                <label class="pt-2">Telephone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="XX XX XX XX XX" value="<?php echo $query['phone'] ?>">
                                <label class="pt-2">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" value="<?php echo $query['email'] ?>">
                                <label class="pt-2">Date de naissance</label>
                                <input type="date" class="form-control col-4" id="birthdate" name="birthdate" value="<?php echo $query['birthdate'] ?>">
                                <button class="btn btn-primary mt-2" type="submit" name="saveButton">Save</button>
                                <p>* Informations obligatoires</p>
                                <p>
                                    <?php echo $query['ID'] ?>
                                    <?php echo $query['firstname'] ?>
                                    <?php echo $query['postaladress1'] ?>
                                </p>
                            </form>
                        </div>
                        <div class="col-6 text-center pt-4">
                            <p class=" mx-auto d-block photoIDfond">
                                <!--<img src="images/suchwow.jpg" width="350" height="450">-->
                            </p>
                            <label class="pt-2">Choisir sa photo de profil</label>
                            <input type="file" name="photoCV" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade page-border" id="nav-formations" role="tabpanel" aria-labelledby="nav-formations-tab">
                    <div class="p-2">
                        <h2>Formation</h2>
                        <form method="POST">

                            <div class="pb-4">
                                <input type="hidden" id="ID" name="ID">
                                <label class="pt-2">Nom du diplôme</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $query['name'] ?>">
                                <div class="row">
                                    <div class="col-10">
                                        <label class="pt-2">Lieu</label>
                                        <input type="text" class="form-control" id="place" name="place" value="<?php echo $query['place'] ?>">
                                    </div>
                                    <div class="col-2">
                                        <label class="pt-2">Année d'obtention</label>
                                        <input type="text" class="form-control" id="year" name="year" value="<?php echo $query['year'] ?>">
                                    </div>
                                </div>
                                <label class="pt-2">Description</label>
                                <textarea class="col p-2" rows="4" cols="100" name="description" form="Formation"></textarea>
                            </div>

                            <button class="btn btn-primary mt-2" type="submit" name="saveButton">Save</button>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade page-border" id="nav-competences" role="tabpanel" aria-labelledby="nav-competences-tab">
                    <div class="p-2">
                        <h3>Compétences</h3>
                        <form method="POST">

                            <div class="col">
                                <div class="row">
                                    <input type="hidden" id="ID" name="ID">
                                    <label class="col-2 pt-2">HTML</label>
                                    <label class="col-1" id="compt1Val"></label>
                                    <input id="grade" value="compt1" class="col-9 pl-2" type="range" min="1" max="5" step="1" />
                                    <script>
                                        var slideCol1 = document.getElementById("compt1");
                                        var compt1Val = document.getElementById("compt1Val");
                                        compt1Val.innerHTML = slideCol1.value;
                                        slideCol1.oninput = function() {
                                            compt1Val.innerHTML = this.value;
                                        }

                                    </script>
                                </div>
                            </div>

                            <button class="btn btn-primary mt-2" type="submit" name="saveButton">Save</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade page-border" id="nav-experiences" role="tabpanel" aria-labelledby="nav-experiences-tab">
                    <div class="p-2">
                        <h2>Expérience</h2>
                        <form method="POST">

                            <div class="pb-4">
                                <input type="hidden" id="ID" name="ID">
                                <label class="pt-2">Titre du poste</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $query['title'] ?>">
                                <div class="row">
                                    <div class="col-8">
                                        <label class="pt-2">Organisation</label>
                                        <input type="text" class="form-control" id="organisation" name="organisation" value="<?php echo $query['organisation'] ?>">
                                    </div>
                                    <div class="col-2">
                                        <label class="pt-2">Année de début</label>
                                        <input type="text" class="form-control" id="dateStart" name="dateStart" value="<?php echo $query['dateStart'] ?>">
                                    </div>
                                    <div class="col-2">
                                        <label class="pt-2">Année de fin</label>
                                        <input type="text" class="form-control" id="dateStop" name="dateStop" value="<?php echo $query['dateStop'] ?>">
                                    </div>
                                </div>
                                <label class="pt-2">Description du poste</label>
                                <textarea class="col p-2" rows="4" cols="100" name="description" form="description"></textarea>
                            </div>

                            <button class="btn btn-primary mt-2" type="submit" name="saveButton">Save</button>
                        </form>
                    </div>
                </div>


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
