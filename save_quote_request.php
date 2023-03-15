<?php

  include("admin/connection.php");
  //print_r($_POST);
  extract($_POST);

  //$sql="CREATE TABLE customer_quote_request(customer_quote_request_id INT PRIMARY KEY AUTO_INCREMENT,name varchar(200),email varchar(200),phone varchar(30),message TEXT)";
  $message=addslashes($message);
  $sql="INSERT INTO customer_quote_request(name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

  mysqli_query($conn,$sql);

?>

<script>
    alert("Quote Sent");
    location.href="index.php";
</script>