<?php
include_once '../conf.php';
include_once '../function.php';
spl_autoload_register('loadClass');

class book{
    private $bookid;
    private $bookname;
    private $desciption;
    private $price;
    private $img;
    private $pub_id;
    private $cat_id;

    public function __construct($bookid='',$bookname='',$desciption='',$price='',$img='',$pub_id='',$cat_id='')
    {
        $this->bookid=$bookid;
        $this->bookname=$bookname;
        $this->desciption=$desciption;
        $this->price=$price;
        $this->img=$img;
        $this->pub_id=$pub_id;
        $this->cat_id=$cat_id;
    }
    public function getBookId(){
        return $this->bookid;
    }public function getBookName(){
        return $this->bookname;
    }
    public function getDescription(){
        return $this->desciption;
    }public function getPrice(){
        return $this->price;
    }
    public function getImg(){
        return $this->img;
    }public function getPub_Id(){
        return $this->pub_id;
    }
    public function getCat_Id(){
        return $this->cat_id;
    }
    public function setBookId($bid){
        $this->bookid=$bid;
    }
    public function setBookName($bn){
        $this->bookname=$bn;
    }
    public function setDecription($des){
        $this->desciption=$des;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setImg($img){
        $this->img=$img;
    }
    public function setCatName($pub_id){
        $this->pub_id=$pub_id;
    }
    public function setCatId($cat_id){
        $this->catid=$cat_id;
    }
   
    function all(){
        $book = new BOOKDB();
        $data = $book->alldb();
        $book->disconnectdb();
        return $data;
    }
    function findByID(){
        $book = new BOOKDB();
        $data = $book->findByIDdb($this->bookid);
        $book->disconnectdb();
        return $data[0];
    }
   

    
}