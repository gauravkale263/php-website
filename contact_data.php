<?php
include("admin/connection.php");
?>
<?php
    extract($_POST);

    //$sql="CREATE TABLE contact_data(contact_data_id INT PRIMARY KEY AUTO_INCREMENT,name varchar(200),email varchar(200),subject TEXT,message TEXT)";
    $sql="INSERT INTO contact_data(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    mysqli_query($conn,$sql);
?>

<script>
  alert("Success");
  window.location.href="contact.php";
</script>

