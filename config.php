<?php
require_once('sqlin.php');
$conf['debug']['level']=5;

/* 数据库配置 */
$conf['db']['dsn']='mysql:host=localhost;dbname=xy_yule;charset=utf8';
$dbname='xy_yule';
$dbhost='localhost';
$conf['db']['user']='root';
$conf['db']['password']='';
$conf['db']['charset']='utf8';
$conf['db']['prename']='xy_';

$conf['cache']['expire']=0;
$conf['cache']['dir']='_cache/';

$conf['url_modal']=2;

$conf['action']['template']='xy_inc/xy_default/';//视图
$conf['action']['modals']='xy_action/xy_default/';//控制器

$conf['member']['sessionTime']=15*60;	//用户有效时长

error_reporting(E_ERROR & ~E_NOTICE);

ini_set('date.timezone', 'asia/shanghai');

ini_set('display_errors', 'Off');

if(strtotime(date('Y-m-d',time()))>strtotime(date('Y-m-d',time()))){
	$GLOBALS['fromTime']=strtotime(date('Y-m-d',strtotime("-1 day")));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',time()));
}else{
	
	$GLOBALS['fromTime']=strtotime(date('Y-m-d'));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',strtotime("+1 day")));
}