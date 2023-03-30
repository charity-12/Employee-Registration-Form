<?php
    
  $title = $_POST['title'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $photo = $_FILES['photo']['name'];
  $con=new mysqli("localhost","root","","mytest");

if(!$con)
{
echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql="INSERT INTO tb_upload VALUES('','$title','$firstname','$lastname','$address1','$address2','$city','$state','$zip','$photo')";
$result=$con->query($sql);
echo "record successfully added";
?>