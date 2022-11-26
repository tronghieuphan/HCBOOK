<?php
    function loadClass($className){
        if(is_file("../Class/$className.php")){
            include "../Class/$className.php";
        }else{
            echo "No class $className";
            exit;
        }
    }