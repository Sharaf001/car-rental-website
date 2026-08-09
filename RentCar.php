  <?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
        <title>Rent a Car</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
 
                        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0 shadow">
            <div class="container " >
                <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                    <a href="" class="navbar-brand p-0" >
                        <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>AutoCars</h1>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->


 
            <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100 sticky-top">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>South Lebanon-Tyre</a>
                            <a href="tel:+96171443160" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+961 71-443-160</a>
                            <a href="mailto:mohammadossaily00@gmail.com" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>Autocars232@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-linkedin-in"></i></a>

                            <button style="background-color: #1F2E4E; border:none" class="me-0"><a href="login.php" class="btn btn-light ml-5">Logout</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <?php
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);
        $cars = $result->fetch_all(MYSQLI_ASSOC);
        ?>
 <!-- Car categories Start -->
<div class="container-fluid categories pb-5 mt-5">
    <div class="container pb-5">
        <!-- Replace Owl Carousel with Bootstrap Grid -->
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
        <?php
        foreach($cars as $car): /* Bas bde sakkera b7ot <?php endforeach ?>*/
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="categories-item p-3">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="<?php echo "img/".$car['img'] ;?>" class="img-fluid w-100 rounded-top" alt="" style="height:220px;">
                        </div>
                        <div class="categories-content rounded-bottom p-3">
                            <h4><?php echo $car['car_name']; ?></h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.5 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0"><?php echo '$'. $car['car_price'].'/Day'; ?></h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-users text-dark"></i> <span class="text-body ms-1"><?php echo $car['car_seats'].'Seat'; ?></span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-car text-dark"></i> <span class="text-body ms-1"><?php echo $car['car_atmt']; ?></span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1"><?php echo $car['car_energy']; ?></span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-car text-dark"></i> <span class="text-body ms-1"><?php echo $car['car_birth']; ?></span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1"><?php echo $car['car_drive']; ?></span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-road text-dark"></i> <span class="text-body ms-1"><?php echo $car['car_kilometers']; ?></span>
                                </div>
                            </div>
                            <a href="book.php" class="btn btn-primary rounded-pill d-flex justify-content-center py-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
        </div>
<!-- Car categories End -->












            <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>