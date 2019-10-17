<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");
    $id=$_GET["id"];
    mysqli_query($link,"delete from add_orders where id=$id");
?>
<script>
    window.location = "order_details.php";
</script>