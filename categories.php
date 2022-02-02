<?php

require "controllers/admin-controller.php";
require "my-config.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
</head>

<body>

    <header class="header d-lg-block d-none">

        <div class="text-white d-flex justify-content-end m-auto">
            <?php if (session_status() == PHP_SESSION_NONE) { ?><i class="bi bi-person pt-2"></i><a class="btn text-white" href="../espacePerso.php">Se connecter</a>
            <?php } else { ?>
                <a href="../connected/<?php if ($_SESSION['login'] == 'admin') { ?>admin.php<?php } else { ?>user.php<?php } ?>" class="btn text-white fs-4"><?= $_SESSION['login'] ?></a>
            <?php } ?>
        </div>

        <a href="index.php" class="text-decoration-none">
            <h1 class="mainTitle fw-bold text-white text-center pt-5">Estenouest</h1>
        </a>


    </header>
    <div class="global m-auto">

        <nav class="navbar navbar-expand-lg m-auto">
            <div class="container-fluid m-auto">
                <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white pt-1 pe-5">Menu</span>
                </button>
                <a href="index.php" class="navbar-toggler text-white border border-dark d-flex d-lg-none text-decoration-none">Estenouest</a>

                <div class="collapse navbar-collapse text-start" id="navbarNav">
                    <ul class="navbar-nav container row">
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end ">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active" aria-current="page" href="index.php"><span class="text text-white">Accueil</span></a>
                            </div>
                        </li>
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active  text-white" aria-current="page" href="categories.php"><span class="text text-white">Catégories</span></a>
                            </div>
                        </li>
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active  text-white" aria-current="page" href="guide.php"><span class="text text-white">Guide</span></a>
                            </div>
                        </li>
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active  text-white" aria-current="page" href="blog.php"><span class="text text-white">Blog</span></a>
                            </div>
                        </li>
                        <li class="d-lg-none nav-item justify-lg-content-end">
                            <?php if (session_status() == PHP_SESSION_NONE) { ?><a class="menu text-white nav-link active" href="espacePerso.php">Se connecter</a>
                            <?php } else { ?>
                                <a href="../connected/<?php if ($_SESSION['login'] == 'admin') { ?>admin.php<?php } else { ?>user.php<?php } ?>" class="btn text-white fs-4"><?= $_SESSION['login'] ?></a>
                            <?php } ?>
                        </li>
                        <?php if (isset($_SESSION['login'])) { ?>
                            <li class="d-lg-none nav-item justify-lg-content-end">
                                <form action="#" method="POST">
                                    <div><input type="submit" name="disconnect" value="Se déconnecter" class="btn btn-dark"></div>
                                </form>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="categorie-intro text-center m-auto h2 fw-bold pt-5 ">Pour se détendre ou se dépenser, le temps d’un week-end, une semaine ou plus, il y a une destination faite pour vous!</div>
        <div class="row pt-5 m-auto">
            <div class="categorie-picture col-lg-6 text-lg-end m-auto">
                <a href="views/montagne.php">
                    <img src="assets/img/montagne2.jpg" alt="photo de montagne" class="img-categorie rounded">
                    <div class="categorie-label-left m-auto">
                        <div>Montagne</div>
                    </div>
                </a>
            </div>
            <div class="categorie-picture col-lg-6 text-lg-start m-auto">
                <a href="views/plage.php">
                    <img src="assets/img/plage2.jpg" alt="photo de plage" class="img-categorie rounded">
                    <div class="categorie-label-right m-auto">
                        <div>Plage</div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row pt-3 m-auto">
            <div class="categorie-picture col-lg-6 text-lg-end m-auto">
                <a href="views/ville.php">
                    <img src="assets/img/italie.jpg" alt="photo de montagne" class="img-categorie rounded">
                    <div class="categorie-label-left m-auto">
                        <div>Ville</div>
                    </div>
                </a>
            </div>
            <div class="categorie-picture col-lg-6 text-lg-start m-auto">
                <a href="views/sport.php">
                    <img src="assets/img/sport.jpg" alt="photo de plage" class="img-categorie rounded">
                    <div class="categorie-label-right m-auto">
                        <div>Sport</div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row pt-3 pb-5 m-auto">

            <div class="categorie-picture col-lg-6 text-lg-end m-auto">
                <a href="views/histoire.php">
                    <img src="assets/img/petra.jpg" alt="photo de montagne" class="img-categorie rounded">
                    <div class="categorie-label-left m-auto">
                        <div>Histoire</div>
                    </div>
                </a>
            </div>


            <div class="categorie-picture col-lg-6 text-lg-start m-auto">
                <a href="views/gastronomie.php">
                    <img src="assets/img/jambon.jpg" alt="photo de plage" class="img-categorie rounded">
                    <div class="categorie-label-right m-auto">
                        <div>Gastronomie</div>
                    </div>
                </a>
            </div>

        </div>

        <footer class="footer m-auto" style="height: 15vh;">
            <div class="d-flex justify-content-evenly pt-5 m-auto">
                <div class="m-auto">
                    <p class="text-white">©Estenouest</p>
                </div>
                <div class="m-auto">
                    <p class="text-white">Qui sommes-nous?</p>
                </div>
                <div class="m-auto">
                    <p class="text-white">Mentions Légales</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>