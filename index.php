<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/28
 * Time: 下午5:52
 */

require 'autoload.php';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
    var_dump($pdo);
} catch (Exception $exception) {
    Log::error($exception->getMessage());
}

//crud  id | user_id | message_text   | published

$stmt=$pdo->query("insert into message (user_id,message_text,published) values(2,'pdo','".date('Y-m-d H:i:s')."')");
//执行出错会返回false
var_dump($stmt);
if ($stmt!==false){
//    var_dump($stmt->execute());
}else{
//    var_dump($pdo->errorInfo());
}