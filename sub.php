<!-- Subscribe Form -->

<?php 
$email = $_POST['email'];
$formcontent="Email: $email";
$recipient = "texthimalrog@gmail.com";
$subject = "Subscribe";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>

<script>
    alert("Successfully Send!");
</script>