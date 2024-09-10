<?php

$cont_name = $_POST['cname'];
$cont_address = $_POST['caddress'];
$cont_country = $_POST['country'];
$cont_phone = $_POST['cphone'];

$conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

$sql = "INSERT INTO client(cname, caddress, country, cphone) VALUES ('{$cont_name}','{$cont_address}','{$cont_country}','{$cont_phone}')";
$result = mysqli_query($conn, $sql) or die("query failed");

header("location:http://localhost/clientform/index.php");

mysqli_close($conn);

?>