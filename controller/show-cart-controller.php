<?php 
include "../model/cart.php";


    $data = new Cart();
    $action = isset($_GET['action'])?$_GET['action']:'';
    var_dump($action);
    exit;
    if ($action=='add')
    {
        echo 'Them';
        $id = isset($_GET['id'])?$_GET['id']:'';
        $qty =isset($_GET['qty'])?$_GET['qty']:1;
        $obj->add($id, $qty);
    }
    // if ($action=='update')
    // {
    //     echo 'Sua';
    //     $id = isset($_GET['id'])?$_GET['id']:'';
    //     $qty =isset($_GET['qty'])?$_GET['qty']:1;
    //     $obj->update($id, $qty);
    // }
    // if ($action=='delete')
    // {
    //     echo 'Xoa';
    //     $id = isset($_GET['id'])?$_GET['id']:'';
    //     $obj->delete($id);
    // }
    if ($action !='')
        header('location:cart.php');
    else
        $obj->show();
    ?>
</body>
</html>