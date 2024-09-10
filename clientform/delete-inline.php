<?php

$conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

$cont_id = $_GET['id'];
$sql = "DELETE FROM client WHERE cid = {$cont_id}";
$result = mysqli_query($conn, $sql) or die("query failed");

header("location:http://localhost/clientform/index.php");

mysqli_close($conn);

?>