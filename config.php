<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "CRUD_login";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
// else{
//     echo"COnnection OK";
// }

?>