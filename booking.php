<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "guesthouse"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];
$room = $_POST['room'];
$message = $_POST['message'];
$sql = "INSERT INTO bookings (name, checkin, checkout, guests, room, message)
VALUES ('$name', '$checkin', '$checkout', '$guests', '$room', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<h2 style='font-family:sans-serif;color:green;text-align:center;'>Booking Successful 🎉</h2>
        <p style='text-align:center;'><a href='booking.html'>Go back</a></p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
