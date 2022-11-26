<?php
include '../model/UserModel.php';
include '../util/MySQL.php';
include '../util/insert.php';
$mysqlConn= new MySQL();

//  $username= $_POST['user_name'] ;
//  $password= $_POST['user_password'];
//  $repassword=$_POST['user_repassword'];
//  $email=$_POST['user_email'];
//  $action=$_POST['action_2'];
//    if ($action=="register_signup"){
//       if($username==""||$password==""||$repassword==""||$email==""){
//          echo ("Nhap thong tin di nao");
//       }elseif($repassword!=$password){
//          echo ("Mat khau khong trung khop");
//       }else{
//          echo ("Dang ky thanh cong");
//       }
//    }
 
if(isset($_POST) && !empty($_POST))
{
   $user=new UserModel($_POST['user_name'],$_POST['user_password']);
   $email=$_POST['user_email'];
   $repassword=$_POST['user_repassword'];
   if($user->getUsername()==""||$user->getPassword()==""||$repassword==""||$email==""){
      echo " Nhap thong tin nao";
   }else if($user->getPassword()!=$repassword){
      echo "mat khau khong hop le nhe chua";
   }else{
      $user->showName();
   }
   $mysqlConn->connected();
}


?>