<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
//$subject = $_POST['subject'];
$message = $_POST['message'];
//$subject = 'tectards New Message, from ' . $name;

$TO = "admin@tectards.com";
$h = "From: " . $email;
$content = "$name ($email) sent you the following message :\n\n$message";

if(mail($TO, $email, $content, $h))
{	//echo "Email sent";
	?>
        <script type="text/javascript">                                                                                       
         alert("Thank you for contacting Tectards!\nYour mail sent successfully.");                                                                  
         location="index.php";
         //header('location:../base.php');
         </script>
    <?php
}
else{
    //echo "Email sending failed";		
    ?>
        <script type="text/javascript">                                                                                       
         alert("Oops...!\nSomething went wrong! Please enter valid details");                                                                  
         location="index.php";
         //header('location:../base.php');
         </script>
    <?php
}
?>