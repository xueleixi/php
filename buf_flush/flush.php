<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * desc: 以web/cli方式来测试flush功能
 *      web访问:flush没用，程序执行完毕后才一次性输出; php解释器的输出结果要传递给web server
 *      cli:  立即输出
 *
 * 建议查看该博客：
 *  http://www.360doc.com/content/11/0707/10/3539574_132077601.shtml
 *
 * Date: 2017/3/29
 * Time: 上午10:39
 */


echo time().PHP_EOL;
flush();
sleep(10);
echo time().PHP_EOL;
