
<html>
<head>
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=gb2312">
    <meta http-equiv="refresh" content="0;url=./back.php">
    <title></title>
</head>
<?php
/*$ifErr=true;
    $sql="INSERT INTO `qdm113204185_db`.`nicapply` ( `name`, `sex`, `xuehao`, `phone`, `zhuanye`, `content`) VALUES ( '$name', '$userSex', '$id', '$tel', '$userClass', '$info')";
*/
$link = @mysql_connect("localhost","root","root") or die("error".mysql_error());
mysql_select_db("wlbx",$link);
mysql_query("UPDATE repair SET type = '1' WHERE type = ''",$link);
