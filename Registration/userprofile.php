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
//$pic=$_POST['pic'];
$_SESSION['user_name']=$email;
 $_SESSION['status']="Active";

$file_name = $_FILES['pic']['name'];
      $file_size =$_FILES['pic']['size'];
      $file_tmp =$_FILES['pic']['tmp_name'];
      $file_type=$_FILES['pic']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['pic']['name'])));
      
      $extensions= array("jpeg","jpg","png");


 // if(in_array($file_ext,$extensions)=== false){
 //         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 //      }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
            if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         //echo "Success";


$insertl="insert into login(user_name,password) values('$email','$pass')";
$insertr="insert into registration(full_name,user_name,gender,house_name,city,district,state,country,contact_number,profile_picture,reg_status) values('$name','$email','$gender','$house','$city','$district','$state','$country','$phoneno','$file_name',1)";
$ob->db_write($insertl);
$ob->db_Write($insertr);
header("location:../Homepage/home_user.php");

      }else{
         print_r($errors);
      }


// if(!$resl || !$resr)
// {
// $ob->db_write("delete from login where user_name='$email' ");
// $ob->db_write("delete from registration where user_name='$email' ");	
// ?>
// <script>
// 	alert("account creation failed");
// 	window.location='reg1.php'
// </script>;
// <?php
// }
// else
// {	
// $ob->db_write($insertl);
// $ob->db_Write($insertr);
// header("location:../Homepage/index1.php");
// }
?>
</body>
</html>
