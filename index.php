<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Alifi's SITE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->

        <!-- Topbar End -->
        
        <?php
            include_once 'koneksi.php';
            include_once 'models/Agama.php';
            include_once 'models/Person.php';
            include_once 'models/Member.php';
            include_once 'topbar.php';
            include_once 'menu.php';
             //tangkap request di URL
        if(isset($_REQUEST['hal'])){
            $hal = $_REQUEST['hal'];
            if(!empty($hal)){
                include_once $hal.'.php';
            }
        }
        else{
            include_once 'home.php';
        }
            include_once 'about.php';
            include_once 'gallery.php';
            include_once 'projek.php';
            ?>

        <!-- Navbar Start -->

        <!-- Navbar End -->


        <!-- Carousel Start -->
       
        <!-- Carousel End -->

        
        <!-- Get In Touch Start -->
        <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="container py-5">
                <div class="bg-light px-4 py-5 rounded">
                    <div class="text-center">
                        <h1 class="display-5 mb-5">Find Your Pest Control Services</h1>
                    </div>
                    <form class="text-center mb-4" action="#">
                        <div class="row g-4">
                            <div class="col-xl-10 col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-xl-3">
                                        <select class="form-select p-3 border-0">
                                            <option value="Type Of Service" class="">Type Of Service</option>
                                            <option value="Pest Control-2">Pest Control-2</option>
                                            <option value="Pest Control-3">Pest Control-3</option>
                                            <option value="Pest Control-4">Pest Control-4</option>
                                            <option value="Pest Control-5">Pest Control-5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <input type="text" class="form-control p-3 border-0" placeholder="Name">
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <input type="text" class="form-control p-3 border-0" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <input type="email" class="form-control p-3 border-0" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-12">
                                <input type="button" class="btn btn-primary w-100 p-3 border-0" value="GET STARTED">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <!-- Get In Touch End -->


        <!-- About Start -->

        <!-- About End -->


        <!-- Services Start -->
        <!-- <div class="container-fluid services py-5">
            <div class="container text-center py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Services</h5>
                    <h1 class="display-5">Common Pest Control Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 rounded-circle services-inner-icon">
                                    <i class="fa fa-spider fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4>Spiders</h4>
                            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 rounded-circle services-inner-icon">
                                    <i class="fa fa-spider fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center">Mosquitos</h4>
                            <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 rounded-circle services-inner-icon">
                                    <i class="fa fa-spider fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center">Rodents</h4>
                            <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 rounded-circle services-inner-icon">
                                    <i class="fa fa-spider fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center">Termites</h4>
                            <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisc elit sed.</p>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp" data-wow-delay=".3s">More Services</button>
            </div>
        </div> -->
        <!-- Services End -->


        <!-- Project Start -->

        <!-- Project End -->


        <!-- Blog Start -->

        <!-- Blog End -->


        <!-- Call To Action Start -->
        <div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <img src="img/action.jpg" class="img-fluid w-100 rounded-circle p-5" alt="">
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="text-start mt-4">
                            <h1 class="pb-4 text-white">Sign Up To Our Newsletter To Get The Latest Offers</h1>
                        </div>
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <div class="d-flex call-btn">
                                    <input type="search" class="form-control py-3 px-4 w-100 border-0 rounded-0 rounded-end rounded-pill" name="search-input" value="" placeholder="Enter Your Email Address" required="Please enter a valid email"/>
                                    <button type="email" value="Search Now!" class="btn btn-primary border-0 rounded-pill rounded rounded-start px-5">Subscribe</button>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div> 
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- pricing Start -->
        <!-- Pricing End -->


        <!-- Team Start -->

        <!-- Team End -->


        <!-- Testiminial Start -->
        <!-- <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial</h5>
                    <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testiminial End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
            <div class="container py-5">
                <div class="row g-4 footer-inner">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">About PestKit.</h4>
                            <p>Nostrud exertation ullamco labor nisi aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                            <p class="mb-0"><a class="" href="#">PestKit </a> &copy; 2023 All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">Usefull Link</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>About Us</a>
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Contact Us</a>
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Our Services</a>
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Terms & Condition</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">Services Link</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Apartment Cleaning</a>
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Office Cleaning</a>
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Car Washing</a>
                                <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Green Cleaning</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                            <a href="" class="btn btn-link w-100 text-start ps-0 pb-3 border-bottom rounded-0"><i class="fa fa-map-marker-alt me-3"></i>123 Street, CA, USA</a>
                            <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</a>
                            <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i class="fa fa-envelope me-3"></i>info@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Copyright Start -->
        <?php
            include_once 'footer.php';
        ?>
        <!-- Copyright End -->
        

        <!-- Back to Top -->
        <a href="index.php?hal=home" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>