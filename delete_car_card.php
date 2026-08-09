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
                    <a href="index2.php" class="nav-item nav-link" style="color:#EA001E"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="add_car.php" class="nav-item nav-link" style="color:#EA001E"><i class="fas fa-plus-circle"></i> Add Car</a>
                    <a href="booked.php" class="nav-item nav-link" style="color:#EA001E"><i class="fas fa-edit"></i> Booked Cars</a>
                    <a href="delete_car_card.php" class="nav-item nav-link active" style="color:#EA001E"><i class="fas fa-car"></i> Remove&Edit Car</a>
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
            
            <?php 
             $sql = "SELECT * FROM cars";
             $result = $conn->query($sql);
             $cars = $result->fetch_all(MYSQLI_ASSOC);
            ?>

            <!-- Chart Start -->
            <div class="container-fluid pt-4" >
                <div class="row g-4 min-vh-100 rounded justify-content-center mx-0">
                    <div class="col-12" style="background-color: azure;">
                        <div class="rounded h-100 p-4" style="background-color: azure;">
                            <div class="rounded h-100 p-4" style="background-color:azure;">
                                <div class="table-responsive ">
                                    <table class="table table-striped table-bordered table-hover" id="datatable">
                                        <thead style="color:white; 
                                                      background-color:#EA001E;
                                                      font-weight:bold;">
                                            <tr>
                                                <th>Name</th>
                                                <th>Rent Price</th>
                                                <th>Seats</th>
                                                <th>AT/MT</th>
                                                <th>Energy</th>
                                                <th>Year</th>
                                                <th>Drive</th>
                                                <th>Speed</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($cars as $c):?>

                                                <tr>
                                                    <td style="color:black;"><?php echo $c['car_name'] ?></td>
                                                    <td style="color:black;"><?php echo $c['car_price']." $" ?></td>
                                                    <td style="color:black;"><?php echo $c['car_seats'] ?></td>
                                                    <td style="color:black;"><?php echo $c['car_atmt'] ?></td>
                                                    <td style="color:black;"><?php echo $c['car_energy'] ?></td>
                                                    <td style="color:black;"><?php echo $c['car_birth'] ?></td>
                                                    <td style="color:black;"><?php echo $c['car_drive'] ?></td>
                                                    <td style="color:black;"><?php echo $c['car_kilometers'] ?></td>
                                                    <td class="text-center"><button class="delete btn btn-sm btn-danger" value="<?php echo $c['car_id'] ?>" title="delete">❌</button>
                                                    <a href="update_card_form.php?card1-id=<?php echo $c['car_id']?>" class="btn btn-sm btn-success" title="edit">✍</a></td>
                                                </tr>

                                          <?php   endforeach; ?>
                                            
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </div>
</body>
</html>
            <!-- Chart End -->


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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<script src="ajax/jquery.js"></script>
<script src="ajax/datatable.js"></script>
<script src="ajax/sweetalert.js"></script>

 <script>
    $(document).on('click', '.delete', function() {
         
        let car_id = $(this).val();
        Swal.fire({
            title: 'Are you sure?',
            text: "This record will be deleted !",
            icon: 'warning',
            showCancelButton: true,
            background: '#1F2E4E', 
            confirmButtonColor: 'green',
            cancelButtonColor: '#EA001E',
            color: '#FFFFFF',
            confirmButtonText: 'Yes,delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delete_card.php",
                    data: {
                        car_id: car_id,
                        action: 'delete'
                    },
                    success: function(response) {
                        console.log(response)
                        if (response === 'deleted') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Record has been deleted.',
                                background: '#1F2E4E', 
                                color: '#FFFFFF',
                                timer: 1500,
                                showConfirmButton: false
                            }).then(()=>{
                                location.reload();
                            });
                            
                        } 
                    }
                });
            }
        });
    
    });


    </script>