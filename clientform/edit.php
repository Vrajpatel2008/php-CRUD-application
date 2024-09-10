<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "clientform") or die("connection failed");

    $cont_id = $_GET['id'];
    $sql = "SELECT * FROM client WHERE cid = {$cont_id}";
    $result = mysqli_query($conn, $sql) or die("query failed");
    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
    
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="cid" value="<?php echo $row['cid']; ?>"/>
          <input type="text" name="cname" value="<?php echo $row['cname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="caddress" value="<?php echo $row['caddress']; ?>"/>
      </div>
      <div class="form-group">
            <label>Country</label>
            <select name="country">
               
                <?php
                
                $sql1 = "SELECT * FROM country";
                $result1 = mysqli_query($conn, $sql1) or die("query failed");
               
                
                if(mysqli_num_rows($result1)){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        
                        if($row['country'] == $row1['contid']){
                            $select = "selected";
                        }else{
                            $select = "";
                        }
                
                
                        echo "<option {$select } value='{$row1['contid']}'>{$row1['contname']}</option>";
                    }
                    echo "</select>";
                }
            ?>
            
        </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="cphone" value="<?php echo $row['cphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
        }
    }
    
    ?>
</div>
</div>
</body>
</html>
