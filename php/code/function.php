<?php

# @Author: xiaoxi
# @Date:   2019-12-15 11:13:13
# @Last Modified by:   Jack
# @Last Modified time: 2019-12-15 11:13:37



// 值传递
// 引用传递
// 传递对象
// 栈内存主要是存储一些基本数据类型，比如整型、浮点型、字符串型、布尔型。 而堆内存存放的是一些比较大、复杂的数据类型，比如对象、数组

// 可变函数
/*function test(){
echo 'hello world';
}
$func ='test';
// 判断函数是否存在:
// function_exists
// is_callable
if(function_exists($func)){
$func();
}*/

// 函数嵌套
// 函数中可以定义函数，嵌套的函数不能直接调用，需要先执行最外层函数，里面的函数才可以被调用
// PHP中的函数作用域是全局的

// 冒泡排序
/*
function bullingSort($array)
{
    $checkPoint = 0;
    $arrayCount = count($array);
    while (true) {
        $swapCount = check($array, $checkPoint, $arrayCount);
        if ($swapCount == 0) {
            return $array;
        }
        $checkPoint++;
    }
}

function check(&$array, $checkPoint, $arrayCount)
{
    $swapCount = 0;
    for ($i = $arrayCount - 1; $i > $checkPoint; $i--) {
        if ($array[$i] < $array[$i - 1]) {
            swap($array, $i);
        }
        $swapCount++;
    }

    return $swapCount;
}

function swap(&$array, $i)
{
    $tmp           = $array[$i];
    $array[$i]     = $array[$i - 1];
    $array[$i - 1] = $tmp;
}

$array = [6, 324, 123, 0, -123, 13];

print_r(bullingSort($array));
*/