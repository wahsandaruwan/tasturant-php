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
$id = $_GET["id"];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tasturant");

?>
<!-- Admin Styling -->

<link rel="stylesheet" href="css/admin.css">
<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">T</span>as<span class="highlight">T</span>uran<span class="highlight">T</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="add_item.php">Add Items</a></li>
                        <li class="current"><a href="new_orders.php">New Orders</a></li>
                        <l><a href="confirmed_orders.php">Confirmed Orders</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        
        <div><center><h1>Customer Information</h1></center></div>
        <hr style=" height:20px; background:black;">
        <section id="services">

                <div class="container">
                        
                <div class="cust_info">
                    
                <?php
                
                $res = mysqli_query($link,"select * from confirm where id=$id");

                while($row = mysqli_fetch_array($res)){

                ?>

                <!-- Dynamically generating customer info-->
                   
                   <div class="it_details">
                   <h1>Personal Information</h1>
                   <p>Full Name : <?php echo $row["fullname"];?></p>
                   <p>Email: <?php echo $row["email"];?></p>
                   <p>Phone: <?php echo $row["phone"];?></p>
                   <p>Address: <?php echo $row["address"];?></p>
                   <h1>Payment Information</h1>
                   <p>Card Type: <?php echo $row["card_type"];?></p>
                   <p>Card Number: <?php echo $row["card_num"];?></p>
                   <p>CSV: <?php echo $row["csv"];?></p>
                   <p>Expire Date: <?php echo $row["expire_date"];?></p>

                   <p><a href="new_orders.php" class="b_cust">Go Back</a></p>
                   
                   </div><br><br><br>
                   
                <?php        

                }
        
                ?>
                    
                    </div>
                </div>
                
            </section>
    <!--All footer parts-->
    
     <?php include 'inc/footer.php';?>