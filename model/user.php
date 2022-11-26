<?php
include '../conf.php';
include '../function.php';
spl_autoload_register('loadClass');

class user{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function __construct($a='',$p='',$fn='',$ln='')
    {
        $this->email = $a;
        $this->password = $p;
        $this->firstName = $fn;
        $this->lastName = $ln;
        
    }
    public function getEmail(){
        return $this->email;
    }public function getPass(){
        return $this->password;
    }public function getFirstName(){
        return $this->firstName;
    }public function getLastName(){
        return $this->lastName;
    }
    public function setEmail($a){
        $this->email = $a;
    }public function setPass($p){
        $this->password = $p;
    }public function setFirstName($fn){
        $this->firstName = $fn;
    }public function setLastName($ln){
        $this->lastName = $ln;
    }
    function all(){
        $user = new USERDB();
        $data = $user->alldb();
        $user->disconnectdb();
        return $data;
    }
    function findByID(){
        $user = new USERDB();
        $data = $user->findByIDdb($this->email);
        $user->disconnectdb();
        return $data[0];
    }
    function insert(){
        $user = new USERDB();
        $user->insertdb($this->email,$this->password,$this->firstName,$this->lastName);
        $user->disconnectdb();
    }
    function update(){
        $user = new USERDB();
        $user->updatedb($this->email,$this->password,$this->firstName,$this->lastName);
        $user->disconnectdb();
    }
    function delete(){
        $user = new USERDB();
        $user->deletedb($this->email);
        $user->disconnectdb();
    }


}