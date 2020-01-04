<?php

# @Author: xiaoxi
# @Date:   2019-12-15 11:12:44
# @Last Modified by:   Jack
# @Last Modified time: 2019-12-15 21:46:00

// 函数是实现特定功能、可重复执行的代码端


// 字符串长度
// strlen($string) 字节, mb_strlen($string) 字符 


// 字符串大小写
  // strtolower(),strtoupper(),mb_strtolower,mb_strtoupper,mb_convert_case()
  // ucfirst,ucwords


// 字符串替换
  // str_replace(),str_ireplace()

// demo练习
/*$str= "ZenD_CONTRollER_FronT";

$str=str_replace('_',' ', $str);

$str=str_replace(' ','_',ucwords(strtolower($str)));

echo $str;*/

// HTMLS实体相关的函数
// htmlentities() 把字符转换为HTML实体 
// htmlspecialchars() 将特殊字符转换为html实体
// html_entity_decode()、htmlspeciachars_decode()


// 删除空白字符
// trim  ltrim  rtrim

// $string =" \nthis is a string \r ";

// var_dump(trim($string));

// 字符串位置获取
// strpos($str,$search,$offset),stripos($str,$search,$offset)
// strrpos($str,$search,$offset)


// 字符串截取
// substr($str,$start,$length)


// demo
/*$str='.jepg.png.php';

$dest = substr($str,strrpos($str,'.'));
var_dump($dest);*/


// 搜索字符串首次出现
// strstr($str,$search,$before)
// stristr($str,$search,$before)
// strrchr($str,$search)
/*$str="this is wanghuan, wanghuan he is chentao";
echo strstr($str,'wanghuan',true);
echo strrchr($str,'wanghuan');*/


// 字符串反转
// strrev
/*$str="this is a wanghuan";
echo  strrev($str);
*/

// 字符串加密
// md5($str)
/*
$password='12345';
echo md5($password);
*/

// 打乱字符串
// str_shuffle 函数
/*
echo str_shuffle('jackson');*/

// 字符串分割
// explode(',',$str);
// 
/*$names='jack,tao,wang';
$result=explode(',',$names);
var_dump($result);*/

// 字符串拼接
// implode(',',$arr);
//
/*$names=['jack','tom','tonny'];
var_dump(implode(' ',$names));*/

// 字符串格式化
// sprintf($str,$args)函数
// %s：字符串  %d：整数   %f:浮点数
// %d: 二进制  %e:科学计数法

/*$str="There are %u million people in the %s city";
echo  sprintf($str,2,'Shanghai');
echo sprintf("两位小数:%1\$.2f<br/> 整数:%1\$d",123);
$price=199;
echo sprintf("金额:%1\$.2f",$price);
*/


