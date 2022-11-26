<?php
include '../model/category.php';
include '../model/book.php';

$cate = new category();
$data = $cate->all();

$book=new book();
$data1=$book->all();

include '../view/category.php';