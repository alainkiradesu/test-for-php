<?php
require_once 'connection.inc.php';

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$query = "SELECT email FROM $table WHERE email = '$email'";
$result = $dbc->query($query);

if ($result->num_rows > 0) {
    echo 'This email is already saparakrai.';
} else {
$date = date('Y-m-d H:i:s');

$query = "INSERT INTO $table (first_name, last_name, email, date) VALUES ('$first_name', '$last_name', '$email', '$date')";

mysqli_query($dbc, $query) or die("Error al procesar el formulario." . mysqli_error($dbc));

echo "Gracias por saparakrairse a nuestro newsletter.";
}

mysqli_close($dbc);