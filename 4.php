<?php

    $arr = [
        'name'=>['张三','李四','王五','赵六'],
        'sex' =>['男', '女', '男', '女'],
        'age' =>[18, 19, 17, 20],
    ];
    
    
    $tmp = [];
    foreach($arr['name'] as $k=>$v){
        $tmp[$k]['name'] = $arr['name'][$k];
        $tmp[$k]['sex']  = $arr['sex'][$k];
        $tmp[$k]['age']  = $arr['age'][$k];
    }
    echo '<pre>';
    print_r($tmp);
    
    /*
    $tmp[0]['name'] = $arr['name'][0];
    $tmp[0]['sex']  = $arr['sex'][0];
    $tmp[0]['age']  = $arr['age'][0];
    
    
    $tmp[1]['name'] = $arr['name'][1]
    $tmp[1]['sex'] = $arr['sex'][1]
    $tmp[1]['age'] = $arr['age'][1]
    */