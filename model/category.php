<?php
include_once '../conf.php';
include_once '../function.php';
spl_autoload_register('loadClass');

class category{
    private $catid;
    private $catname;
    public function __construct($catid='',$catname='')
    {
        $this->catid=$catid;
        $this->catname=$catname;
    }
    public function getCatId(){
        return $this->catid;
    }public function getCatName(){
        return $this->catname;
    }
    public function setCatId($cid){
        $this->catid=$cid;
    }
    public function setCatName($cn){
        $this->catname=$cn;
    }
    function all(){
        $category = new CATEGORYDB();
        $data = $category->alldb();
        $category->disconnectdb();
        return $data;
    }
    function findByID(){
        $category = new CATEGORYDB();
        $data = $category->findByIDdb($this->catid);
        $category->disconnectdb();
        return $data[0];
    }
    function insert(){
        $category = new CATEGORYDB();
        $category->insertdb($this->catid,$this->catname);
        $category->disconnectdb();
    }
    function update(){
        $category = new CATEGORYDB();
        $category->updatedb($this->catid,$this->catname);
        $category->disconnectdb();
    }
    function delete(){
        $category = new CATEGORYDB();
        $category->deletedb($this->catid);
        $category->disconnectdb();
    }

    
}