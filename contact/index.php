<?php
    $title = "Télé Med RDC";
    $current = 'contact';
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
                <h1 class="display-2 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="http://<?=$_SERVER['HTTP_HOST']?>/">Accueil</a></li>
                        <li class="breadcrumb-item" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-6 mb-3">Contact</h1>
                    <p class="mb-5">Contact pour toute question</p>
                </div>
                <div class="row contact-info position-relative g-0 mb-5">
                    <div class="col-lg-6">
                        <a href="tel:+243855500700" class="d-flex justify-content-lg-center bg-primary p-4">
                            <div class="icon-box-light flex-shrink-0">
                                <i class="bi bi-phone text-dark"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-white">Appelez nous</h5>
                                <h2 class="text-white mb-0">+243 85 5500 700</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="mailto:contact@telemedrdc.com" class="d-flex justify-content-lg-center bg-primary p-4">
                            <div class="icon-box-light flex-shrink-0">
                                <i class="bi bi-envelope text-dark"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-white">Message</h5>
                                <h2 class="text-white mb-0">contact@telemedrdc.com</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-4">Vous avez des questions, des suggestions ou besoin d'aide ? Notre équipe est là pour vous accompagner. N'hésitez pas à nous écrire, et nous vous répondrons dans les plus brefs délais.</p>
                        <form method="POST" action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
                                        <label for="nom">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Votre E-mail" required>
                                        <label for="email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="sujet" placeholder="sujet" required>
                                        <label for="sujet">sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Laissez un message ici" id="message" required style="height: 200px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Envoyer un message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.44774778942!2d15.287108372323424!3d-4.32668653606875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3160af660ab5%3A0x2c4464d3fb5b1615!2sISIPA!5e0!3m2!1sfr!2scd!4v1743373169026!5m2!1sfr!2scd" style="min-height: 300px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'script-js.php' ?>
    </body>
</html>