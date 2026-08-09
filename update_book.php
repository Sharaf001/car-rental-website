<?php
include 'conn.php';
if($_POST){
    $booked_id=$_POST['booked-id'];
    $booker_name=$_POST['booker-name'];
    $booker_phone=$_POST['booker-phone'];
    $booked_car=$_POST['booked-car'];
    $booked_pickup=$_POST['booked-pickup'];
    $booked_dropoff=$_POST['booked-dropoff'];
    $booked_pick_time=$_POST['booked-pick-time'];
    $booked_drop_time=$_POST['booked-drop-time'];
    $booked_location=$_POST['booked-location'];

    $sql="UPDATE `book` SET `booker_name`='$booker_name',`booker_phone`='$booker_phone',`booked_car`='$booked_car',
                                `booked_pickup`='$booked_pickup',`booked_dropoff`='$booked_dropoff',`booked_pick_time`='$booked_pick_time' ,
                                `booked_drop_time`='$booked_drop_time',`booked_location`='$booked_location'
                                WHERE booked_id='$booked_id'";
     if ($conn->query($sql) == True) {
        echo "<script>window.location.href='booked.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




?>