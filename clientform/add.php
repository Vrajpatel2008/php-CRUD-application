<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="cname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="caddress" />
        </div>
        <div class="form-group">
            <label>Country</label>
            <select name="country">
            <option value="" selected disabled>Select country</option>
                <?php
                
                $conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

                $sql = "SELECT * FROM country";
                $result = mysqli_query($conn, $sql) or die("query failed");

                if(mysqli_num_rows($result)){
                    while($row = mysqli_fetch_assoc($result)){
                
                ?>
               
                <option value="<?php echo $row['contid']; ?>"><?php echo $row['contname']; ?></option>
                <?php 
                    }
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="cphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
