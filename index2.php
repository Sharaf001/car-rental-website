<?php 
 include 'conn.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'admin-header.php' ?>

<body>

 <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border" style="width: 3rem; height: 3rem; color:#EA001E;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" style="background-color: #1F2E4E ;">
            <nav class="navbar navbar-light" style="background-color: #1F2E4E ;">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 style="color:#EA001E;"><i class="fas fa-car-alt me-3"></i>AutoCars</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Mohammad</h6>
                        <span style="color:#EA001E">Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index2.php" class="nav-item nav-link active" style="color:#EA001E"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="add_car.php" class="nav-item nav-link" style="color:#EA001E"><i class="fas fa-plus-circle"></i> Add Car</a>
                    <a href="booked.php" class="nav-item nav-link" style="color:#EA001E"><i class="fas fa-edit"></i> Booked Cars</a>
                    <a href="delete_car_card.php" class="nav-item nav-link" style="color:#EA001E"><i class="fas fa-car"></i> Remove&Edit Car</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand navbar-light sticky-top px-4 py-0" style="background-color: #1F2E4E;">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <hr class="dropdown-divider">
                            <hr class="dropdown-divider">
                            <hr class="dropdown-divider">
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex" style="color:#EA001E;">Mohammad</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x" style="color: #EA001E;"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: #EA001E;">Cars Rented</p>
                                <h6 class="mb-0" style="color: #EA001E;">35</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x" style="color: #EA001E;"></i>
                            <div class="ms-3">
                                <p class="mb-2 text-red" style="color: #EA001E;">Car in Rent Today</p>
                                <h6 class="mb-0 text-red" style="color: #EA001E;">12</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x" style="color: #EA001E;"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: #EA001E;">Today Revenue</p>
                                <h6 class="mb-0" style="color: #EA001E;">$ 45,230</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x" style="color: #EA001E;"></i>
                            <div class="ms-3">
                                <p class="mb-2" style="color: #EA001E;">Total Revenue</p>
                                <h6 class="mb-0" style="color: #EA001E;">$ 45,230</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->



            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0" style="color: #EA001E;">Recent Salse</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark" style="background-color: #EA001E;">
                                    
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>05 Jan 2025</td>
                                    <td>INV-0123</td>
                                    <td>Mohammad Ossaily</td>
                                    <td>$135</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    
                                    <td>14 Apr 2024</td>
                                    <td>INV-2345</td>
                                    <td>Hassan Chebli</td>
                                    <td>$2300</td>
                                    <td>Paid</td>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>23 Dec 2024</td>
                                    <td>INV-0342</td>
                                    <td>Mohammad Sharafdein</td>
                                    <td>$230</td>
                                    <td>Paid</td>
                                    
                                </tr>
                                <tr>
                                    <td>30 May 2025</td>
                                    <td>INV-0122</td>
                                    <td>Ali Haidar</td>
                                    <td>$5000</td>
                                    <td>Paid</td>
                                   
                                </tr>
                                <tr>
                                    
                                    <td>21 Nov 2024</td>
                                    <td>INV-0156</td>
                                    <td>Ahmad Haidar</td>
                                    <td>$267</td>
                                    <td>Paid</td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="rounded-top p-4" style="background-color: #1F2E4E;">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start" style="color: #EA001E;">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color: #EA001E;"><i class="bi bi-arrow-up" style="color: white;"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>