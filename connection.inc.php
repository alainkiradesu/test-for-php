<?php

$user= 'news';
$password = '22715439';
$host = 'localhost';
$dbase = 'news';
$table = 'subscribers';

// coneection to the database
$dbc = mysqli_connect($host, $user, $password, $dbase) or die('Error connecting to MySQL server.');
