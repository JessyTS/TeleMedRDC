<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'init.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'function.php';
    $title = "Télé Med RDC";
    $description = "";
    $current = 'home';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?=$title?></title>
        <meta content="<?=$title?>" name="title">
        <meta content="<?=$description?>" name="description">
        <?php require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'header.php' ?>
    </head>
    <body>
        <?php require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'loader.php' ?>
        <?php require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'navbar.php' ?>
        <div class="container-fluid header-carousel px-0 mb-5">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7 text-start">
                                        <h1 class="display-1 text-white animated slideInRight mb-3">Des Consultations en Ligne ?</h1>
                                        <p class="mb-5 animated slideInRight">La télémédecine connaît un essor considérable à travers le monde, offrant des solutions accessibles aux populations éloignées des centres de santé.</p>
                                        <a href="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/contact/" class="btn btn-primary py-3 px-5 animated slideInRight">Nous Contacter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-lg-7 text-end">
                                        <h1 class="display-1 text-white animated slideInLeft mb-3">Objectif Principal</h1>
                                        <p class="mb-5 animated slideInLeft">Développer une plateforme de télémédecine qui permet aux patients de consulter des médecins en ligne via visioconférence, réduisant ainsi les contraintes géographiques et financières liées aux soins médicaux.</p>
                                        <a href="<?=$protocol?>://<?=$_SERVER['HTTP_HOST']?>/contact/" class="btn btn-primary py-3 px-5 animated slideInLeft">Prendre rendez-vous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-3.jpg">
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
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-0 feature-row">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-award text-dark"></i>
                            </div>
                            <h5 class="mb-3">Récompensé pour l’excellence</h5>
                            <p class="mb-0">Notre engagement envers des soins de qualité nous a valu plusieurs distinctions dans le domaine médical.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-people text-dark"></i>
                            </div>
                            <h5 class="mb-3">Médecins experts à votre service</h5>
                            <p class="mb-0">Une équipe de professionnels qualifiés et expérimentés pour vous offrir les meilleurs soins.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-cash-coin text-dark"></i>
                            </div>
                            <h5 class="mb-3">Des tarifs justes et transparents</h5>
                            <p class="mb-0">Des consultations accessibles à tous, sans frais cachés ni surprises.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-headphones text-dark"></i>
                            </div>
                            <h5 class="mb-3">Assistance 24/7, toujours à l’écoute</h5>
                            <p class="mb-0">Une équipe disponible jour et nuit pour répondre à vos besoins médicaux.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-service py-5">
            <div class="container pt-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-6 mb-3">Nos Services Médicaux en Ligne</h1>
                    <p class="mb-5">Découvrez une nouvelle façon d’accéder aux soins de santé avec TéléMedRDC. Que ce soit pour une consultation, un suivi médical ou des conseils de prévention, notre plateforme vous permet de bénéficier de services médicaux de qualité, où que vous soyez et à tout moment.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-heart-pulse text-dark"></i>
                            </div>
                            <h5 class="mb-3">Consultation en ligne</h4>
                            <p class="mb-4">Consultez un médecin en visioconférence depuis chez vous, sans vous déplacer.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-lungs text-dark"></i>
                            </div>
                            <h5 class="mb-3">Prise de rendez-vous rapide</h4>
                            <p class="mb-4">Réservez facilement une consultation avec un spécialiste en quelques clics.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-virus text-dark"></i>
                            </div>
                            <h5 class="mb-3">Suivi médical personnalisé</h4>
                            <p class="mb-4">Accédez à votre historique de santé et suivez l’évolution de votre traitement.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-capsule-pill text-dark"></i>
                            </div>
                            <h5 class="mb-3">Ordonnances et prescriptions électroniques</h4>
                            <p class="mb-4">Recevez vos prescriptions directement en ligne, prêtes à être utilisées en pharmacie.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-capsule text-dark"></i>
                            </div>
                            <h5 class="mb-3">Assistance médicale 24/7</h4>
                            <p class="mb-4">Nos professionnels de santé sont disponibles jour et nuit pour répondre à vos questions.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-prescription2 text-dark"></i>
                            </div>
                            <h5 class="mb-3">Conseils et prévention santé</h4>
                            <p class="mb-4">Accédez à des articles et conseils médicaux pour mieux prendre soin de votre santé.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-clipboard2-pulse text-dark"></i>
                            </div>
                            <h5 class="mb-3">Service d’urgence en ligne</h4>
                            <p class="mb-4">Obtenez rapidement une consultation prioritaire en cas de besoin urgent.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-file-medical text-dark"></i>
                            </div>
                            <h5 class="mb-3">Suivi des maladies chroniques</h4>
                            <p class="mb-4">Un accompagnement sur mesure pour les patients atteints de maladies longues durées.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">Prenez Rendez-vous en Quelques Clics</h1>
                        <p class="mb-4">Ne perdez plus de temps dans les files d’attente ! Avec TéléMedRDC, réservez facilement votre consultation en ligne avec un médecin qualifié. Choisissez le spécialiste dont vous avez besoin, sélectionnez l’horaire qui vous convient et obtenez une consultation en visioconférence depuis chez vous.</p>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary">
                                <i class="bi bi-geo-alt text-dark fs-1"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Siege Social</h5>
                                <span>Kinshasa ISIPA</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary">
                                <i class="bi bi-clock text-dark fs-1"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Heure de bureau</h5>
                                <span>Lun-Sam 09h-17h, Dim Fermé</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="mb-4">Rendez-vous en ligne</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                                    <label for="nom">Nom</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" placeholder="Votre Email">
                                    <label for="mail">E-mail</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="numero" placeholder="Téléphone">
                                    <label for="numero">Téléphone</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select" id="service">
                                        <option selected>Tests de pathologie</option>
                                        <option value="">Tests de microbiologie</option>
                                        <option value="">Tests de biochimie</option>
                                        <option value="">Tests d'histopathologie</option>
                                    </select>
                                    <label for="service">Choisissez un service</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Entrez votre message ici" id="message" style="height: 130px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        <?php require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'script-js.php' ?>
    </body>
</html>