<?php
include "config.php";

if ($_POST['action'] === 'delete') {
  $car_id = $_POST['car_id'];

  if (!empty($car_id)) {
    $stmt = $pdo->prepare("DELETE FROM cars WHERE car_id = ?");
    $success = $stmt->execute([$car_id]);

    echo $success ? 'deleted' : 'error';
  } else {
    echo 'invalid';
  }
}
 
?>