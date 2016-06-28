<?php
require 'xy_lib/core/DBAccess.class';
require 'xy_lib/core/Object.class';
require 'xy_action/xy_default/WebBase.class.php';
require 'xy_action/xy_default/WebLoginBase.class.php';

require 'config.php';

$para=array();

//Steven add by 20160608 获取地址栏的控制器和方法名称
if(isset($_SERVER['PATH_INFO'])){
	$para=explode('/', substr($_SERVER['PATH_INFO'],1));
	if($control=array_shift($para)){//Steven add by 20160608 删除$para中第一个元素并返回该元素
		if(count($para)){
			$action=array_shift($para);
		}else{
			$action=$control;
			$control='index';
		}
	}else{
		$control='index';
		$action='main';
	}
}else{
	$control='index';
	$action='main';
}
$control=ucfirst($control);//Steven add by 20160608 控制器的第一个字母转换成大写

//Steven add by 20160608 如果$action中有分页则取出分页
if(strpos($action,'-')!==false){
	list($action, $page)=explode('-',$action);
}

//Steven add by 20160608 找到相应的控制器文件并加载该控制器文件
$file=$conf['action']['modals'].$control.'.class.php';
if(!is_file($file)) notfound('找不到控制器文件');
try{
	require $file;
}catch(Exception $e){
	print_r($e);
	exit;
}
//Steven add by 20160608 判断控制器类是否存在(如果控制器文件加载成功正常情况下都是存在的)
//创建该控制器类对象并设置调试等级
if(!class_exists($control)) notfound('找不到控制器类');
$jms=new $control($conf['db']['dsn'], $conf['db']['user'], $conf['db']['password']);
$jms->debugLevel=$conf['debug']['level'];

//Steven add by 20160608 检查$action方法名在控制器类中是否存在
//并检查改方法的相关信息
if(!method_exists($jms, $action)) notfound('方法不存在');
$reflection=new ReflectionMethod($jms, $action);
if($reflection->isStatic()) notfound('不允许调用Static修饰的方法');
if(!$reflection->isFinal()) notfound('只能调用final修饰的方法');

$jms->controller=$control;
$jms->action=$action;

$jms->charset=$conf['db']['charset'];
$jms->cacheDir=$conf['cache']['dir'];
$jms->setCacheDir($conf['cache']['dir']);
$jms->actionTemplate=$conf['action']['template'];
$jms->prename=$conf['db']['prename'];
$jms->title=$conf['web']['title'];
if(method_exists($jms, 'getSystemSettings')) $jms->getSystemSettings();

if($jms->settings['switchWeb']=='0'){
	$jms->display('close-service.php');
	exit;
}

//Steven add by 20160608 如果存在分页则设置分页
if(isset($page)) $jms->page=$page;

if($q=$_SERVER['QUERY_STRING']){
	$para=array_merge($para, explode('/', $q));
}
if($para==null) $para=array();

//Steven add by 20160608 调用相关控制器类的方法
$jms->headers=getallheaders();
if(isset($jms->headers['x-call'])){
	// 函数调用
	header('content-Type: application/json');
	try{
		ob_start();
		echo json_encode($reflection->invokeArgs($jms, $_POST));
		ob_flush();
	}catch(Exception $e){
		$jms->error($e->getMessage(), true);
	}
}elseif(isset($jms->headers['x-form-call'])){

	// 表单调用
	$accept=strpos($jms->headers['Accept'], 'application/json')===0;
	if($accept) header('content-Type: application/json');
	try{
		ob_start();
		if($accept){
			echo json_encode($reflection->invokeArgs($jms, $_POST));
		}else{
			json_encode($reflection->invokeArgs($jms, $_POST));
		}
		ob_flush();
	}catch(Exception $e){
		$jms->error($e->getMessage(), true);
	}
}elseif(strpos($jms->headers['Accept'], 'application/json')===0){
	// AJAX调用
	header('content-Type: application/json');
	try{
		echo json_encode(call_user_func_array(array($jms, $action), $para));
	}catch(Exception $e){
		$jms->error($e->getmessage());
	}
}else{
	// 普通请求
	header('content-Type: text/html;charset=utf-8');
	call_user_func_array(array($jms, $action), $para);
}
$jms=null;

function notfound($message){
	header('content-Type: text/plain; charset=utf8');
	header('HTTP/1.1 404 Not Found');
	die($message);
}