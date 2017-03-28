<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/28
 * Time: 下午4:17
 */

//location，php默认状态码：302
header("Location: http://www.baidu.com");
header("Location: http://www.baidu.com",true,301);
header("refresh: 1;url=http://www.baidu.com",true,302);

header("refresh: 1",true,302);//每隔1s刷新一次
echo "bd";