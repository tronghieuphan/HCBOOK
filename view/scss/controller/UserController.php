<?php
// include './UserModel.php';
// $user= new UserModel($_POST['txt_user'],$_POST('txt_pass'));
// $user->showName();
include '../util/MySQL.php';
$mysqlConn= new MySQL();
$mysqlConn->connected();
?>