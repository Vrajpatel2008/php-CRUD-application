<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

    $sql = "SELECT * FROM client JOIN country WHERE client.country = country.contid";
    $result = mysqli_query($conn, $sql) or die("query failed");

    if(mysqli_num_rows($result)){
        
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <?php }?>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['cid']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['caddress']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['cphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['cid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['cid']; ?>'>Delete</a>
                </td>
            </tr>
                <?php }?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
