<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.js.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/senegal.css">
    <title>Ma destination</title>
</head>
<body>
    <header class="grds-container">
        <section class="grd-container">
            <nav class="navbar navbar-expand-lg navbar-light container ">
                <div class="container-logo"><img src="<?php echo e(asset('/images/logo.png')); ?>" alt="image" class=" logo"></div>
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
                        <li class="nav-item"><a href="/reserve" class="nav-link maliste">Réservation</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link maliste">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        <div class="position-relative image"><img src="images/monument.jfif" alt="" class="w-100 senee">
            <div class="pp"><p class="position-absolute court">Sénégal</p></div>        
            <div class="navbar2">
                <nav class="navbar navbar-expand-lg navbar-light navbar-center container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav unemenu">
                            <li class="nav-item active"><a href="#direction" class="nav-link maliste">Où aller?</a></li>
                            <li class="nav-item"><a href="#loger" class="nav-link maliste">Où loger</a></li>
                            <li class="nav-item"><a href="#divertir" class="nav-link maliste">Se divertir</a></li>
                            <li class="nav-item"><a href="#restaurant" class="nav-link maliste">Restauration</a></li>
                            <li class="nav-item"><a href="#bouger" class="nav-link maliste">Se bouger</a></li>
                            <li class="nav-item"><a href="cadeaux.html" class="nav-link maliste">Cadeaux</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="container row mt-5 container-s">
        <div class="col-8 part1">
            <div class="row mb-5 part0">
                <div class="col-md-4 imgtof"><img src="images/monument.jfif" alt="" class="w-100 tofimg"></div>
                <div class="col-md-7 txt">
                    <h5 class="txtsn">Sénégal</h5>
                    <p class="txtdesc">
                        Capitale : Dakar <br>
                        Langue officielle : Français <br>
                        Population : 13 730 000 <br>
                        Hymne National : Le Lion rouge <br>
                        Monnaie : Franc CFA (XOF) <br>
                        Fête nationale : 4 avril <br>
                        Pays frontaliers : Mauritanie, Gambie, Guinée-Bissau, Guinée, Mali</p>
                </div>
            </div>
            <div class="row part00">
                <div class="col-md-4 imgtof"><img src="images/dkar.jpg" alt="" class="w-100 tofimg"></div>
                <div class="col-md-7 txt">
                    <h5 class="txtsn">Dakar</h5>
                    <p class="txtdesc">
                        La capitale du Sénégal, Dakar, sert souvent de point de chute pour visiter le pays mais mérite amplement un séjour
                         à elle seule. Chacun de ses quartiers est différent et se 
                        découvre avec plaisir à pied ou en taxi. On apprécie 
                        l'empreinte française laissée, notamment sur l'île de Gorée 
                        qui est très belle. L'aspect cosmopolite de Dakar est aussi à 
                        prendre en compte et il se remarque notamment grâce à 
                        sa vie nocturne animée. A savoir que Dakar se situe au point 
                        le plus occidental du continent africain, sur la presqu'île du Cap-Vert.</p>
                </div>
            </div>
        </div>
        <div class="col-4 part2">
            <div class="paragraphes">
                <a href="destination.html" class="orgg"><h5 class="text-dark text-center org">Organiser votre voyage</h5></a> <br>
                <a href="reservation.html" class="btn pap">Réserver ses vols</a><br>
                <a href="reservation.html" class="btn pap"> Réserver un hôtel</a><br>
                <a href="reservation.html" class="btn pap">Réserver un Airbnb</a><br>
                <a href="https://www.expat-dakar.com " class="btn pap">Louer une voiture</a><br>
                <a href="reservation.html" class="btn pap">Rechercher une activité</a>
            </div>
        </div>  
    </section>
    <section id="direction" class="container cd">
        <h3 class="text-dark text-center mb-5 title">Où aller?</h3>
        <div class="row casab">
            <div class="col-5 img-casam"><img src="images/casa.jfif" alt="" class="w-100 casa"></div>
            <div class="col-7 text-casam"><a href="/accueil" class="lelien"><span class="text-dark sp">Les 14 plus beaux endroits à visiter au Sénégal</span><br><br>
                    Vous partez visiter le Sénégal et vous vous demandez que faire pendant votre séjour ? Découvrez les 10 plus beaux endroits à visiter. Pays d’Afrique de l’Ouest, le Sénégal borde l’Océan Atlantique. Le pays de la Teranga regorge de sites dépaysants et uniques. Veillez toutefois à faire attention sur les routes, qui s’apparentent parfois plus à des chemins de sable… Si […] 
                   <br> <br><span class="text-light mt-3 ps">Voir les incontournables</span>
            </a></div>
        </div>
    </section>
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
</html><?php /**PATH D:\laragon\www\projet-stage\resources\views/senegal.blade.php ENDPATH**/ ?>