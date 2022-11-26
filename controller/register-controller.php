<?php
    include '../model/user.php';

    $email=$_POST['email'];
    $password=$_POST['password'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];

    $a = new user($email,md5($password),$firstName,$lastName);
    $data  = $a->insert();
    var_dump($data);

