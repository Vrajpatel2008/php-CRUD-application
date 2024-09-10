<?php include 'header.php'; ?>

<?php

if(isset($_POST['deletebtn'])){
    $conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

$cont_id = $_POST['cid'];
$sql = "DELETE FROM client WHERE cid = {$cont_id}";
$result = mysqli_query($conn, $sql) or die("query failed");

header("location:http://localhost/clientform/index.php");

mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="cid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
