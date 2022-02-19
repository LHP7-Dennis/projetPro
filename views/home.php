<?php

session_start();


require_once "../my-config.php";
require_once "../controllers/admin-controller.php";
require_once "../controllers/homeController.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>

    <header class="header d-lg-block d-none">

        <div class="text-white d-flex justify-content-end m-auto">
            <?php if (empty($_SESSION['login'])) { ?><i class="bi bi-person pt-2"></i><a class="btn text-white" href="../espacePerso.php">Se connecter</a>
        </div>
    <?php } else { ?>
        <a href="../connected/<?php if ($_SESSION['role'] == '1') { ?>admin.php<?php } else { ?>user.php<?php } ?>" class="btn text-white fs-4"><i class="bi bi-person pt-2 pe-2"></i><?= $_SESSION['name'] ?></a>
        </div>

        <div class="text-white d-flex justify-content-end m-auto pe-2">
            <form action="home.php" method="POST" class="logout">
                <div class="fs-5 logout"><i class="bi bi-box-arrow-left"></i><input type="submit" name="disconnect" value="Se déconnecter" class="btn logout text-white fs-6"></div>
            </form>
        </div>
    <?php } ?>

    <a href="../index.php" class="text-decoration-none">
        <h1 class="mainTitle fw-bold text-white text-center pt-5">Estenouest</h1>
        <div class="text-white text-center fs-4 fst-italic">Choisissez votre prochaine destination et partagez vos expériences</div>

    </a>


    </header>
    <div class="global">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid m-0">
                <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white pt-1 pe-5">Menu</span>
                </button>
                <a href="../index.php" class="navbar-toggler text-white border border-dark d-flex d-lg-none text-decoration-none">Estenouest</a>

                <div class="collapse navbar-collapse text-start" id="navbarNav">
                    <ul class="navbar-nav container row">
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end ">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active" aria-current="page" href="../index.php"><span class="text text-white">Accueil</span></a>
                            </div>
                        </li>
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active  text-white" aria-current="page" href="../categories.php"><span class="text text-white">Catégories</span></a>
                            </div>
                        </li>
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active  text-white" aria-current="page" href="../guide.php"><span class="text text-white">Guide</span></a>
                            </div>
                        </li>
                        <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                            <div class="text-start text-lg-center">
                                <a class="menu nav-link active  text-white" aria-current="page" href="../blog.php"><span class="text text-white">Blog</span></a>
                            </div>
                        </li>
                        <li class="d-lg-none nav-item justify-lg-content-end">
                            <?php if (empty($_SESSION)) { ?><a class="menu text-white nav-link active" href="../espacePerso.php">Se connecter</a>
                            <?php } else { ?>
                                <a href="../connected/<?php if ($_SESSION['role'] == '1') { ?>admin.php<?php } else { ?>user.php<?php } ?>" class="btn text-white fs-4"><?= $_SESSION['name'] ?></a>
                            <?php } ?>
                        </li>
                        <?php if (isset($_SESSION['login'])) { ?>
                            <li class="d-lg-none nav-item justify-lg-content-end">
                                <form action="home.php" method="POST">
                                    <div><input type="submit" name="disconnect" value="Se déconnecter" class="btn btn-dark"></div>
                                </form>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>

        <figure class="text-center pt-5 pb-3">
            <blockquote class="blockquote">
                <p class="quote">« Voyager vous laisse d'abord sans voix, avant de vous transformer en conteur. »</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Ibn Battuta, explorateur
            </figcaption>
        </figure>

        <h2 class="h2 text-center fw-bold pt-2">Choisissez, partez, revenez, partagez!</h2>


        <div class="row justify-content-evenly m-auto">
            <div class="card border border-white" style="width: 19rem;">
                <img src="../assets/img/questionmark.jpg" class="card-img-top" alt="photo de papiers avec points d'interrogations">
                <div class="card-body">
                    <p class="card-text">Commencez par choisir une destinations dans <span><a href="../categories.php" class=" fw-bold text-dark">nos categories</a></span> si vous n’en avez pas, ou repondez au <span><a href="../guide.php" class="fw-bold text-dark">questionnaire</a></span>!</p>
                </div>
            </div>

            <div class="card border border-white" style="width: 19rem;">
                <img src="../assets/img/computer.jpg" class="card-img-top" alt="photo de papiers avec points d'interrogations">
                <div class="card-body">
                    <p class="card-text">Réservez comme vous voulez! skyscanner, Booking.com, Expedia, directement aupres des compagnies aériennes, hôtels...etc</p>
                </div>
            </div>

            <div class="card border border-white" style="width: 19rem;">
                <img src="../assets/img/whenreturn.jpg" class="card-img-top" alt="photo de papiers avec points d'interrogations">
                <div class="card-body">
                    <p class="card-text">Ajoutez votre voyage dans votre carnet de voyage disponible sur votre <span><a href="../guide.php" class="fw-bold text-dark">espace personnel</a></span>!</p>
                </div>
            </div>

            <div class="card border border-white" style="width: 19rem;">
                <img src="../assets/img/write.jpg" class="card-img-top" alt="photo de papiers avec points d'interrogations">
                <div class="card-body">
                    <p class="card-text">Partagez votre expérience sur le<span><a href="../blog.php" class="fw-bold text-dark"> blog!</a></span> Une simple photo ou un récit de votre voyage, pour inspirer, donner envies à d’autres!</p>
                </div>
            </div>

        </div>

        <p class="text-center h4 pt-4">Vous pouvez ensuite préparer votre prochain voyage en ajoutant des destinations à votre Wish List!</p>

        <p class="text-center h3 pt-4 fw-bold pb-4">Destinations les plus prisées par nos utilisateurs</p>

        <!-- ****************************************début caroussel************************************************************* -->

        <div id="carouselExampleCaptions" class="carousel slide d-flex m-auto pb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <?php foreach ($statArray as $stat) { ?>

                    <div class="carousel-item active">
                        <a href="detailsDestination.php?id=<?= $stat['des_id'] ?>">
                            <img src="../assets/img/img_destinations/<?= $stat['des_picture'] ?>" class="d-block w-100" alt="Meilleure Destination">
                            <div class="pt-4">
                                <div class="carousel-caption ">
                                    <div class="h3 bg-dark rounded"><?= $stat['des_title'] ?></div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>

                <?php foreach ($statOtherArray as $other) { ?>

                    <div class="carousel-item">
                        <a href="detailsDestination.php?id=<?= $other['des_id'] ?>">
                            <img src="../assets/img/img_destinations/<?= $other['des_picture'] ?>" class="d-block w-100" alt="...">
                            <div class="pt-4">
                                <div class="carousel-caption">
                                    <div class="h3 bg-dark rounded"><?= $other['des_title'] ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- **********************************************fin caroussel**************************************************** -->
    </div>






    <footer class="footer" style="height: 15vh;">
        <div class="d-flex justify-content-evenly pt-5">
            <div class="">
                <p class="text-white">©Estenouest</p>
            </div>
            <div class="">
                <p class="text-white">Qui sommes-nous?</p>
            </div>
            <div class="">
                <p class="text-white">Mentions Légales</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>