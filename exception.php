<?php

    
    function xxoo($e)
    {
        // if ($e instanceof myException){
        
        // } else if ($e instanceof Exception){
           
        // }
        if ($e instanceof PDOException) {
            error_log($e->getMessage());
            error_log($e->getCode());
            error_log($e->getFile());
            echo '数据库错误!';
        }
        
        echo $e->getMessage();
        die;
    }
    
    set_exception_handler('xxoo');
    
    
    $a = 5;
    $b = 0;
    if ($b==0) {
        throw new Exception('机房停电了,所以无法提供服务',1000);
    }
    echo $a/$b;
    