<!--All head parts -->

<?php include 'inc/title.php';?>

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
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown"><a href="#" class="dropbtn">Pizza</a>
                            <div class="dropdown-content">
                              <a href="italian_pizza.php">Italian</a>
                              <a href="indian_pizza.php">Indian</a>
                              <a href="srilankan_pizza.php">Sri Lankan</a>
                            </div>
                        </li>

                        <li class="dropdown current"><a href="#" class="dropbtn">Rice</a>
                            <div class="dropdown-content">
                                <a href="srilankan_rice.php">Sri Lankan</a>
                                <a href="indian_rice.php">Indian</a>
                                <a href="malaysian_rice.php">Malaysian</a>
                            </div>
                        </li>

                        <li><a href="drinks.php">Drinks</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="wipe.php" onclick="return  confirm('Do you want to clean cart?')">Orders</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!--Subscribe section -->

        <?php include 'inc/subscribe.php';?>
        
        <div><center><h1>INDIAN RICE</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">
                <div><center><h2>Vegetarian</h2></center></div>
                <hr style=" height:20px; background:black;">                
                <div class="container">

                <!-- Execute the query -->

                <?php
                
                // filter using categories which i want to use here

                    $res = mysqli_query($link,"select * from food where item_cat1='Rice' AND item_cat2='indian' AND item_cat3='vege'");

                    while($row=mysqli_fetch_array($res)){

                ?> 
                            
                            <!-- Display Food items --> 

                            <div class="box back1">
                                <img src="admin/<?php echo $row["item_image"];?>">
                                <h3><?php echo $row["item_name"];?></h3>
                                <p class="prize">RS:<?php echo $row["item_price"];?></p>
                                <a href="item_desc.php?id=<?php echo $row["id"]; ?>" class="b_food_order">Order Now</a>
                            </div>
                            

                <?php

                    }
                
                ?>


                </div>
                <hr style=" height:20px; background:black;">
    
                <div><center><h2>Non Vegetarian</h2></center></div>
                    <hr style=" height:20px; background:black;">
                    <div class="container">
                        <!-- Execute the query -->

                <?php
                
                // filter using categories which i want to use here
                
                    $res = mysqli_query($link,"select * from food where item_cat1='Rice' AND item_cat2='indian' AND item_cat3='nonvege'");

                    while($row=mysqli_fetch_array($res)){

                ?> 
                            
                            <!-- Display Food items --> 

                            <div class="box back1">
                                <img src="admin/<?php echo $row["item_image"];?>">
                                <h3><?php echo $row["item_name"];?></h3>
                                <p class="prize">RS:<?php echo $row["item_price"];?></p>
                                <a href="item_desc.php?id=<?php echo $row["id"]; ?>" class="b_food_order">Order Now</a>
                            </div>
                            

                <?php

                    }
                
                ?>
                        
                    </div>
            </section>

    <!--All footer parts-->

     <?php include 'inc/footer.php';?>