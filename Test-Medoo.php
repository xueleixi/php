<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/29
 * Time: 上午8:28
 */


require 'autoload.php';
use Medoo\Medoo;

$options = [
    'database_type' => 'mysql',
    'database_name' => 'test',
    'server' => 'localhost',
    'port' => 3306,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
$medoo=new Medoo(
    $options
);
new Medoo($options);

var_dump($medoo->info());

//PDO::T

//mysqli_thread_id()