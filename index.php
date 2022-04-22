<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>alpha | diop official website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand  fw-bold" href="index.php"><span>Alpha</span> Diop
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" arial-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Qui suis-je ?</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a> 
                        </li>
                    </ul>
                </div>  
            </div>
        </nav>
    </header>
    <main>
        <section id="home">
            <div class="container">
                <div class="row align-items-center gy-4 gy-md-0">
                    <div class="col-12 col-md-6" style="margin-top: 60px;">
                        <h1 class="fw-bold" >Je suis Alpha Diop Développeur et Designer Web</h1>
                        <h2 class="fw-light" >Bienvenue dans mon univers créatif</h2>
                        <a href=""><i class="bi bi-github"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-telegram"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="py-5">
            <!--alert messages start-->
            <?php echo $alert; ?>
            <!--alert messages end-->
            <div class="container">
                <h1 class="text-center">Contact</h1>
                <form class="contact" action="" method="post">
                    <label for="" class="mb-3">Nom Complet</label>
                    <input type="text" name="name" class="form-control mb-3" required>
                    <label for="" class="mb-3">Adresse Email</label>
                    <input type="email" name="email" class="form-control mb-3" required>
                    <label for="" class="mb-3">Message</label>
                    <textarea name="message" rows="5" class="form-control mb-3" required></textarea>
                    <button type="submit" name="submit" class="form-control send-btn mb-3">Envoyer</button>
                </form>
            </div>
            <script type="text/javascript">
            if(window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            </script>
        </section>
        <footer>
            <h6 class="text-center">All rights reserved Alpha Diop &#169 2022</h6>
        </footer>
    </main>
</body>
</html>