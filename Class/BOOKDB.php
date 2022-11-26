<?php
class BOOKDB extends DB{
    function alldb(){
        $sql = 'select * from book';
        return $this->select($sql);
    }
    function findByIDdb($i){
        $sql = 'select * from book where book_id = ?';
        $arr=[$i];
        return $this->select($sql, $arr);
    }
    function insertdb($bid,$bn,$des,$price,$img,$pub_id,$cat_id){
        $sql = 'insert into book values (?,?,?,?,?,?,?)';
        $arr = [$bid,$bn,$des,$price,$img,$pub_id,$cat_id];
        return $this->update($sql,$arr);
    }
    function updatedb($bid,$bn,$des,$price,$img,$pub_id,$cat_id){
        $sql = 'update book set book_id=?,book_name=?,description=?,img=?,pub_id=?,cat_id=?';
        $arr= [$bid,$bn,$des,$price,$img,$pub_id,$cat_id];
        return $this->update($sql, $arr);
    }
    function deletedb($bid){
        $sql = 'delete from book where book_id=?';
        $arr= [$bid];
        return $this->update($sql, $arr);
    }
    function disconnectdb(){
        $this->disconnect();
    }

}