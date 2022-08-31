<?php
require_once 'connection.inc.php';

$subject = $_POST['subject'];
$body = $_POST['body'];

$headers = "From: postmaster@yourdomain.com" . "\n";
$headers .= "Reply-To: contact@yourdomain.com" . "\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\n";
$headers .= 'Content-Transfer-Encoding: 8bit';

$query = "SELECT * FROM $table";
$result = mysqli_query($dbc, $query) or die("Error al procesar el formulario." . mysqli_error($dbc));

while ($row = mysqli_fetch_array($result)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    
    $msg = "Dear $first_name $last_name,\n\n$body\n\nRegards,\nLatitude Development Team";
    if (mail($email, $subject, $msg, $headers)) {
        echo "Email sent to $first_name $last_name at $email";
    } else {
        echo 'Error while sending an email to: ' . $email . '.';
    }

}