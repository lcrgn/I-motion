<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
        <script src="https://kit.fontawesome.com/2fe7c14157.js" crossorigin="anonymous"></script>

        <link href="../src/styles/style.css" rel="stylesheet" type="text/css"/>
        
        <title> <?= $title ?> </title>
    </head>
    <body>
        <header class="p-3">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="bg-logo d-flex align-items-center justify-content-center rounded-1">
                    <i class="fa-solid fa-igloo logo"></i>
                </div>

                <form class="mb-3 mb-lg-0 me-lg-3 col-4" role="search">
                    <input type="search" class="form-control form-control-dark search rounded-5" placeholder="Rechercher..." aria-label="Search">
                </form>

                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Accueil</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Connexion</button>
                    <button type="button" class="btn btn-warning  subscribe">Inscription</button>
                </div>
                </div>
            </div>
        </header>



        <!-- -------------------------------------------------------------------------------------------------------- -->


        <nav class="navbar navbar-expand-md " aria-label="Fourth navbar example">
    <div class="container-fluid px-5 d-flex justify-content-between">

      
            <div class="bg-logo d-flex align-items-center justify-content-center rounded-1 me-5">
                <i class="fa-solid fa-igloo logo"></i>
            </div>

            <form role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>

        

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse position-relative" id="navbarsExample04">
      

       <div class=" d-flex align-items-center position-absolute end-0">
       <a class="nav-link active me-3" aria-current="page" href="#">Accueil</a>

                    <button type="button" class="btn btn-outline-dark text-dark me-3">Connexion</button>
                    <button type="button" class="btn btn-warning  subscribe  mr-4">Inscription</button>
            </div>
      </div>


    </div>
  </nav>



        <!-- -------------------------------------------------------------------------------------------------------- -->
















        <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 border-top fixed-bottom">
            <div class="d-flex align-items-center justify-content-center">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <div class="text-center">
                    <a href="#" class="mentions">Mentions légales</a>
                    <p class="mb-3 mb-md-0 text-muted">© 2022 TeaMotionDamages, Inc</p>
                </div>
                <i class="fa-brands fa-facebook " ></i>
                <i class="fa-brands fa-tiktok"></i>
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"></a>
            </div>
        </footer>
    </body>
</html>