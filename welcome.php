<html>

<head>
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=gb2312">
    <meta http-equiv="refresh" content="0;url=./welcomed.html">
    <title></title>
</head>
/**
* Created by PhpStorm.
* User: 张天元
* Date: 2017/8/8
* Time: 11:15
*/
<?php
$name=$_POST['name'];
$userSex=$_POST['sex'];
$tel=$_POST['phone'];
$userClass=$_POST['zhuanye'];
$info=$_POST['content'];
/*$ifErr=true;
    $sql="INSERT INTO `qdm113204185_db`.`nicapply` ( `name`, `sex`, `xuehao`, `phone`, `zhuanye`, `content`) VALUES ( '$name', '$userSex', '$id', '$tel', '$userClass', '$info')";
*/
$link = @mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_select_db("wlbx",$link);
//mysql_query("set names utf8",$link);
mysql_query("INSERT INTO `wlbx`.`repair` ( repair_time,bulid_id,room,phone,repair_describe)VALUES( '$name', '$userSex', '$tel', '$userClass', '$info')");



