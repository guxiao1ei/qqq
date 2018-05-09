<?php
    /*
       接口
       1)可能是API  Application Program Interface  系统函数
       2)一个URL地址 https://www.baidu.com/weather.php?city=beijing
       3)如何定义一个类的规范,要求这个类都有什么方法
      
       接口用来限制 实现它的类,
       1)方法名必须一致
       2)方法的参数个数与类型必须相同
    */
    
    // 定义接口
    interface xxoo
    {
        public function aaa();
        public function bbb();
        public function ccc();
    }
    
    interface aabb
    {
        public function ddd();
    }
    
    interface test extends xxoo,aabb
    {
        public function eee();
    }
    
    class jingshui implements test
    {
    
    }
    
    // 定义一类,实现xxoo这个接口
    class Test implements xxoo
    {
        public function aaa(){echo '实现aaa<br>';}
        public function bbb(){echo '实现bbb<br>';}
        public function ccc(){echo '实现ccc<br>';}
        public function ddd(){echo '自定义的';}
    }
    