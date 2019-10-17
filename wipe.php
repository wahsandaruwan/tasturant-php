<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");
    mysqli_query($link,"truncate table add_orders");
?>
<script>
    window.location = "order_details.php";
</script>