<?php
include 'conn.php';
if($_POST){
    $car_id=$_POST['car-id'];
    $car_name=$_POST['car-name'];
    $car_price=$_POST['car-price'];
    $car_seats=$_POST['car-seats'];
    $car_atmt=$_POST['car-atmt'];
    $car_energy=$_POST['car-energy'];
    $car_year=$_POST['car-year'];
    $car_drive=$_POST['car-drive'];
    $car_kilometers=$_POST['car-speed'];

    $sql="UPDATE `cars` SET `car_name`='$car_name',`car_price`='$car_price',`car_seats`='$car_seats',
                                `car_atmt`='$car_atmt',`car_energy`='$car_energy',`car_birth`='$car_year' ,
                                `car_drive`='$car_drive',`car_kilometers`='$car_kilometers'
                                WHERE car_id='$car_id'";
     if ($conn->query($sql) == True) {
        echo "<script>window.location.href='delete_car_card.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




?>