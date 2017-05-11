<?php
 include "config.php";
 if(isset($_POST['insert']))
 {
 $type=$_POST['type'];
 $location=$_POST['location'];
 $name=$_POST['name'];
 $number=$_POST['number'];
 $details=$_POST['details'];
 $date="2017";

 $q=mysqli_query($con,"INSERT INTO `complains` (`id`, `type`, `location`, `name`, `number`, `details`, `date`) VALUES ('NULL', '$type', '$location', '$name', '$number', '$details', '$date')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>