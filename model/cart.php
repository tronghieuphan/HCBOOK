<?php 
include_once '../conf.php';
include_once '../function.php';
spl_autoload_register('loadClass');
include_once '../model/book.php';
class Cart 
{
    private $cart;
    function __construct()
    {
        if (!isset($_SESSION)  ) session_start();
        $this->cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];
    }

    function __destruct()
    {
        $_SESSION['cart']= $this->cart;
    }

        
    function add($id, $qty=1)
    {
        if (isset($this->cart[$id]) ) 
        {
            $this->cart[$id]['qty']+= $qty;
        }
        else{
            $obj = new book();
            $book = $obj->findByID($id);
            if (Count($book)>0) 
            {
                $book['qty']=$qty;
                $this->cart[$id]=$book;
            }
            
        } 
    }

    function delete($id)
    {
        unset($this->cart[$id]);
    }

    function show()
    {
        // echo '<pre>';
        // print_r($this->cart);
        $action = isset($_GET['id'])?$_GET['id']:'';
        $book = new book($action);
        $data= $book->findByID();
        include "../view/cart.php";
    }
}