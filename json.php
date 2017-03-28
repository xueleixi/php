<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/28
 * Time: 下午4:32
 */


$data = ["name" => "李四", "age" => 23, "addr" => "beijing/chaoyahng"];
echo json_encode($data);
// JSON_UNESCAPED_UNICODE：unicode不进行转义
// JSON_UNESCAPED_SLASHES：'/'不进行转义
echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
echo PHP_EOL;

$jsonStr='{"name":"李四","age":23,"addr":"beijing/chaoyahng"}';
var_dump(json_decode($jsonStr));