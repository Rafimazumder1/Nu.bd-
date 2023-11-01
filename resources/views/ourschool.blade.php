<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="School Responsive HTML5 Template">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Title -->
    <title>NEDUBD SCHOOL</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fontend') }}/assets/images/favicon.png" />
    <!-- Stylesheet -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/fontawesome.min.css">
    <!-- normalize -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/normalize.css">
    <!-- Jquery Ul -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/jquery-ui.min.css">
    <!-- Jquery Ui Theme -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/jquery-ui.theme.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/owl.carousel.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/ourschool.css">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Start header Area -->
    <header class="header-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="header-top-left-menu">
                            <ul>
                                <li><a href="#"><i class="fas fa-envelope"></i>bis@gmail.com</a></li>
                                <li><a href="#"><i class="fas fa-phone"></i>+8804478777911</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="header-top-right-admin">
                            <ul>

                                <li><a href="#">mail</a></li>
                                <a href="{{ route('login') }}">Login</a>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row align-item-center">
                    <div class="col-xl-8">
                        <div class="school-logo">
                            <a href="#">
                                <img src="{{ asset('fontend') }}/assets/images/logo/logo-2.png" alt="School Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="social-icon-area">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-menu-area">
            <div class="container">
                <div class="row align-item-center">
                    <div class="col-xl-9">
                        <div class="header-manu-content">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Our School</a></li>
                                <li><a href="#">About Us</a></li>
                                <li>
                                    <a href="#">Admission</a>
                                    <ul class="school-dropdown">
                                        <li><a href="#">dropdown Item 01</a></li>
                                        <li><a href="#">dropdown Item 01</a></li>
                                        <li><a href="#">dropdown Item 01</a></li>
                                        <li><a href="#">dropdown Item 01</a></li>
                                    </ul>
                                </li>
                                <li>
                                <li><a href="#">Students</a></li>
                                <li><a href="#">Result</a></li>
                                <li><a href="#">Notice</a></li>
                                <li><a href="{{ route('contact') }}">contact us</a></li>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="manu-search-box">
                            <input type="text" placeholder="Search for anything...">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
        class="object-fit-cover border rounded" alt="...">
        <div class="carousel-inner" style="height: 413px">
            <div class="carousel-item active" data-bs-interval="111000">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/695ea478742903.5cd9a7094c4eb.jpg"
                    class="d-block w-100" class="object-fit-cover border rounded" alt="..."
                    style="height: 400px">
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/695ea478742903.5cd9a7094c4eb.jpg"
                    class="d-block w-100" class="object-fit-cover border rounded" alt="..."
                    style="height: 400px">
            </div>
            <div class="carousel-item"data-bs-interval="1000">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/695ea478742903.5cd9a7094c4eb.jpg"
                    class="d-block w-100" class="object-fit-cover border rounded" alt="..."
                    style="height: 400px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev" style="height: 400px">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next" style="height: 400px">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


<div class="our_sc">
    <div class="card">
        Magic Card
      </div>
    </div>
<div class="our_sc">
    <div class="card">
        Magic Card
      </div>
    </div>
<div class="our_sc">
    <div class="card">
        Magic Card
      </div>
    </div>
      
      <a href="https://mythrillfiction.com/" target="_blank">Mythrill</a>
</body>

</html>
