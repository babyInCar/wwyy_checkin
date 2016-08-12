<?php

// print_r($_POST['shouzc']);
 $check_arr = {}
 if($_POST){
 	if($_POST['shouzc']){$check_arr['shouzc'] = $_POST['shouzc'] or 0;}
 	if($_POST['yinj'])  {$check_arr['yinj'] = $_POST['yinj'] or 0;}
 	if($_POST['song'])  {$check_arr['song'] = $_POST['song'] or 0;}	
 	if($_POST['hex'])   {$check_arr['hex'] = $_POST['hex'] or 0;}  
 	if($_POST['etfo'])	{$check_arr['etfo'] = $_POST['etfo'] or 0;}
 	if($_POST['remark']){$check_arr['remark'] = $_POST['remark'] or 0;}
 }
// $mysql = mysql_query();

#把数据写入到数据库里面
$link = mysql_connect("SAE_MYSQL_HOST_M",'SAE_MYSQL_USER','SAE_MYSQL_PASS');
mysql_select_db("app_zxtx",$link) or die("连接数据库错误:".mysql_error());
$current_day = str_time();
$sql = "insert into wanwan_attend(weixin_id,attend_date,shouzc,yinj,song,hex,etfo,remark) values()";
$result = mysql_query($sql);
if($result && mysql_affected_rows() >0){
	$info = "insert success";
}else{
	$info = "insert fail";
}
mysql_close();
return $info;
 ?> 
