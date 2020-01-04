<?php

# @Author: xiaoxi
# @Date:   2019-12-16 08:40:50
# @Last Modified by:   Jack
# @Last Modified time: 2019-12-16 12:40:23



// 格式化一个时间
// date($format,$timestamp)
/*
   Y: 4位数字年份    y:2位数字年份
   F: 英文月份       M:缩写月份
   m: 有前导零的月份 n:没有前导零的月份
   d: 月份中的第几天，前导零    j:月份中的第几天，没有前导零
   D:星期几，英文简写格式   w :星期几，数字格式
   H: 时间，24小时，有前导零   i:分钟数，有前导零   s:秒数 ，有前导零
 */


// 时区 
//date_default_timezone_set();
// date_default_timezone_get();
//
/*date_default_timezone_set('Europe/London');
echo date_default_timezone_get();*/

// 时间戳
// time() 
// microtime()
// strtotime()
// strtotime某些月份可能会「溢出],比如在每月的29号就可能会移除，2月会有28号的情况
// 使用 last day of this month,  frist day of this month

/* 
echo microtime();
echo microtime(true);
function  microtime_float()
{
	list($usec,$sec) = explode(' ' ,microtime());
	return (float)$sec+(float)$usec;
}


echo date('Y-m-d H:i:s',strtotime('last day of +2 month',strtotime('2020-12-30 12:00:00')));
echo date('Y-m-d H:i:s',strtotime('first day of this month'));
echo date('Y-m-d H:i:s',strtotime("next Thursday"));
echo date('Y-m-d H:i:s',strtotime("last mondy"));
*/


// 唯一的id
//uniqid() 
//
/*// 生成一个uuid
echo md5(uniqid(microtime().mt_rand()));*/

// 时间相关的信息
// getdate($timestemp) 