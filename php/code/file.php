<?php
//  *************文件目录相关函数**********
/*
echo "文件的创建时间：".date('Y-m-d H:i:s',filectime('./array.php'))."<br/>";
echo "文件的修改时间：".date('Y-m-d H:i:s',filemtime('./array.php'))."<br/>";
echo "文件的访问时间：".date('Y-m-d H:i:s',fileatime('./array.php'))."<br/>";

echo "<hr/>";

$filename='./array.php';
var_dump(is_readable($filename));
var_dump(is_writeable($filename));
var_dump(is_executable($filename));
var_dump(is_file($filename));

echo "<hr/>";

echo filesize($filename),'<br/>';
echo filetype($filename),'<br/>';

echo "<hr/>";

$pathinfo =pathinfo($filename);
$basename = pathinfo($filename,PATHINFO_BASENAME);
echo $basename;

var_dump(pathinfo(__FILE__));
var_dump(pathinfo(__FILE__,PATHINFO_DIRNAME));

echo "<hr/>";

echo basename(__FILE__),"<br/>";
echo dirname(__FILE__),"<br/>";

echo "<hr/>";

var_dump(file_exists(basename(__FILE__)));
var_dump(file_exists(dirname(__FILE__)));
var_dump(file_exists('a.php'));

echo "<hr/>";

$result= touch('a.txt',time()+60,time()+3600);

var_dump($result);

echo "<hr/>删除文件";
var_dump(unlink('a.txt'));
echo "<hr/>重命名文件";
var_dump(rename('1.txt','3/1.txt'));

// 拷贝文件
var_dump(copy('1.txt','3/2.txt'));
// 拷贝远程文件到本地
var_dump(copy('https://www.baidu.com/img/bd_logo1.png','baidu.png'));

*/

/*$filename='./1.txt';
$handle= fopen($filename,'r');
echo "文件指针:".ftell($handle)."<br/>";
$content = fread($handle,filesize($filename));

echo "文件内容:".$content."<br/>";

echo "文件指针:".ftell($handle)."<br/>";
echo "文件大小:".filesize($filename)."<br/>";
echo "指针在文件末尾读取内容:".fread($handle,2)."<br/>";
var_dump(fseek($handle,10));

echo "文件内容:".fread($handle,filesize($filename))."<br/>";

var_dump(fclose($handle));*/

// 打开图片

/*$filename= __DIR__.'/2.txt';
$handle = fopen($filename,'wb+');

$content='ni';
fwrite($handle,$content);
fwrite($handle,$content);
fwrite($handle,$content);
fwrite($handle,$content);
fwrite($handle,$content);
fwrite($handle,$content);
fwrite($handle,$content);
fwrite($handle,$content);
fseek($handle,0);
echo fread($handle,filesize($filename));
fclose($handle);*/


// 你好，我是百度人
$filename =__DIR__.'/2.txt';
$handle = fopen($filename,'rb+');
// $str = fgetc($handle);
// $str2= fgetss($handle,2);
// echo $str;
// echo $str2;
// echo $content = fread($handle,filesize($filename));
// var_dump(ftell($handle));
// var_dump(feof($handle));
// fclose($handle);

// $arr=[
// 	['name'=>'jack','age'=>25],
// 	['name'=>'wang','age'=>26],
// ];

// $handle= fopen('2.txt','ab+');

$arr=[
	['name'=>'jack','age'=>25],
	['name'=>'wang','age'=>26],
];
$filename= '2.txt';


$result=file_put_contents($filename,json_encode($arr));


var_dump($result);



