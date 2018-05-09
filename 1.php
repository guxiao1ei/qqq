<?php

    /*
      抽象类
      
      没有方法体的成员方法,叫抽象方法, 含有抽象方法的类,叫抽象类
      抽象方法和抽象类之类必须加上 abstract
      
      
      继承抽象类的子类, 或者它还是抽象类,或者实现抽象类中的抽象方法.
      
    */
    abstract class Person
    {
        public function eat(){echo '无肉不欢';}
        public function drink(){echo '一人我饮酒醉';}
        public function shit(){echo '人体一切的排泄都是有快感的!';}
        abstract public function pee();   // 这里没有方法体,所以是抽象方法
    }
    
    // $p1 = new Person; 抽象类不能直接实例化对象
    
    class Boy extends Person
    {
        public function pee(){echo '顺风尿一鞋';}
    }
    

    
    
    
    