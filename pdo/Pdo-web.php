<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/29
 * Time: 上午8:51
 */
//长连接  在一个php进程中，在已经打开了一个php链接的情况下，下一次实例化Pdo对象时，使用已建立的链接而不是重新创建链接
class PDOTest extends PDO
{
    protected $user = 'root';
    protected $pass = 'Mysql@2016';
    protected $options = [PDO::ATTR_PERSISTENT => true];
    protected $dsn = 'mysql:host=127.0.0.1;dbname=test';

    public function __construct($useOptions)
    {
        if (!$useOptions) {
            $this->options = [];
        }
        parent::__construct($this->dsn, $this->user, $this->pass, $this->options);
    }

}

//第一组 show full processlist:只有一个数据库链接，
//{
//    $pdo = new PDO($dsn, $user, $pass,$options);
//    $pdo2 = new PDO($dsn, $user, $pass,$options);
//等价于以下方式
echo "hello\n";
$pdo=new PDOTest(true);
$pdo1=new PDOTest(true);
//php进程池中的一个，多次访问会发现规律
echo "pid=".posix_getpid()."\n";
//使用ab测试 ab -n1000 -c10 url
flush();
//ob_start()
//ob_flush()
sleep(60);
echo "over\n";
//}

//1个链接
//new PDOTest(false);
//new PDOTest(true);



////这种方式只会建立两个链接
//for ($i=0;$i<100;$i++){
//    $pdo=new PDOTest(false);
//    $pdo1=new PDOTest(false);
//}
//
////这种方式有多少建立多少链接，直到max_connection
//for ($i=0;$i<100;$i++){
//    $pdo[]=new PDOTest(false);
//}

//数据库设置为150 show variables like '%conn%'
//for ($i=0;$i<300;$i++){
//    try{
//        $pdo[]=new PDOTest(false);
//    }catch (PDOException $exception){
//        error_log($exception->getMessage());
//        sleep(60);
//        die();
//    }
//}
//
//sleep(100);



//$pdo->beginTransaction();
//    $pdo->exec("insert into user VALUES (99,'jlisi','vip')");
//    sleep(10);
//$pdo->commit();
//$stmt=$pdo->query("select * from user");
//var_dump($stmt->fetchAll())


//
//error_reporting(E_ERROR);
//$link=mysql_connect("localhost","root",'');
//if (!$link){
//    die("db connet".mysql_error($link));
//}
//$link2=mysql_connect("localhost","root",'');




