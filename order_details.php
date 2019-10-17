<!--All head parts -->

<?php

include 'inc/title.php';

?>

<!-- Database connectivity -->

<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");

?>


<!-- Javascript code for dynamic combo box generatin -->

<script type="text/javascript" src="js/dynamic.js"></script>

<!-- Styles for cart -->

<link rel="stylesheet" href="css/cart.css">

<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">T</span>as<span class="highlight">T</span>uran<span class="highlight">T</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#" class="dropbtn">Pizza</a>
                            <div class="dropdown-content">
                              <a href="italian_pizza.php">Italian</a>
                              <a href="indian_pizza.php">Indian</a>
                              <a href="srilankan_pizza.php">Sri Lankan</a>
                            </div>
                        </li>

                        <li class="dropdown"><a href="#" class="dropbtn">Rice</a>
                            <div class="dropdown-content">
                                <a href="srilankan_rice.php">Sri Lankan</a>
                                <a href="indian_rice.php">Indian</a>
                                <a href="malaysian_rice.php#">Malaysian</a>
                            </div>
                        </li>

                        <li><a href="drinks.php">Drinks</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li class="current"><a href="wipe.php" onclick="return  confirm('Do you want to clean cart?')">Orders</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!--Subscribe section -->

        <?php include 'inc/subscribe.php';?>
        
        <div><center><h1>ORDERS</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">
                 
                <div class="container">
                <center>
                <?php
                    $res = mysqli_query($link,"select * from add_orders");
                    $count=1;
                    $price=0;

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
                    echo "<td>"; echo ""; echo "</td>";
                    echo "</th>";

                    while($row = mysqli_fetch_array($res)){
                        
                        echo "<tr>";
                        echo "<td>"; echo $count; echo "</td>";
                        echo "<td>"; ?> <img src="admin/<?php echo $row["item_image"];?>" height="100" width="100"> <?php echo "</td>";
                        echo "<td>"; echo $row["item_name"]; echo "</td>";
                        echo "<td>"; echo $row["item_price"]; echo "</td>";
                        echo "<td>"; echo $row["item_qty"]; echo "</td>";
                        echo "<td>"; echo $row["item_cat1"]; echo "</td>";
                        echo "<td>"; echo $row["item_cat2"]; echo "</td>";
                        echo "<td>"; echo $row["item_cat3"]; echo "</td>";
                        echo "<td>"; echo $row["toppings"]; echo "</td>";
                        echo "<td>"; echo $row["size"]; echo "</td>";
                        echo "<td>"; ?> <a class="del_o" href="delete_order.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php echo "</td>";
                        echo "</tr>";
                        $price = $price+$row["item_price"];
                        $count = $count+1;
                    }

                    echo "</table>";
                    echo "<br>";
                    echo "<h1>"; echo "TOTAL RS:"; echo $price; echo "</h1>";

                ?>

                

               

                </center>
                </div><br>
                <center><a class="del_o" href="pay.php">Confirm My Orders</a></center>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
            </section>
            
    <!--All footer parts-->    

     <?php include 'inc/footer.php';?>