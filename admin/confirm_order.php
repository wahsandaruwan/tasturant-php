<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");
    $id=$_GET["id"];
    mysqli_query($link,"update confirm set confirm = 'YES' where id=$id");
?>
<script>
    window.location = "confirmed_orders.php";
</script>