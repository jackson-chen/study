<?php

# @Author: xiaoxi
# @Date:   2019-12-19 11:37:59
# @Last Modified by:   Jack
# @Last Modified time: 2019-12-19 17:24:59


//  *** session ***


// 什么是session ? 
// session在计算机中指的就是会员控制
// 具体而言就是用户访问网站，到关闭网站这段时间，也就是说用户浏览网站花费的时间。session是一个时间概念

// 为什么要使用session？
// HTTP协议是一种无状态的协议，HTTP服务器不知道客户端用户是谁，无法记住用户特征


// php中session
// PHP中提供了一个超全局SESSION变量，在所有的PHP脚本使用
// SESSION是存储在服务端的，在用户会员过程中会一致保存该数据
// session 工作原理


// 会员标识符sessionID

// PHP应用程序启动会话的时候，会检测每个请求是否携带sessinID,如果没有PHP将生成一个sessionID,启动一个新的会话,并把sessionID发送给浏览器
// 服务器有sessionID文件，客户端的sessionID存放在cookie中
// 如果会话的请求间隔超过了设置的值，则该会话视为过期

// 与session相关的函数

//  session_start（$option）  启动会话或重用现有的会话
//  参数option可以设置session启动时的选项

// 设置session 案例
/*header('content-type:text/html;charset=utf8');
session_start();
$_SESSION['username']='jack';
*/


// session_id($id) 获取/设置sessionID
// 如果指定了$id参数，则使用$id作为sessionID
// 设置sessionID,session_id()必须在使用session_start之前调用

// session_name($str) 获取/设置session名称
// 如果指定了$str参数，则使用$tr作为session 名称
// 比如在调用session_start之前调用session_name,不然设置名称无效

// 设置sessionID session名称 案例
/*header('content-type:text/html;charset=utf8');
session_name('jack');
session_id(time());
session_start();
$_SESSION['username']='jack';*/


// session_destroy  销毁会话中的数据


//  php配置中的session片段
//  session.auto_start=1  自动开启会话
//  session.name=PHPSESSID session 名称
//  session.save_handler=files  存储和获取会话相关数据的处理器名字
//  session.save_path 传递给存储处理器的参数
//  session.gc_maxlifetime 指定多少秒后数据视为垃圾并清除
//  session.gc_probability/gc_divisor值来确定每个会话始化时启动gc垃圾回收进程


// 删除会话
/*session_start();
$_SESSION=[];
$params=session_get_cookie_params();
setcookie(session_name(),'',time()-1,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

session_destroy();*/


//  ***cookie***

// 什么是COOKIE ?
// COOKIE是服务器发送给用户浏览器并保存在浏览器上的数据，它会在浏览器下次请求服务器时一起发送到服务器端
// COOKIE是HTTP头部的组成部分


// COOKIE有什么用？
// 会话状态管理（用户登录状态，购物车）
// 个性化设置 (用户自定义设置)
// 浏览器行为跟踪（分析用户的行为）


// COOKIE相关函数
// setcookie($name,$value,$time,$path,$domain,$secure,$httpOnly);
// 在使用该函数之前不能有任何的输出
// 一旦设置了cookie,下次就可以使用$_COOKIE获取
// $value 设置为false,"",会删除当前cookie,内部的实现是：将值设置成 'deleted'，并且过期时间是一年前。
// $time设置为0，表示是一个会话cookie
// $secure 为true，表示是在安全连接https时才会发送cookie
// 生成cookie成功返回true,这并不表明cookie在客户端设置成功
// 发送cookie时，cookie的值会被urlencode编码，收到cookie会自动解码，并赋值到cookie名称上
// 设置 Cookie



setcookie('test',false,time()+3600,'/');
