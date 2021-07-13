<?php

$user = "fuad";
$pass = "321";

$nama = $_POST['nama'];
$password = $_POST['password'];


if ($nama == $user && $password == $pass) {
    header( "Location./index.php" );
}
else{
    header( "Location:./login.html" );
}

?>