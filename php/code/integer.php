<?php

# @Author: xiaoxi
# @Date:   2019-12-15 21:46:38
# @Last Modified by:   Jack
# @Last Modified time: 2019-12-16 08:40:30


// 数学函数库是PHP核心的组成部分，无需安装

// 取整
// floor($int) 向下取整
// ceil($int) 向上取整
// 
/*$int = 123.4;
echo floor($int),'<br/>';
echo ceil($int);
*/


// 幂运算和平方根运算
// pow($base,$exp) 幂运算
// sqrt($arg) 平方根运算
// 
/*echo pow(10,2);
echo sqrt(100);*/

// 最大值、最小值
// max($arg1,$arg2...)
// min($arg1,$arg2..)

/*echo max(12312,-13123,8113);
echo min(12312,-13123,8113);
echo min([12312,-13123,8113]);
echo max('a','A','b','c','');
echo min('a','A','b','c','');*/

// 随机数
// rand() 随机数  
// mt_rand() 更好的产生随机数

// echo rand(60,100),'<br/>';
// echo mt_rand(60,100);


// demo 
/* 
生成随机字符串
$str="qwertyuiopasdfghjklzxcvbnm123456789";
$strLenf=strlen($str);
$chars='';
// 方式一
for($i=0;$i<4;$i++){
	$chars.=substr($str,mt_rand(0,$strLen-1),1);
}

// 方式二
$chars=substr(str_shuffle($str),0,4);

// 方式三
for($i=0;$i<4;$i++){
	$chars.=$str{mt_rand(0,$strLen-1)};
}

echo $chars;*/

// 四舍五入
// round($val,$precision)
/*echo round(199.898,2);
echo round(199.888,2);*/

// 数字格式化
// number_format($val,$decimal)

/*echo number_format(12456789.199,2);*/

// 余数
// fmod 返回除数的浮点数余数

/*echo fmod(13.1,2.1);
echo  13.1%2.1;*/

