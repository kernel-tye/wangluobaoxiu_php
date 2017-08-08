<?php
/**
 * Created by PhpStorm.
 * User: 张天元
 * Date: 2017/8/8
 * Time: 10:35
 */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=nicrecord","root","root",array(PDO::ATTR_PERSISTENT=>true));

    $pdo->query("set names 'utf8'");
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}


?>