<?php

$cont_id = $_POST['cid'];
$cont_name = $_POST['cname'];
$cont_address = $_POST['caddress'];
$cont_country = $_POST['country'];
$cont_phone = $_POST['cphone'];

$conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

$sql = "UPDATE client SET cname = '{$cont_name}',caddress = '{$cont_address}',country = '{$cont_country}',cphone = '{$cont_phone}' WHERE cid = {$cont_id}";
$result = mysqli_query($conn, $sql) or die("query failed");

header("location:http://localhost/clientform/index.php");

mysqli_close($conn);

?>