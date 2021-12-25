<?php

$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'dbhosting'; // Nama Database
// connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed : " . mysqli_connect_error();
}

function rupiah($angka)
{
    $result_rupiah = "Rp. " . number_format($angka, 0, ',', '.');
    return $result_rupiah;
}
