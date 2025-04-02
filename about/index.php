<?php
    $title = "Télé Med RDC";
    $current = 'about';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?=$title?></title>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'header.php' ?>
    </head>
    <body>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'navbar.php' ?>
        <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5 mt-4">
                <h1 class="display-2 text-white mb-3 animated slideInDown">TéléMedRDC</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="http://<?=$_SERVER['HTTP_HOST']?>/">Accueil</a></li>
                        <li class="breadcrumb-item" aria-current="page">A propos</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0">
                            <div class="col-6">
                                <img class="img-fluid" src="http://<?=$_SERVER['HTTP_HOST']?>/img/about-1.jpg">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="http://<?=$_SERVER['HTTP_HOST']?>/img/about-2.jpg">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="http://<?=$_SERVER['HTTP_HOST']?>/img/about-3.jpg">
                            </div>
                            <div class="col-6">
                                <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                    <div class="icon-box-light">
                                        <i class="bi bi-award text-dark"></i>
                                    </div>
                                    <h1 class="display-1 text-white mb-0" data-toggle="counter-up">10</h1>
                                    <small class="fs-5 text-white">Ans d'experiences</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-6 mb-4">TéléMedRDC : Un Hôpital Virtuel pour des Consultations en Ligne</h1>
                        <p class="mb-4">La télémédecine connaît un essor considérable à travers le monde, offrant des solutions accessibles aux populations éloignées des centres de santé. En République Démocratique du Congo, l’accès aux soins de santé est parfois limité en raison de la distance, du coût et du manque d’infrastructures.</p>
                        <div class="row g-4 g-sm-5 justify-content-center">
                            <div class="col-sm-6">
                                <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                    <p class="text-white mb-0">Consultations Annuels</p>
                                    <h1 class="text-white mb-0" data-toggle="counter-up">2500</h1>
                                </div>
                            </div>
                            <div class="col-sm-6 text-start">
                                <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                    <p class="text-white mb-0">Adresses locales</p>
                                    <h1 class="text-white mb-0" data-toggle="counter-up">25</h1>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                    <p class="text-white mb-0">Patiens enregistrés</p>
                                    <h1 class="text-white mb-0" data-toggle="counter-up">50</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'script-js.php' ?>
    </body>
</html>