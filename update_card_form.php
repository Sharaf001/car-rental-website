<?php 
include 'conn.php';
if ($_GET) {
    $card_id = $_GET['card1-id'];
    $sql = "SELECT * FROM cars WHERE car_id='$card_id'";
    $result = $conn->query($sql);
    $card = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'admin-header.php'; ?>

<head>
    <style>
        body {
            background-color: #f8f9fa; 
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 50px auto;
        }

        .form-label {
            color: #EA001E;
            font-weight: 600;
        }

        .form-title {
            color: #EA001E;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #EA001E;
            border-color: #EA001E;
        }

        .btn-primary:hover {
            background-color: #c60017;
            border-color: #c60017;
        }
    </style>
</head>

<body>

<div class="form-container">
    <h2 class="form-title">Edit Car</h2>
    <form action="update_card.php" method="POST">
        <input type="hidden" class="form-control" name="car-id" value="<?php echo $card['car_id'] ?>">

        <div class="mb-3">
            <label for="carname" class="form-label">Car Name</label>
            <input type="text" class="form-control" id="carname" name="car-name" value="<?php echo $card['car_name'] ?>">
        </div>

        <div class="mb-3">
            <label for="rentprice" class="form-label">Rent Price</label>
            <input type="number" class="form-control" id="rentprice" name="car-price" value="<?php echo $card['car_price']; ?>">
        </div>

        <div class="mb-3">
            <label for="carseats" class="form-label">Car Seats</label>
            <input type="text" class="form-control" id="carseats" name="car-seats" value="<?php echo $card['car_seats'] ?>">
        </div>

        <div class="mb-3">
            <label for="caratmt" class="form-label">Car AT/MT</label>
            <input type="text" class="form-control" id="caratmt" name="car-atmt" value="<?php echo $card['car_atmt'] ?>">
        </div>

        <div class="mb-3">
            <label for="carenergy" class="form-label">Car Energy</label>
            <input type="text" class="form-control" id="carenergy" name="car-energy" value="<?php echo $card['car_energy'] ?>">
        </div>

        <div class="mb-3">
            <label for="caryear" class="form-label">Car Year</label>
            <input type="text" class="form-control" id="caryear" name="car-year" value="<?php echo $card['car_birth'] ?>">
        </div>

        <div class="mb-3">
            <label for="cardrive" class="form-label">Car Drive</label>
            <input type="text" class="form-control" id="cardrive" name="car-drive" value="<?php echo $card['car_drive'] ?>">
        </div>

        <div class="mb-3">
            <label for="carspeed" class="form-label">Car Speed</label>
            <input type="text" class="form-control" id="carspeed" name="car-speed" value="<?php echo $card['car_kilometers'] ?>">
        </div>

        <button type="submit" class="btn btn-primary float-end">Update Card</button>
    </form>
</div>

</body>
</html>
