<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"tasturant");
    $id=$_GET["id"];

    // Delete image
    $res = mysqli_query($link,"select * from food where id=$id");

    while($row = mysqli_fetch_array($res)){

        $img = $row["item_image"];

    }
    unlink($img);

    mysqli_query($link,"delete from food where id=$id");
    
?>
<script>
    window.location = "add_item.php";
</script>