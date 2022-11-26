<?php
class USERDB extends DB{
    function alldb(){
        $sql = 'select * from users';
        return $this->select($sql);
    }
    function findByIDdb($i){
        $sql = 'select * from users where email = ?';
        $arr=[$i];
        return $this->select($sql, $arr);
    }
    function insertdb($a,$p,$fn,$ln){
        $sql = 'insert into users values (?,?,?,?)';
        $arr = [$a,$p,$fn,$ln];
        return $this->update($sql,$arr);
    }
    function updatedb($a,$p,$fn,$ln){
        $sql = 'update users set password=?, firstName=?,lastName=? where email=?';
        $arr= [$p,$fn,$ln,$a];
        return $this->update($sql, $arr);
    }
    function deletedb($a){
        $sql = 'delete from users where email=?';
        $arr= [$a];
        return $this->update($sql, $arr);
    }
    function disconnectdb(){
        $this->disconnect();
    }

}