<?php
include "config.php";

if ($_POST['action'] === 'insert') {
    $car = trim($_POST['car']);
    $phone = trim($_POST['phone']);
    $name = trim($_POST['name']);
    $location = trim($_POST['location']);
    $pickdate = trim($_POST['pickdate']);
    $dropdate = trim($_POST['dropdate']);
    $picktime = trim($_POST['picktime']);
    $droptime = trim($_POST['droptime']);

    try {
        $stmt = $pdo->prepare("INSERT INTO book (
            booker_name, booker_phone, booked_car, 
            booked_pickup, booked_dropoff, 
            booked_pick_time, booked_drop_time, booked_location
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $name, $phone, $car,
            $pickdate, $dropdate,
            $picktime, $droptime, $location
        ]);

        echo 'inserted'; 
    } catch (PDOException $e) {
        echo 'error'; 
    }
}
?>
