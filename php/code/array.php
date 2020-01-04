<?php

//  以下内容为数组的基本知识
/*基本*/
// 1.数组是复合类型，是数据的集合，PHP中的数组是要给有序映射
// 2.PHP中的数组其实是不区分是索引数组还是关联数组，都是通过键名找到对应的键值

/*创建数组*/
// 1.可以通过array()来创建数组，键名使用合法的数字或者字符串，键名重复会被后者覆盖，小数键名会舍弃掉小数部分，布尔键名转换为1或0，null键名转换为空字符串,新的键名为最大的索引键名加1
// 2.通过[]可以建立下表连续的索引数组，也可以指定[key]键名
// 3.可以使用range()建立下标连续的索引数组，compact()建立关联数组，define()定义常量数组

 
/*数组类型转化*/
//  1.普通标量转换为只有一个元素的数组
//  2.null转换为一个空数组
//  3.对象和资源不能转换为数组
//  4.使用(array)临时转换，使用settype($var,$type)永久转换

// 数组运算符
// 1.数组可以使用这些运算符+、===、==、!=、!==
// 2.+表示是合并数组，如果键名相同则取左操作数中的元素值
// 3.==表示判断数组是否相等，如果数组中的键名和键值相同则相等
// 4.=== 不仅键值键名相同，而且数据类型相同

// $arr1=[1,2,3];
// $arr2=[true,true,3];
// $arr3=['name'=>'jack','age'=>26];
// $arr4=['name'=>'wang','age'=>24,'email'=>'1243@13e.com'];
 


//  ***数组应用***

// 【遍历数组】
// 1.对连续下标的索引数组可以使用for来遍历数组 
// 2.foreach可以对索引数组、关联数组进行遍历，foreach($arr as $val) or ($arr as $key=>$val)
// 3.在使用foreach的时候必须确保变量是数组或对象
// 4.在PHP中使用foreach($arr as $val): ... endforeach; foreach对数组内部指针不在起作用
// 5.在php7中如下所示的例子中是可以打印出$arr[2]的值，之前的版本不可以
/*$arr=[1,2,3,4];
foreach($arr as $val):
echo $val;
unset($arr[2]);
endforeach;*/

// 6.forech中使用引用遍历会有更好的迭代特性，现在foreach迭代有更好的跟踪变化，比如在迭代中添加要给迭代值到数据
/*$arr=[1];
foreach($arr as &$val):
	echo $val,'<br/>';
	$arr[1]='a';
endforeach;
*/

// 7.默认foreach是按照值进行循环的，foreach会对该数组的值进行拷贝*/


//***数组API***

// 字符串转数组   explode()	
// 数组中的和     array_sum()
// 数组中的乘级   array_product()
// 是否在数组中   in_array()
// 数组入栈       array_push()
// 数组出栈       array_pop()
// 插入数组开头   array_unshift()
// 弹出数组开头   array_shift()
// 交换键名和键值 array_flip()
// 随机取数组一个或多个单元键值 array_rand()
// 打乱数组  shuffle
// 变量名生成数组  compact()
// 获取键名 array_keys()
// 获取键值 array_values()


// $arr=[1,2,3=>[1,2,3]];
// shuffle($arr);
// var_dump(array_values($arr));

// $arr=['name'=>'jack','age'=>'26'];
// $fields=implode(',',array_keys($arr));
// $values='"'.implode('","',array_values($arr)).'"';
// $sql ="insert into user({$fields}) values({$values})";
// echo $sql;

// 指针遍历数组
// key()得到当前指针所在位置的键名,如果不存在返回null
// current()得到当前指针所在位置的键值,如果不存在返回false
// next() 将指针向下移动一位，并返回当前指针所在位置的键值，没有返回false
// prev() 将指针向上移动一位，并返回当前指针所在位置的键值，没有返回false
// reset() 重置指针到数组开始,并返回当前指针所在位置的键值
// end() 移动指针到最后一位元素，并返回当前指针所在位置的键值
$arr=[1,2,3,4];

