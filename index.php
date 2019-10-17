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
                        <li class="current"><a href="index.php">Home</a></li>
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

        <section id="showcase">
            <div class="container">
                <h1>Get Your Best Food Experience!</h1>
                
            </div>

            <div id="show_button">
                <button>ORDER NOW</button>
            </div>
        </section>

        <!--Subscribe section -->

        <?php include 'inc/subscribe.php';?>
        
        <hr style=" height:20px; background:black;">
        <section id="services">
            <div><center><h2>OUR SERVICES</h2></center></div>
            <hr style=" height:20px; background:black;">
            <div class="container">
                <div class="box back1">
                    <img src="images/pic10.png">
                    <h3>PIZZA</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                         voluptatum fugiat quo, ea molestiae itaque rem placeat ullam saepe
                          ad corporis iure in porro? Saepe, ipsam? Autem dignissimos laborum minus.</p>
                </div>
                <div class="box back1">
                    <img src="images/pic9.png">
                    <h3>RICE</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            voluptatum fugiat quo, ea molestiae itaque rem placeat ullam saepe
                             ad corporis iure in porro? Saepe, ipsam? Autem dignissimos laborum minus.</p>
                </div>
                <div class="box back1">
                    <img src="images/pic7.png">
                    <h3>DRINKS</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            voluptatum fugiat quo, ea molestiae itaque rem placeat ullam saepe
                             ad corporis iure in porro? Saepe, ipsam? Autem dignissimos laborum minus.</p>
                </div>
                
            </div>
            <hr style=" height:20px; background:black;">

            <div><center><h2>FEATURE FOOD</h2></center></div>
                <hr style=" height:20px; background:black;">
                <div class="container">

                 <!-- Execute the query -->

                <?php
                
                // filter food using price

                    $res = mysqli_query($link,"select * from food where item_price>=1200");

                    while($row=mysqli_fetch_array($res)){

                    if($row["item_price"]>=1200){
                ?> 
                    <div class="box back1">
                    <img src="admin/<?php echo $row["item_image"];?>">
                        <h3><?php echo $row["item_name"];?></h3>
                        <p class="prize">RS:<?php echo $row["item_price"];?></p>
                        <a href="item_desc.php?id=<?php echo $row["id"]; ?>" class="b_food_order">Order Now</a>
                    </div>
                    

                <?php
                    }
                }

                ?>
                   
                </div>
        </section>

<!--All footer parts-->

 <?php include 'inc/footer.php';?>
        
