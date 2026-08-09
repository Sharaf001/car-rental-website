<?php
include 'conn.php';
if($_POST){
    $carname = $_POST['carname'];
    $carprice = $_POST['carprice'];
    $carseats = $_POST['carseats'];
    $cargear = $_POST['cargear'];
    $carenergy = $_POST['carenergy'];
    $birth = $_POST['birth'];
    $drive = $_POST['drive'];
    $speed = $_POST['kilo'];
    if($_FILES){
        $path='img/';

    
        $car_image=$_FILES['img']['name'];

        $extension=pathinfo($car_image,PATHINFO_EXTENSION);
        $basename=pathinfo($car_image,PATHINFO_FILENAME);
        $timestamp=date("Ymd_His");
        $final_name=$basename . '-' . $timestamp . '.' . $extension;
        $target = $path . $final_name ;

  move_uploaded_file($_FILES['img']['tmp_name'] ,$target);

    $checksql="SELECT * FROM `cars` WHERE img='$final_name'";
    $result = $conn->query($checksql);

    if($result->num_rows>0){
        echo "<script>alert('car is already exists')</script>";
        echo "<script>window.location.href='add_car.php'</script>";
    }else{ 

    $sql = "INSERT INTO cars(car_name,car_price,car_seats,car_atmt,car_energy,car_birth,car_drive,car_kilometers,img) VALUES 
    ('$carname','$carprice','$carseats','$cargear','$carenergy','$birth','$drive','$speed','$final_name') " ;

    if($conn->query($sql)==True){
        echo "<script>window.location.href='add_car.php'</script>";
    } else {
        echo "Error:".$sql."<br>".$conn->error ;
    }
}
}

}


?>