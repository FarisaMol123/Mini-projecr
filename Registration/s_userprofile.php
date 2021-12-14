<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
require_once("../db.class.php");
$ob=new db_operations();
$name=$_SESSION['name'];
$email=$_SESSION['username'];
$pass=$_SESSION['password'];
$gender=$_SESSION['gender'];
$phoneno=$_SESSION['phoneno'];
$house=$_SESSION['house_name'];
$city=$_SESSION['city'];
$district=$_SESSION['district'];
$state=$_SESSION['state'];
$country=$_SESSION['country'];
$shop_name=$_POST['shop_name'];
$building=$_POST['building_name'];
$shopcity=$_POST['city_name'];
$shopdist=$_POST['district_name'];
$shopstate=$_POST['state_name'];
$license_no=$_POST['license_no'];

$_SESSION['user_name']=$email;
 $_SESSION['status']="Active";
      


$file_name2= $_FILES['license']['name'];
$file_size2=$_FILES['license']['size'];
      $file_tmp2 =$_FILES['license']['tmp_name'];
      $file_type2=$_FILES['license']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['pic']['name'])));
      
      $extensions= array("jpeg","jpg","png");


 // if(in_array($file_ext,$extensions)=== false){
 //         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 //      }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
            if(empty($errors)==true){
         

move_uploaded_file($file_tmp2,"uploads/".$file_name2);
}

    $sel1="select * from shop where license_no='$license_no'";
    $res=$ob->db_read($sel1);
     if(mysqli_num_rows($res))
  	{
  	 ?>
<script>
alert("shop already exist");
window.location='regshop_1.php'
</script>;
<?php 
}
else 
{
$insertl="insert into login(user_name,password,user_type) values('$email','$pass',2)";
$insertr="insert into registration(full_name,user_name,gender,house_name,city,district,state,country,contact_number) values('$name','$email','$gender','$house','$city','$district','$state','$country','$phoneno')";
$inserts="insert into shop(user_name,shop_name,building_name,city,district,state,country,license_no,license_photo) values('$email','$shop_name','$building','$shopcity','$shopdist','$shopstate','$country','$license_no','$file_name2')";
echo $inserts;	
$ob->db_write($insertl);
$ob->db_write($insertr);
$ob->db_write($inserts);
 $_SESSION['status']="Active";
header("location:../login/login.php");
}
?>
</body>
</html>
