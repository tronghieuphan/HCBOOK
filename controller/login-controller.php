<?php
    include '../model/user.php';
    $email=isset($_POST['email'])?$_POST['email']:"";
    $pw=isset($_POST['password'])?md5($_POST['password']):"";

    $a = new user($email);
    $data=$a->findByID();

    if($email==$data['email'] && $pw==$data['password']){
        header('location:../view/index.php');
    }else{
        echo' dang nhap that bai';
    }


