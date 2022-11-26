<?php
include '../model/UserModel.php';




 $username= $_POST['user_name'] ;// sai luon cho dang ky
 $password= $_POST['user_password'];//sai luon cho dang ky
 $actionsignin=$_POST['action_1'];

 if(isset($_POST)&& !empty ($_POST))
 {
if($actionsignin=="signin"){
      if($username=="tronghieu"&&$password="tronghieu"){
         header("Location:../index.php");
      }else{
         echo ("nhap thong tin di");
      }
   }else if($actionsignin=='register'){
      header("Location:../register.php");
   }
  
}


?>