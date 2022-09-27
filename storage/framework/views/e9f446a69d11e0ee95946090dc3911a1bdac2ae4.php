<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/destination.css">
    <link rel="stylesheet" href="bootstrap.min.js.map">
    <title class="text-danger bg-dark">KaayTukki</title>
</head>
<body>
    <header class="position-relative grds-container">
        <section class="position-fixed w-100 grd-container">
            <nav class="navbar navbar-expand-lg navbar-light container ">
                <div class="container-logo"><img src="images/logo.png" alt="image" class=" logo"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <form class="form-inline d-flex">
                        <button class="btn"  type="submit" data-bs-toggle='collapse'><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input class="form-control" type="search" placeholder="Sénégal,Toulouse,..." aria-label="Search">
                    </form>
                    <ul class="navbar-nav unemenu">
                        <li class="nav-item active"><a href="/accueil" class="nav-link maliste">Accueil</a></li>
                        <li class="nav-item"><a href="/destination" class="nav-link maliste">Destinations </a></li>
                        <li class="nav-item"><a href="#langue" class="nav-link maliste">Langues</a></li>
                        <li class="nav-item"><a href="#réservation" class="nav-link maliste">Réservation</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link maliste">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    <?php echo $__env->yieldContent("content"); ?>
<footer>
        <section class="container-foot" id="contact">
            <div class="container commentair">
                <div class="comm"><p class="text-dark text-center pt-3 para-comm"><u>Laisser un commentaire ou signaler une <span class="text-danger">erreur</span> ou un <span class="text-danger">problème</span> </u></p></div>
                <form action="POST" class="text-center formulaire">
                    <input type="text" class="ms-3 mb-2 term" placeholder="Nom*" name="nom">
                    <input type="text" placeholder="Prénom*" name="prénom" class="ms-3 term">
                    <input type="email" name="email" id="" placeholder="E-mail*" class="ms-3 mb-2 term"><br>
                    <textarea name="commentaire" id="" cols="30" rows="10" placeholder="Commentaire*" class="mt-5 mb-2 term"></textarea><br>
                    <button type="submit" class="btn mb-5 envoie">Envoyer le commentaire</button>
                </form>
            </div>
            <div class="container pt-5 pb-3 row end-part">
                <div class="col-7 end-en-d"><p class="end">&COPY; 2022 <b>KaayTukki</b> Tous droits réservés</p></div>
                <div class="col-5 tout"><p class="ms-5 reseau">Suivez-Nous</p>
                    <div class="row">
                        <div class="col-md-4 icon"><a href="" class="linked"><i class="fa-brands fa-square-facebook"></i></a></div>
                        <div class="col-md-4 icon1"><a href="" class="linked"><i class="fa-brands fa-instagram"></i></a></div>
                        <div class="col-md-4 icon2"><a href="" class="linked"><i class="fa-brands fa-whatsapp"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH D:\laragon\www\projet-stage\resources\views/app.blade.php ENDPATH**/ ?>