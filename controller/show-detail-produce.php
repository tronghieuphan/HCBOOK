<?php
include_once '../model/book.php';
include_once '../model/category.php';
    $action = isset($_GET['id'])?$_GET['id']:'';
    $book = new book($action);
    $data= $book->findByID();
    $cates = new category($data['cat_id']);
    $cate = $cates->findByID();
    $dataCat = $cate['cat_name'];
    include '../view/single-product.php';