<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailfrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailto = "ramkumarergeo@gmail.com";


  mail($mailto,$subject);
  header("Location: index.html?mailsent")
}

  
?>
