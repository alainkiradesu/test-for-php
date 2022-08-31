<?php

use LDAP\Result;

require_once 'connection.inc.php';

$email = $_POST['email'];

$query = "DELETE FROM $table WHERE email = '$email'";

$result = mysqli_query($dbc, $query) or die("Error al procesar el formulario." . mysqli_error($dbc));

if ($result) {
    echo 'You have been unsaparakrai from our newsletter.';
} else {
    echo 'This email is not in our database.';
}




mysqli_close($dbc);