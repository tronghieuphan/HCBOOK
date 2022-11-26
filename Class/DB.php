<?php
    class DB{
        static protected $con = null;
        function __construct(){
            $conStr = 'mysql:host='.HOST.';dbname='.DB;
            if (self::$con == null){
                self::$con = new PDO($conStr, USER,PASSWORD);
                self::$con->query('set names utf8');
            }
            return self::$con;
        }
        protected function disconnect(){
            self::$con = null;
        }
        protected function select($sql, $arr=[]){
            $stm = self::$con->prepare($sql);
            $stm->execute($arr);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        protected function update($sql,$arr=[]){
            $stm = self::$con->prepare($sql);
            $stm->execute($arr);
            return $stm->rowCount();
        }
    }
    