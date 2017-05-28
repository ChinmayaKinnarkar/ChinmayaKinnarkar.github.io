AddType application/x-httpd-php .htm .html

<?php
  if(isset($_POST['submit'])){
  $text=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];

  $to='kinnarkarchinmaya@gmail.com';
  $subject='Your Portfolio Submission';
  $msg="Name: ".$text."\n"."Message: "."\n\n".$msg;
  $headers="From: ".$email;

  if(mail($to,$subject,$msg,$headers)){
  	      echo "<h1>Sent Successfully! Thank you"." ".$text.", I will contact you shortly!</h1>";
  }
  else{
        echo "Something went wrong!";
      }
  }
?>