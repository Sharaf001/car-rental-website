<?php 
include 'conn.php';
if ($_GET) {
    $book_id = $_GET['book1-id'];
    $sql = "SELECT * FROM book WHERE booked_id='$book_id'";
    $result = $conn->query($sql);
    $book = $result->fetch_assoc();
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
    <h2 class="form-title">Edit Booking</h2>
    <form action="update_book.php" method="POST">
        <input type="hidden" class="form-control" name="booked-id" value="<?php echo $book['booked_id'] ?>">

        <div class="mb-3">
            <label for="bookername" class="form-label">Booker Name</label>
            <input type="text" class="form-control" name="booker-name" value="<?php echo $book['booker_name'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookerphone" class="form-label">Booker Phone</label>
            <input type="text" class="form-control" id="bookerphone" name="booker-phone" value="<?php echo $book['booker_phone'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookedcar" class="form-label">Booked Car</label>
            <input type="text" class="form-control" id="bookedcar" name="booked-car" value="<?php echo $book['booked_car'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookedpickup" class="form-label">Booked PickUp</label>
            <input type="text" class="form-control" id="bookedpickup" name="booked-pickup" value="<?php echo $book['booked_pickup'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookeddropoff" class="form-label">Booked DropOff</label>
            <input type="text" class="form-control" id="bookeddropoff" name="booked-dropoff" value="<?php echo $book['booked_dropoff'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookedpicktime" class="form-label">Booked Pick Time</label>
            <input type="text" class="form-control" id="bookedpicktime" name="booked-pick-time" value="<?php echo $book['booked_pick_time'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookeddroptime" class="form-label">Booked Drop Time</label>
            <input type="text" class="form-control" id="bookeddroptime" name="booked-drop-time" value="<?php echo $book['booked_drop_time'] ?>">
        </div>

        <div class="mb-3">
            <label for="bookedlocation" class="form-label">Booked Location</label>
            <input type="text" class="form-control" id="bookedlocation" name="booked-location" value="<?php echo $book['booked_location'] ?>">
        </div>

        <button type="submit" class="btn btn-primary float-end">Update Booking</button>
    </form>
</div>

</body>
</html>
