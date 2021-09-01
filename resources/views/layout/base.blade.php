<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Portfolio | Valerius Iman S</title>
</head>
<body id="home">

<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #1597BB">
    <div class="container">
        <a class="navbar-brand" href="#">Valerius Iman</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Nav -->

<!-- Jumbotron -->
<section class="jumbotron text-center" style="padding-top: 5rem;">
    <img src="{{asset('img/profil.jpg')}}" alt="profil" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Valerius Iman Supriyatno</h1>
    <p class="lead">Web Developer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
              d="M0,224L48,240C96,256,192,288,288,282.7C384,277,480,235,576,208C672,181,768,171,864,192C960,213,1056,267,1152,288C1248,309,1344,299,1392,293.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>
<!-- Akhir Jumbotron -->

<!-- About -->
<section id="about" style="padding-top: 5rem;">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row text-center justify-content-center fs-5">
            <div class="col-md-4 mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur culpa illum impedit officiis
                perspiciatis quae rem sint sit temporibus voluptates.
            </div>
            <div class="col-md-4 mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam aliquid cumque deserunt
                eligendi fugit id illum laboriosam maxime, nesciunt quas repellendus, similique suscipit vel!
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#deedf0" fill-opacity="1"
              d="M0,256L48,250.7C96,245,192,235,288,208C384,181,480,139,576,149.3C672,160,768,224,864,245.3C960,267,1056,245,1152,245.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>
<!-- Akhir About -->

<!-- Projects -->
<section id="projects" class="jumbotron" style="padding-top: 5rem;">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>My Projects</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('img/logistic.jpg')}}" class="card-img-top" alt="logistic">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('img/rental.jpg')}}" class="card-img-top" alt="rental">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('img/personalia.jpg')}}" class="card-img-top" alt="personalia">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('img/surat.jpg')}}" class="card-img-top" alt="surat">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('img/perpustakaan.jpg')}}" class="card-img-top" alt="perpustakaan">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
              d="M0,160L48,149.3C96,139,192,117,288,101.3C384,85,480,75,576,96C672,117,768,171,864,192C960,213,1056,203,1152,170.7C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>
<!-- Akhir Projects -->

<!-- Contact -->
<section id="contact" style="padding-top: 5rem;">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1597bb" fill-opacity="1"
              d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,181.3C672,160,768,96,864,101.3C960,107,1056,181,1152,213.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>
<!-- Akhir Contact -->

<!-- Footer -->
<footer class="text-white text-center pb-5" style="background-color: #1597BB;">
    <p>Copyright © 2021 | All Rights Reserved</p>
</footer>
<!-- Akhir Footer -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
