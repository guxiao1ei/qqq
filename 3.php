<?php
    /*
       异常处理
       
       异常处理的目的是:把正常代码与异常分离开来
       
       异常处理可以自定义错误信息,防止不必要的信息外露
       
    */
    class myException extends Exception
    {
    
    }
    
    
    try{
        $_GET['mon'] = -1;
        if ($_GET['mon']<1 || $_GET['mon']>12) {
            // 把每一次异常当成一个对象   throw 表示把异常对象抛出去,
            throw new myException('你这个月不在合范围', 1024);
        }
        echo '这个月还是蛮不错的'; // 如果上面抛出异常,这里的代码不会执行
    }catch(myException $e){
        // echo $e->getMessage(),'<br>';
        // echo $code = $e->getCode(),'<br>';
        // echo $e->getFile(),'<br>';
        echo '子类的异常处理代码';
    }catch(Exception $e){
        echo '父类的异常处理代码';
    }