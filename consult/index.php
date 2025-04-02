<?php
    $title = "Télé Med RDC";
    $current = 'consult';
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
                <h1 class="display-2 text-white mb-3 animated slideInDown">Consultations</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="http://<?=$_SERVER['HTTP_HOST']?>/">Accueil</a></li>
                        <li class="breadcrumb-item" aria-current="page">Consultations</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container">
                <p>Après avoir réservé votre consultation, un code unique vous est attribué. Ce code vous permet d’accéder à votre rendez-vous en toute sécurité. Il garantit une connexion rapide et confidentielle avec votre médecin.</p>
                <div class="mb-4 d-flex">
                    <div class="form-floating w-100">
                        <input type="text" class="form-control code" id="text" placeholder="Votre Code" required>
                        <label for="text">Code de consultation</label>
                    </div>
                    <button class="btn btn-outline-primary join">Rejoindre</button>
                </div>
                <div class="bg-primary w-100 conference" style="height: 400px; display: none;"></div>
            </div>
        </div>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'script-js.php' ?>
        <script src="bundle.js"></script>
    </body>
</html>