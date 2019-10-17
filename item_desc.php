
<!--All head parts -->

<?php

include 'inc/title.php';

?>

<!-- Database connectivity -->

<?php

    $id = $_GET["id"];

    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");

    if(isset($_POST["submit1"])){

       
        $res = mysqli_query($link,"select * from food where id=$id");
        while($row2=mysqli_fetch_array($res)){
            $img = $row2["item_image"];
            $nm = $row2["item_name"];
            $price = $row2["item_price"];
            $qty = $_POST["it_qty"];
            $category1 = $row2["item_cat1"];
            $category2 = $row2["item_cat2"];
            $category3 = $row2["item_cat3"];
            $categorytmp = $_POST["cat"];
            $toppings = $_POST["tp"];
            $size = $_POST["sz"];
            
        }

        // Filter toopings and pizza sizes

        if($category1 != "" && $categorytmp != "")
        { 
            if($toppings != ""){
                $price=($price+200)*$qty;
                mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','$toppings','')");
            }

            else if($size != "" && $toppings != ""){

                if($size == "Small"){
                    $price=($price+200)*$qty;
                    mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','$toppings','$size')");
                }

                else if($size == "Medium"){
                    $price=($price+400)*$qty;
                    mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','$toppings','$size')");
                }

                else if($size == "Large"){
                    $price=($price+600)*$qty;
                    mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','$toppings','$size')");
                }
            }

            else if($size != ""){

                if($size == "Small"){
                    mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','','$size')");
                }

                else if($size == "Medium"){
                    $price=($price+200)*$qty;
                    mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','','$size')");
                }

                else if($size == "Large"){
                    $price=($price+200)*$qty;
                    mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','','$size')");
                }
            }
            
        }

        else{
            $price=$price*$qty;
            mysqli_query($link,"insert into add_orders values('','$img','$nm',$price,$qty,'$category1','$category2','$category3','','')");
        }

?>
    <script>

            alert("Successfully Added To Your Order List!");
                    
            window.location = "order_details.php";       
                    
    </script>
<?php

    }    

?>


<!-- Javascript code for dynamic combo box generatin -->

<script type="text/javascript" src="js/dynamic.js"></script>

<link rel="stylesheet" href="css/add_od.css">

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
        
        <div><center><h1>Item Description</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">
                          
                <div class="container">
 
                <!-- Display particular food item in this page --> 

                
                <?php
                
                     $res = mysqli_query($link,"select * from food where id=$id");

                     while($row = mysqli_fetch_array($res)){

                ?>

                <!-- Dynamically generating bellow combo boxes -->

                        <form action="" method="post" name="form1" class="it_desc">
                        
                        <div class="it_details">
                        <img src="admin/<?php echo $row["item_image"];?>" height="300px" width="300px">
                        <hr style=" height:5px; background:black;">
                        <p>Name : <?php echo $row["item_name"];?></p>
                        <p>Price RS: <?php echo $row["item_price"];?></p>
                        <center><p style="width:300px; text-align:center;">Description : <span><?php echo $row["item_desc"];?></span></p></center>
                        <p>Quantity : <input type="number" name="it_qty" value="1"></p>
                        <hr style=" height:5px; background:black;">
                        <p>Add Toopings :</p>
                        <p> 1) Item Category : 
                            <select name="cat" id="cat" onchange="populate('cat','tp','sz')">
                            <option value=""></option>
                            <option value="pizza">Pizza</option>
                            <option value="rice">Rice</option>
                            <option value="drinks">Drinks</option>
                        </select></p>

                        <p> 2) Toppings (RS : 200) : 
                            <select name="tp" id="tp">
                            <option value=""></option>
                        </select></p>
                        <hr style=" height:5px; background:black;">
                        <p>Pizza Size : 
                            <select name="sz" id="sz">
                            
                        </select></p>
                        <hr style=" height:5px; background:black;">
                        <p><button type="submit" class="b_add_order" name="submit1">Add</button></p>
                        
                        </div>
                        
                        
                        </form>
                <?php        

                }
        
                ?>
  

                </div>

                
                
            </section>
            
    <!--All footer parts-->    

     <?php include 'inc/footer.php';?>