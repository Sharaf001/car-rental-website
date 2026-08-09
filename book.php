<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>AutoCars - Book a Car</title>
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

        <script src="ajax/bootstrap.min.js"></script>
        <link href="ajax/datatable.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'conn.php';
        $sql = "SELECT car_name , car_birth FROM cars";
        $result = $conn->query($sql);
        $cars = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <style>
        .fade-in {
         opacity: 0;
         animation: fadeInImage 1s ease-in forwards;
        }

        @keyframes fadeInImage {
        to {
      opacity: 1;
        }
     }
     </style>

       <!-- Carousel Start -->
        <div class="header-carousel" style="height: 100vh; overflow: hidden;">
            <div id="carouselId" class="carousel slide fade-in h-100" data-bs-ride="carousel" data-bs-interval="false" style="height: 100%;">
                <div class="carousel-inner h-100" role="listbox" style="height: 100%;" >
                    <div class="carousel-item active h-100" style="height: 100%;">
                        <img src="img/carousel-2.jpg" class="img-fluid w-100 h-100" style="object-fit: cover; height: 100%;"  alt="First slide"/>
                        <div class="carousel-caption d-flex align-items-center h-100" style="top: 0; bottom: 0;">
                            <div class="container py-4">
                                <div class="row g-5">
                                    <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                        <div class="bg-secondary rounded p-5">
                                            <h4 class="text-white mb-4">CONTINUE CAR RESERVATION</h4>
                                            <form action="book.php" method="POST">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <select id="carlist" class="form-select" aria-label="Default select example" name="carslist">
                                                            <option selected>Select Your Car type</option>
                                                            <?php foreach($cars as $car): ?>
                                                            <option value="<?php echo $car['car_name'] ?>"><?php echo $car['car_name']."(".$car['car_birth'].")"; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <input id="phone" class="form-control" type="text" placeholder="Enter your phone(00-000-000)" name="phone" style="width:530px; margin-left:8px;">
                                                    <input id="name" class="form-control" type="text" placeholder="Enter your Name" name="fullname" style="width:530px; margin-left:8px;">
                                                    <input id="location" class="form-control" type="text" placeholder="Enter your location" name="location" style="width:530px; margin-left:8px;">
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                                <span class="fas fa-calendar-alt"></span><span class="ms-1">Pick Up</span>
                                                            </div>
                                                            <input id="pickdate" class="form-control" type="text" placeholder="Enter the date d/m/y" name="pickdate">
                                                            <select id="picktime" class="form-select ms-3" aria-label="Default select example" name="picktime">
                                                                <option selected>Select time to pich-up</option>
                                                                <option value="9:00AM">9:00AM</option>
                                                                <option value="10:00AM">10:00AM</option>
                                                                <option value="11:00AM">11:00AM</option>
                                                                <option value="12:00PM">12:00PM</option>
                                                                <option value="1:00PM">1:00PM</option>
                                                                <option value="2:00PM">2:00PM</option>
                                                                <option value="3:00PM">3:00PM</option>
                                                                <option value="4:00PM">4:00PM</option>
                                                                <option value="5:00PM">5:00PM</option>
                                                                <option value="6:00PM">6:00PM</option>
                                                                <option value="7:00PM">7:00PM</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                                <span class="fas fa-calendar-alt"></span><span class="ms-1">Drop off</span>
                                                            </div>
                                                            <input id="dropdate" class="form-control" type="text" placeholder="Enter the date d/m/y" name="dropdate">
                                                            <select id="droptime" class="form-select ms-3" aria-label="Default select example" name="droptime">
                                                                <option selected>Select time to drop-off</option>
                                                                <option value="9:00AM">9:00AM</option>
                                                                <option value="10:00AM">10:00AM</option>
                                                                <option value="11:00AM">11:00AM</option>
                                                                <option value="12:00PM">12:00PM</option>
                                                                <option value="1:00PM">1:00PM</option>
                                                                <option value="2:00PM">2:00PM</option>
                                                                <option value="3:00PM">3:00PM</option>
                                                                <option value="4:00PM">4:00PM</option>
                                                                <option value="5:00PM">5:00PM</option>
                                                                <option value="6:00PM">6:00PM</option>
                                                                <option value="7:00PM">7:00PM</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-light w-100 py-2" type="button" id="book" name="book">Book Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                        <div class="text-start">
                                            <h1 class="display-5 text-white">Get 15% off your rental Plan your trip now</h1>
                                            <p>Treat yourself in Lebanon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->  
</body>
</html>

<script src="ajax/jquery.js"></script>
<script src="ajax/datatable.js"></script>
<script src="ajax/sweetalert.js"></script>

<script>
   $(document).ready(function() {
    $('#book').on('click', function() {
        let car = $('#carlist').val().trim();
        let phone = $('#phone').val().trim();
        let name = $('#name').val().trim();
        let location = $('#location').val().trim();
        let pickdate = $('#pickdate').val().trim();
        let dropdate = $('#dropdate').val().trim();
        let picktime = $('#picktime').val().trim();
        let droptime = $('#droptime').val().trim();

        if (
            car === "" || phone === "" || name === "" || location === "" ||
            pickdate === "" || dropdate === "" || picktime === "" || droptime === ""
        ) {
            Swal.fire({
                icon: 'warning',
                title: 'Missing Data',
                text: 'Please fill in all fields.',
                background: '#1F2E4E',      
                color: '#FFFFFF',            
                confirmButtonColor: '#EA001E',
                timer:1500
            });
        } else {
            $.ajax({
                url: 'addnew_ajax.php',
                type: 'POST',
                data: {
                    car: car,
                    phone: phone,
                    name: name,
                    location: location,
                    pickdate: pickdate,
                    dropdate: dropdate,
                    picktime: picktime,
                    droptime: droptime,
                    action: 'insert'
                },
                success: function(response) {
                    console.log(response);
                    if (response.trim() === 'inserted') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Renting Done Successfully',
                            text: 'YOU’RE WELCOME',
                            background: '#1F2E4E',      
                            color: '#FFFFFF',            
                            confirmButtonColor: '#EA001E',
                            confirmButtonText: 'Ok'
                        }).then(() => {
                            window.location.href = 'RentCar.php';
                        });
                    } 
                }
            });
        }
    });
});

</script>