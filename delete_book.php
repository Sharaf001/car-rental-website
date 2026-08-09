<?php
include 'conn.php';
$book_id = $_GET['book-id'];
$sql = "DELETE FROM book WHERE booked_id='$book_id'";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href = 'booked.php';</script>";
} else {
    echo "Error deleting user record: " . $conn->error;
}
 
?>