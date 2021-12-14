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
$experience=$_POST['experience'];
$tailor_sup=$_POST['tailor_support'];
$_SESSION['user_name']=$email;
 $_SESSION['status']="Active";
 
$file_name1 = $_FILES['pic']['name'];
$file_size1=$_FILES['pic']['size'];
      $file_tmp1 =$_FILES['pic']['tmp_name'];
      $file_type1=$_FILES['pic']['type'];

$file_name2= $_FILES['aadharcard']['name'];
$file_size2=$_FILES['aadharcard']['size'];
      $file_tmp2 =$_FILES['aadharcard']['tmp_name'];
      $file_type2=$_FILES['aadharcard']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['pic']['name'])));
      
      $extensions= array("jpeg","jpg","png");


 // if(in_array($file_ext,$extensions)=== false){
 //         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 //      }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
            if(empty($errors)==true){
         move_uploaded_file($file_tmp1,"uploads/".$file_name1);

move_uploaded_file($file_tmp2,"uploads/".$file_name2);
}
$insertl="insert into login(user_name,password,user_type) values('$email','$pass',1)";
$insertr="insert into registration(full_name,user_name,gender,house_name,city,district,state,country,contact_number,profile_picture,reg_status) values('$name','$email','$gender','$house','$city','$district','$state','$country','$phoneno','$file_name1',1)";
$insertt="insert into tailor(user_name,tailor_support,experience,aadharcardphoto) values('$email','$tailor_sup','$experience','$file_name2')";	
$ob->db_write($insertl);
$ob->db_write($insertr);
$ob->db_write($insertt);
header("location:../dashboard/dashboard_tailor/examples/user.php");
?>
</body>
</html>
