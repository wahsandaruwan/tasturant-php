<?php 
session_start();

if($_SESSION["admin"]==""){

?>

<script>
    window.location = "adminlogin.php";
</script>

<!--All head parts -->
<?php
}
include 'inc/title.php';

?>

<!-- Database connectivity -->

<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tasturant");

?>

<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">T</span>as<span class="highlight">T</span>uran<span class="highlight">T</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="add_item.php">Add Items</a></li>
                        <li><a href="new_orders.php">New Orders</a></li>
                        <li class="current"><a href="confirmed_orders.php">Confirmed Orders</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        
        <div><center><h1>ADMIN AREA</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">
                <div><center><h2>Confirmed Orders</h2></center></div>
                <hr style=" height:20px; background:black;">
                <div class="container">
                        
                    <center>
                    <!-- View confirmed orders -->
                    <?php
                        $res=mysqli_query($link,"select * from confirm");
                        $count=1;

                        echo "<table border='1'>";
                        echo "<th>";
                        echo "<td>"; echo "IMAGE"; echo "</td>";
                        echo "<td>"; echo "ITEM NAME"; echo "</td>";
                        echo "<td>"; echo "ITEM PRICE"; echo "</td>";
                        echo "<td>"; echo "ITEM QUANTITY"; echo "</td>";
                        echo "<td>"; echo "CATEGORY 1"; echo "</td>";
                        echo "<td>"; echo "CATEGORY 2"; echo "</td>";
                        echo "<td>"; echo "CATEGORY 3"; echo "</td>";
                        echo "<td>"; echo "TOPPINGS"; echo "</td>";
                        echo "<td>"; echo "SIZE"; echo "</td>";
                        echo "<td>"; echo "Confirmation"; echo "</td>";
                        echo "<td>"; echo ""; echo "</td>";
                        echo "<td>"; echo ""; echo "</td>";
                        echo "</th>";

                        while($row = mysqli_fetch_array($res)){
                            
                            if($row["confirm"] == "YES"){
                            echo "<tr>";
                            echo "<td>"; echo $count; echo "</td>";
                            echo "<td>"; ?> <img src="../admin/<?php echo $row["item_image"];?>" height="100" width="100"> <?php echo "</td>";
                            echo "<td>"; echo $row["item_name"]; echo "</td>";
                            echo "<td>"; echo $row["item_price"]; echo "</td>";
                            echo "<td>"; echo $row["item_qty"]; echo "</td>";
                            echo "<td>"; echo $row["item_cat1"]; echo "</td>";
                            echo "<td>"; echo $row["item_cat2"]; echo "</td>";
                            echo "<td>"; echo $row["item_cat3"]; echo "</td>";
                            echo "<td>"; echo $row["toppings"]; echo "</td>";
                            echo "<td>"; echo $row["size"]; echo "</td>";
                            echo "<td>"; echo $row["confirm"]; echo "</td>";
                            echo "<td>"; ?> <a class="del_o" href="cust_order.php?id=<?php echo $row["id"]; ?>">Customer</a> <?php echo "</td>";
                            echo "<td>"; ?> <a class="del_o" href="confirm_delete_order.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php echo "</td>";
                            echo "</tr>";
                            $price = $price+$row["item_price"];
                            $count = $count+1;
                            }
                        }

                        echo "</table>";
                       

                    ?>
                    
                    
                </div>
                </center>
                
            </section>
    <!--All footer parts-->
    
     <?php include 'inc/footer.php';?>