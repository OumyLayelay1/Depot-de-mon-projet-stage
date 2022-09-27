<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/acceuil.css">
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
        <div class="pt-custom">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/bg.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p><h1 class="text-dark text-carousel">Organiser votre <br> <span class="pop">Voyage sur mesure</span></h1></p>
                        <div class=" link"><a href="/destination" class="btn ici "><b class="text-light">Par ici</b></a></div>
                    </div>
                </div>    
                  <div class="carousel-item">
                        <img src="images/rizpoisson.jfif" class="d-block w-100" alt="carousel">
                        <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-dark text-carousell">Riz au poisson ou Thiébou dieune</h3>
                        </div>
                  </div>
                    <div class="carousel-item">
                        <img src="images/signare.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-dark text-carousell">Les signares de Saint-Louis du Sénégal</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/lutte.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-dark text-carousel">La lutte, le sport national des sénégalais</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/lebou.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-dark text-carousel">le ndawrabine des lébous </h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/kankourang.jfif" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-dark text-carousel">Les kankourangs de Mbour</h3>
                        </div>
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
        </div>    
    </header>
    <section class="mt-5 apropos">
        <section class="mt-5 mb-5 container propos">
            <h2 class="text-dark pb-5 text-center">Quelle est l'objectif de "KaayTukki"?</h2>
            <div class="row question">
                <div class="col-4 reponse">
                    <h6 class="text-muted text-center">L'expérience au centre du voyage</h6>
                    <p class="text-center rp">
                        Vivre des expériences de vie uniques est
                        le principal moteur de tout voyage. Nous recherchons à vous créer ces moments à toutes les étapes de votre voyage.
                    </p>
                </div>
                <div class="col-4 reponse">
                    <h6 class="text-muted text-center">Se créer des souvenirs</h6>
                    <p class="text-center rp">Le voyage est une machine à souvenirs. 
                        Nous voulons vous proposer le meilleur pour des moments de découvertes et d'aventures mémorables.</p>
                </div>
                <div class="col-4 reponse">
                    <h6 class="text-muted text-center">Trouver le meilleur de chaque destination</h6>
                    <p class="text-center rp">Chaque destination sur terre est différente, unique. 
                        Nous séléctionnons le meilleur de chaque lieu pour que vous ne soyez jamais déçu de votre voyage !</p>
                </div>
            </div>
        </section>
    </section>
    <section class="container main-image">
        <div class="row p-5 m-3 main-contain">
           <div class="col-md-3 plan">
                <div class="img1"><a href="/reserve" class="organise"><img src="images/Group.png" alt="" class="w-75 figma"></a></div>
                <a href="/reserve" class="organise"><h1 class="text-dark title">Planifier</h1></a>
                <div class="text-muted text-para">Confiez-nous vos rêves d'évasion: en famille ou entre amis nous trouverons la formule qui comblera vos attentes.</div>
           </div>
           <div class="col-md-3 plan">
                <div class="img1"><a href="/destination" class="organise"><img src="images/Frame2.png" alt="" class="w-75 figma1"></a></div>
                <a href="/destination" class="organise"><h1 class="text-dark mt-1 title">Organiser</h1></a>
                <div class="text-muted text-para">Bénéficiez de l'expertise de nos spécialistes de chaque destination, ils vous accompagnent dans la réalisation de votre voyage.</div>
            </div>
            <div class="col-md-3 plan">
                <div class="img1"><a href="/destination" class="organise"><img src="images/frame.png" alt="" class="figma1"></a></div>
                <a href="/destination" class="organise"><h1 class="text-dark mt-3 title">Voyager</h1></a>
                <div class="text-muted text-para">Nous nous chargeons d'assurer votre sécurité et de veiller à votre pleine sérénité tout au long de vos voyages.</div>
            </div>
        </div>
    </section>
    <section class="senegal">
        <div class="container row pb-2 pt-5 sn">
            <div class="col-sm-4 contain-img"><img src="images/senegal.jpg" alt="" class="w-100 pt-5 sen"></div>
            <div class="col-sm-8 sn">
                <p class="text-justify ps-5 pt-2 text-dark galsen">
                    Situé dans la partie la plus occidentale du continent, le Sénégal est bordé par la Mauritanie, le Mali, la Guinée et la Guinée-Bissau. 
                    Le Sénégal est situé sur la pointe extrême occidentale de l’Afrique, dans sa partie la plus avancée dans l’océan Atlantique. Cette situation géographique stratégique place le Sénégal à la frontière des opportunités d’investissement et de commerce dans la région. Le Sénégal relie l’Afrique au reste du monde; il sert également de passerelle importante vers les principaux marchés d’exportation en Europe, en Asie et dans les Amériques. Les indicateurs économiques sont en constante amélioration depuis plusieurs années.
                    Au Sénégal on célèbre la fête de la Korité qui annonce la fin du mois de Ramadan, Tabask, la fête du sacrifice du mouton, Tamkharite ou Achoura se fête le 10ème jour du nouvel an musulman et Mouled qui est la célébration de l'anniversaire du prophète Mahomet.
                    Et si vous êtes intéressés des festivals, manifestations culturelles, sport et concert musical vous pouvez  vous rapprocher de nos guides touristiques
                    afin de découvrir le pays de la "térangua". 
                    <br>Voulez vous faire une séjour au Sénégal ? Découvrez les 14 endroits les plus beaux à visiter. En ce qui concerne votre 
                    logement ne vous inquiété pas nous avions des hotels de luxe qui vous conviendrait le mieux.

                </p>
            </div>
        </div>
    </section>
    <section class="container img-text">
                <div class="pt-4 dakar">
                    <div class="text-center img-dakar">1.Dakar <br> <img src="images/dkar.jpg" alt="" class="w-75 image1"></div>
                    <div class="pb-4 text-dakar"><p class="description">
                        Si vous visitez le Sénégal, vous devez aller à Dakar, capitale du Sénégal, qui représente avant tout le poumon économique de tout le pays. Avec plus de deux millions d’habitants, la ville est réputée pour sa vie active. Cette agitation se découvre le long des nombreux grands marchés comme Sandaga, Kermel ou encore Tilène. Place ensuite à la visite du palais présidentiel, à la Place de l’Indépendance, à la Grande Mosquée de Dakar, au port de la ville… En périphérie proche, la pointe des Almadies est un lieu très prisé. Découvrez aussi le marché artisanal de Soumbédioune ou l’imposant Monument de la Renaissance Africaine. Cette structure en bronze à Ouakam, se dresse à 52 mètres de haut !
                    </p> 
                    <a href="/senegal" class="btn voir">Voir plus</a>
                   </div>
                </div>
                <div class="ilegoree">
                    <div class="text-center img-ile">2.île de Gorée <br> <img src="images/goree.jpg" alt="" class="w-75 image2"></div>
                    <div class="pb-4 text-ile"><p class="description">
                        Gorée est une ville du Sénégal assez prisée des touristes pour son histoire liée à l’esclavage. L’île de Gorée est située non loin de Dakar et est accessible en chaloupe chaque jour depuis le port de Dakar. Symbole de la période de l’esclavage, la ville constitue une ancienne plaque tournante. Elle a ouvert de nombreux musées comme le Musée de la Femme ou La Maison des Esclaves. Cette île sans voiture s’ouvre est calme.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="lacrose">
                    <div class="text-center img-lacrose">3.Lac Rose <br> <img src="images/lacrose.jpg" alt="" class="w-75 image3"></div>
                    <div class="pb-4 text-lacrose"><p class="description">
                        Comment visiter le Sénégal sans voir Le lac Rose, situé à 30 kilomètres au nord-est de la capitale. Les touristes aiment cette excursion. Attention, la teinte rosée du lac peut varier. Le lac apparaît plus rose en saison sèche, mais aussi en milieu de journée. Cette teinte est due à la présence d’une algue oxydant le fer. Les couleurs évoluent selon les rayons du soleil, pouvant virer au mauve si la couleur est très présente, voire ne pas faire apparaître de rose du tout certains jours. Les travailleurs du sel extraient l’or blanc du lac au milieu des nombreuses dunes de sel. Le spectacle est assez fascinant. Depuis Dakar, il est possible de rejoindre le lac Rose depuis la plage à marée basse ou par la route numéro 1 en une heure.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class=" ngore">
                    <div class="text-center img-ngor">4.Ngor <br><img src="images/ngor.jpg" alt="" class="w-75 image4"></div>
                    <div class="pb-4 text-ngor"><p class="description">
                        Comment visiter le Sénégal sans voir ses magnifiques plages. Certaines sont d’ailleurs les plus souvent prises en photo. Les plus belles se situent à proximité de Dakar, comme celles sur l’île de N’Gor. Ici, surfeurs et amateurs de fruits se côtoient. Découvrez aussi celle d’Ouakam ou celles au sud de Dakar, généralement plus petites.
                      Ne manquez pas Toubab Dialao, avec ses falaises rouges illuminées à la nuit tombée, un must ! Visiter le Sénégal ne peut se faire sans la découverte des lieux de pêche et de vente. Attention toutefois à la forte odeur, mais cela fait partie du folklore local… Les pêcheurs de Mbour, Somone et Thiès sont bien connus. Vous découvrirez même comment d’anciens frigos, non fonctionnels, servent à la conservation du poisson frais…
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="casamance">
                    <div class="text-center img-casa">5.Casamance <br> <img src="images/casamance1.jpg" alt="" class="w-75 image5"></div>
                    <div class="pb-4 text-casa"><p class="description">
                        Pour bien visiter le Sénégal, n’hésitez pas à aller au plus proche des villages, dans la Casamance, région située au sud-ouest du Sénégal, entre la Guinée-Bissau et la Gambie. Elle est considérée pour certains comme la plus belle région du pays. Elle tire son nom du fleuve et compte de nombreuses îles et des milliers d’oiseaux. Avec une végétation luxuriante, des rizières et des mangroves, partez à la découverte des villes de Ziguinchor, les plages de Cap Skirring, Oussouye, Kolda, Sédhiou, Vélingara… Entre les délicieux fruits et les rencontres avec les habitants, vous allez multiplier les découvertes.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="saintlouis">
                    <div class="text-center ST-louis">6.Saint-Louis <br> <img src="images/saintlouis.jfif" alt="" class="w-75 image6"></div>
                    <div class="pb-4 text-stlouis"><p class="description">
                        Considérée pour certaines personnes comme la plus belle ville du Sénégal, Saint-Louis est l’ancienne capitale. Aujourd’hui c’est l’une des plus grandes villes de ce pays africain, elle est chargée de culture et d’histoire. Depuis l’année 2000, elle est d’ailleurs classée au patrimoine mondial de l’Unesco.
                      La ville est en pleine mutation avec l’arrivée des touristes de plus en plus nombreux. Mais, elle a conservé ses bâtiments historiques comme le Palais du Gouverneur, sa cathédrale et ses mosquées. Bien différente de Dakar, Saint-Louis est une ville plus traditionnelle, malgré son homonyme avec la ville américaine. On y découvre une architecture conservée de l’époque coloniale, ainsi que de belles maisons à découvrir. Saint-Louis a été la capitale du Sénégal entre 1872 et 1957. Sa bonne situation, proche du fleuve, a attiré les colons anglais et français jusqu’à ce que le Sénégal devienne indépendant en 1960. Que faire d’autre à Saint-Louis ? Se diriger vers le pont Faidherbe et sa cité portuaire. À l’heure où les pêcheurs rentrent avec le poisson du jour, l’animation bat son plein.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="sahel">
                    <div class="text-center img-sahel">7.Le Sahel et les réserves <br> <img src="images/sahell.jpg" alt="" class="w-75 image7"></div>
                    <div class="pb-4 text-sahel"><p class="description">
                        Vous avez l’âme d’un baroudeur en quête d’aventures ? Le Sahel et sa grande forêt tropicale bordent le Sénégal. Cette belle situation géographique est propice aux découvertes uniques. Tentez l’aventure en traversant les vallées désertiques. Découvrez des baobabs centenaires impressionnants. Étonnez-vous avec la faune et la flore, visitez les réserves et parcs, assez nombreux au Sénégal. Vous allez pouvoir faire de magnifiques photos à bord de votre 4 x 4.
                        Découvrez le sentier écologique de la réserve de Mbour ou l’île de la Madeleine située au Nord de Dakar. Partez au parc forestier et zoologique de Hann, au parc national de Niokolo-Koba. Il y a aussi le parc national du delta du Saloum et le centre de protection des Tortues du Sénégal.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
            </div>
            <div class="img-text2">
                <div class="kedougou">
                    <div class="text-center img-kedougou">8.Kedougou <br><img src="images/kedougou.jpg" alt="" class="w-75 images1"></div>
                    <div class="pb-4 text-"><p class="description">
                        Pour un dépaysement total, la région de Kédougou est un trésor où se mêlent différentes ethnies : Soninkés, Jalonkés (ou Dialonké), Bassaris ou Bediks. Même si la population est accueillante, il est conseillé de prendre un guide pour s’y rendre et de ne pas hésiter à apporter des cadeaux aux habitants lors de la visite. Si la nature vous gagne, ne manquez pas de visiter le Parc national de Niokolo Koba et ses beaux paysages.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="cercleM">
                    <div class="text-center img-cercleM">9.Le cercle mégalithique <br> <img src="images/cerclemega.jpg" alt="" class="w-75 images2"></div>
                    <div class="pb-4 text-cercleM"><p class="description">
                        Visiter le Sénégal sans voir la Gambie et ses cercles mégalithiques classés au patrimoine de l’Unesco est impensable. Ces sculptures, placées près des lieux de sépulture, sont bien travaillées et constituent le meilleur site mégalithique au monde, même si les cercles de pierres sont plus petits que ceux de Stonehenge en Angleterre.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="parcdioudj">
                    <div class="text-center img-parcdioudj">10.Le parc national de dioudj <br> <img src="images/parc.jpg" alt="" class="w-75 images3"></div>
                    <div class="pb-4 text-parcdioudj"><p class="description">
                        Visiter le Sénégal, c’est aussi admirer la faune et la flore qui le constituent. Le parc national de Djoudj est le sanctuaire d’oiseaux le plus important au monde. Sur 60 000 hectares, le lieu est classé au patrimoine mondial de l’Unesco. Il fait cohabiter des milliers d’oiseaux et d’animaux. On retrouve les oies de Gambie, les vautours, les flamants roses, les échassiers, les pélicans gris, les canards… Mais aussi les spatules, les vautours, les aigrettes, ou encore pythons, singes rouges, varans, crocodiles et phacochères. Ce site magique est situé à soixante kilomètres au nord de la ville de Saint-Louis. Il est ouvert de novembre à juin.
                    </p><a href="senegal.html" class="btn voir">Voir plus</a></div>
                </div>
                <div class="carabane">
                    <div class="text-center img-carabane">11.Carabane <br> <img src="images/carabane.jpg" alt="" class="w-75 images4"></div>
                    <div class="pb-4 text-carabane"><p class="description">
                        Cet endroit calme et paisible reflète l’authenticité du Sénégal. Ici, nulle route, ni voiture, les déplacements se font en pirogue ou à pied, pour découvrir le riche patrimoine culturel, traditionnel, culturel ou historique. Le site est lui aussi classé au patrimoine mondial de l’Unesco et plaît avec son église de 1885, ses plages et sa pêche. En somme, visiter le Sénégal c’est découvrir un héritage artistique et local.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class=" touba">
                    <div class="text-center img-touba">12.Touba <br> <img src="images/touba1.jpg" alt="" class="w-75 images6"></div>
                    <div class="pb-4 text-touba"><p class="description">
                        La ville sénégalaise de Touba a une empreinte religieuse forte avec sa confrérie musulmane. Fondée en 1887, elle est aujourd’hui une belle ville urbanisée. Ne manquez pas de visiter la grande mosquée de Touba ou la bibliothèque avec les écrits du fondateur de la cité, à savoir Cheikh Ahmadou Bamba. Le 18e jour du mois de safar de l’hégire, tout le pays du Sénégal vit au rythme de la fête du Magal de Touba. Les différentes populations participent à cette commémoration du départ en exil du fondateur. Des séances religieuses comme des offrandes de repas sont réalisées.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="popenguine">
                    <div class="text-center img-popenguine">13.Popenguine <br> <img src="images/popenguine.jpg" alt="" class="w-75 images7"></div>
                    <div class="pb-4 text-popenguine"><p class="description">
                        Le lieu abrite la Vierge noire et différentes statues de Saints dans la grotte de Popenguine, à 55 kilomètres au nord de Dakar. Le site est préservé et attire chaque année de plus en plus de visiteurs.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
                <div class="thies">
                    <div class="text-center img-popenguine">14.Thiés <br><img src="images/thies.jfif" alt="" class="w-75 images7"></div>
                    <div class="pb-4 text-popenguine"><p class="description">
                        La ville de Thiès est le deuxième poumon économique du pays. Cette ville, à la fois bouillonnante et discrète, mérite le détour. Elle est agréable à vivre et elle a su préserver son charme d’antan. Moins stressante que la capitale Dakar, on se laisse ici le temps de vivre. Vous allez pouvoir flâner dans les marchés, sans constamment être sollicité. Pour visiter complètement Thiès, ne manquez pas le quartier Ibrahima Sarr, la Place de France, la promenade des Thiessois ou la manufacture sénégalaise dédiée aux arts décoratifs.
                    </p><a href="/senegal" class="btn voir">Voir plus</a></div>
                </div>
            </div>
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
</html><?php /**PATH D:\laragon\www\projet-stage\resources\views/accueil.blade.php ENDPATH**/ ?>