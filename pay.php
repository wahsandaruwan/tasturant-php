<!-- Database connectivity -->

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tasturant");

?>

<!--All head parts -->

<?php
include 'inc/title.php';

?>

<!-- Payment Styling -->
<link rel="stylesheet" href="css/pay.css">

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
        
        <div><center><h1>Confirm And Pay</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">
                
                <div class="container">
                                
                    <div id="lgdiv">

                <!-- Login Form -->
                    <form action="" method="post" id="lgform" name="loginform">
                        <h3>Personal Information</h3>
                        <p><input type="text" placeholder="Full Name" name="name" class="inlg"></p>
                        <p><input type="email" placeholder="Email" name="email" class="inlg"></p>
                        <p><input type="number" placeholder="Phone" name="phone" class="inlg"></p>
                        <p><input type="text" placeholder="Address" name="address" class="inlg"></p>
                        <p><input type="text" placeholder="Postal Code" name="pcode" class="inlg"></p>

                        <h3>Payment Information</h3>
                        <p>Card Type : 
                            <select name="cd_type" id="cd_type">
                            <option value="visa">Visa</option>
                            <option value="master">Master Card</option>
                            <option value="american">American Express</option>
                        </select></p>
                        <p><input type="text" placeholder="Card Number" name="cd_num" class="inlg"></p>
                        <p><input type="number" placeholder="CSV" name="csv" class="inlg"></p>
                        <p><input type="text" placeholder="Expire Date (dd/mm/yyyy)" name="exp" class="inlg"></p>

                        <p><input type="submit" name="submit2" value="Confirm and Pay" class="bulg"></p>

                    </form>

                    </div>

                    <!-- Execute the query -->
                    <?php
                    
                        if (isset($_POST["submit2"])){

                            $res=mysqli_query($link,"select * from add_orders");

                            while($row=mysqli_fetch_array($res)){
                                $img = $row["item_image"];
                                $nm = $row["item_name"];
                                $price = $row["item_price"];
                                $qty = $row["item_qty"];
                                $category1 = $row["item_cat1"];
                                $category2 = $row["item_cat2"];
                                $category3 = $row["item_cat3"];
                                $toppings = $row["toppings"];
                                $size = $row["size"];

                                mysqli_query($link,"insert into confirm values('','$img','$nm','$price','$qty','$category1','$category2','$category3','$toppings','$size','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[address]',$_POST[pcode],'$_POST[cd_type]','$_POST[cd_num]','$_POST[csv]','$_POST[exp]','NO')");
                            }

                            
                            
                            mysqli_query($link,"truncate table add_orders");
                    ?>

                    <!-- Navigate to admin dashboard -->
                    <script>
                        
                        alert("Successfully Registered!");
                        window.location = "index.php";       
                        
                    </script>


                    <?php
                        

                        }
                    
                    ?>
                        
                </div>

        </section>

    <!--All footer parts-->

     <?php include 'inc/footer.php';?>