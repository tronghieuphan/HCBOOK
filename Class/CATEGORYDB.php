<?php
class CATEGORYDB extends DB{
    function alldb(){
        $sql = 'select * from category';
        return $this->select($sql);
    }
    function findByIDdb($i){
        $sql = 'select * from category where cat_id = ?';
        $arr=[$i];
        return $this->select($sql, $arr);
    }
    function insertdb($cid,$cn){
        $sql = 'insert into category values (?,?)';
        $arr = [$cid,$cn];
        return $this->update($sql,$arr);
    }
    function updatedb($cid,$cn){
        $sql = 'update category set cat_name=?';
        $arr= [$cid,$cn];
        return $this->update($sql, $arr);
    }
    function deletedb($a){
        $sql = 'delete from category where cat_id=?';
        $arr= [$a];
        return $this->update($sql, $arr);
    }
    function disconnectdb(){
        $this->disconnect();
    }

}