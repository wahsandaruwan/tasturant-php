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


<!-- Javascript code for dynamic combo box generatin -->

<script type="text/javascript" src="js/dynamic.js"></script>

<!-- Admin Styling -->

<link rel="stylesheet" href="css/admin.css">
<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">T</span>as<span class="highlight">T</span>uran<span class="highlight">T</span></h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="add_item.php">Add Items</a></li>
                        <li><a href="new_orders.php">New Orders</a></li>
                        <li><a href="confirmed_orders.php">Confirmed Orders</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>

        
        <div><center><h1>ADMIN AREA</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">
                <div><center><h2>Add Items</h2></center></div>
                <hr style=" height:20px; background:black;">
                <div class="container">
                        
                    <div class="add_it">
                    
                    <form action="" name="form1" method="post" enctype="multipart/form-data">
                    
                        <p><input type="text" name="it_nm" placeholder="Item Name"></p>

                        <p><input type="text" name="it_price" placeholder="Item Price"></p>

                        <p><input type="text" name="it_qty" placeholder="Item Quantity"></p>

                        <p><input type="file" name="it_img"></p>

                    <!-- Dynamically generating bellow combo boxes -->

                        <p>Choose First Category<br>
                        <select name="cat1" id="cat1" onchange="populate('cat1','cat2')" class="ad_sel">
                        
                            <option value=""></option>
                            <option value="Pizza">Pizza</option>
                            <option value="Rice">Rice</option>
                            <option value="Drinks">Drinks</option>
                        
                        </select></p>

                        <p>Choose Second Category<br>
                        <select name="cat2" id="cat2" onchange="populateNxt('cat2','cat3')" class="ad_sel">
                        
                        </select></p>

                        <p>Choose Third Category<br>
                        <select name="cat3" id="cat3" class="ad_sel">
                        
                        </select></p>

                        <p><textarea name="it_desc" id="it_desc" cols="30" rows="10" placeholder="Item Description"></textarea></p>

                        <p><input type="submit" name="submit1" value="Upload" class="b_add"></p>
                    
                    </form>


                    <!-- Add Items -->
                    <?php
                    
                        if(isset($_POST["submit1"])){

                            //Image uploading

                            $v1 = rand(1111,9999);
                            $v2 = rand(1111,9999);

                            $v3=$v1.$v2;

                            $v3 = md5($v3);

                            $fnm = $_FILES["it_img"] ["name"];
                            $dst = "images/".$v3.$fnm;
                            move_uploaded_file($_FILES["it_img"]["tmp_name"],$dst);

                            // Execute the query

                            mysqli_query($link,"insert into food values('','$_POST[it_nm]',$_POST[it_price],$_POST[it_qty],'$dst','$_POST[cat1]','$_POST[cat2]','$_POST[cat3]','$_POST[it_desc]')");


                        }

                    
                    ?>
                    <center>
                    <!-- Populate insert items details on a table -->
                    <div>

                        <?php
                        $res=mysqli_query($link,"select * from food");
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
                        echo "<td>"; echo "ITEM DESCRIPTION"; echo "</td>";
                        echo "<td>"; echo ""; echo "</td>";
                        echo "</th>";

                        while($row = mysqli_fetch_array($res)){
                            
                            echo "<tr>";
                            echo "<td>"; echo $count; echo "</td>";
                            echo "<td>"; ?> <img src="../admin/<?php echo $row["item_image"];?>" height="100" width="100"> <?php echo "</td>";
                            echo "<td>"; echo $row["item_name"]; echo "</td>";
                            echo "<td>"; echo $row["item_price"]; echo "</td>";
                            echo "<td>"; echo $row["item_qty"]; echo "</td>";
                            echo "<td>"; echo $row["item_cat1"]; echo "</td>";
                            echo "<td>"; echo $row["item_cat2"]; echo "</td>";
                            echo "<td>"; echo $row["item_cat3"]; echo "</td>";
                            echo "<td>"; echo $row["item_desc"]; echo "</td>";
                            echo "<td>"; ?> <a class="del_o" href="delete_item.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php echo "</td>";
                            echo "</tr>";
            
                            $count = $count+1;
                            
                        }

                        echo "</table>";
                        

                        ?>


                    </div>

                    </center>
                    
                    </div>
                </div>
                
            </section>
    <!--All footer parts-->
    
     <?php include 'inc/footer.php';?>