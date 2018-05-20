<?php include("includes/header.php"); ?>
<div class="error">
    <?php
        if(isset($_SESSION["fail"]) && !empty($_SESSION["fail"])){
            echo $_SESSION["fail"];
            unset($_SESSION["fail"]);
        }
        if(isset($_SESSION["success"]) && !empty($_SESSION["success"])){
            echo $_SESSION["success"];
            unset($_SESSION["success"]);
        }

    ?>
</div>

<?php

require("includes/define.php");
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());}

mysqli_select_db($con, DB_NAME) or die("Cannot select DB");

$res = mysqli_query($con, "SELECT * FROM products ORDER BY price");
    if (isset($_GET['action']) && $_GET['action']== "add")
        {
            $id=intval($_GET['id']);
            if(isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity']++;
            }
            else
            {
                $sql_s="SELECT * FROM products
                WHERE id={$id}";
                $query_s=mysqli_query($con, $sql_s);
                if (mysqli_num_rows($query_s) != 0) {
                    $row_s=mysqli_fetch_array($query_s);

                    $_SESSION['cart'][$row_s['id']]=array(
                        "quantity" => 1,
                        "price" => $row_s['price']
                    );

                } else {
                   $_SESSION["fail"] = "This product id it's invalid!";
                }
            }
        }
?>


          <h1>Product List</h1>

    <?php
     if (isset($message)) {
        echo "<h2>$message</h2>";
    }

    ?> 

    <div id="sidebar">

        <h2>Cart</h2>

        <?php

        if (isset($_SESSION['cart'])) {
            $sql ="SELECT * FROM products WHERE id IN (";

            foreach ($_SESSION['cart'] as $id => $value) {
                $sql .= $id.",";
            }

            $sql = substr($sql, 0, -1).") ORDER BY name ASC";
            $query = mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($query)) {
                ?>
                <p><?php echo $row['name']." Quantity: ".$_SESSION['cart'][$row['id']]['quantity']; ?></p>

        <?php
        }
        ?>

        <input type="button" value="Go to cart" onclick="window.location.href='cart.php'"/>

        <?php
        } else {
            echo "<p>Your Cart is empty.Please, add some products</p>";
        }
        ?>

    </div>

    <table> 
        <tr> 
            <th>Name</th> 
            <th>Price</th> 
            <th>Action</th> 
        </tr> 
          
        <?php 
          
            $sql="SELECT * FROM products ORDER BY name ASC"; 
            $query=mysqli_query($con, $sql); 
              
            while ($row=mysqli_fetch_array($query)) {     
        ?> 
            <tr> 
                <td><?php echo $row['name'] ?></td> 
                <td><?php echo $row['price'] ?>$</td> 
                <td><a href="index.php?page=index&action=add&id=<?php echo $row['id'] ?>">Add to cart</a></td> 
            </tr> 
        <?php 
                  
            } 
          
        ?> 
          
    </table>
<?php include("includes/footer.php"); ?>