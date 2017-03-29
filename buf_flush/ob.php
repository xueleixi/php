<?php
/**
 * Created by PhpStorm.
 * User: xueleixi
 * Date: 2017/3/29
 * Time: 上午10:28
 */

/**
 *  开启ob缓存后，忘记关闭程序结束前会自动输出
 */
function ob_test_ob_start(){
    $dateFormat='Y-m-d H:i:s';
    echo date($dateFormat).PHP_EOL;
    ob_start();
    echo date($dateFormat).PHP_EOL;
    sleep(1);
}

/**
 * Get current buffer contents and delete current output buffer
 * ob缓存被清空
 */
function ob_test_ob_get_clean(){
    $dateFormat='Y-m-d H:i:s';
    echo date($dateFormat).PHP_EOL;
    ob_start();
    echo date($dateFormat).PHP_EOL;
    sleep(1);
    $obContents=ob_get_clean();
    echo "ob:{$obContents}\n";
}

/**
 * Flush the output buffer, return it as a string and turn off output buffering
 * 不会清空ob缓存中的内容，也就是说其内容还会继续输出
 */
function ob_test_ob_get_flush()
{
    $dateFormat = 'Y-m-d H:i:s';
    echo date($dateFormat) . PHP_EOL;
    ob_start();
    echo date($dateFormat) . PHP_EOL;
    sleep(1);
    $obContents = ob_get_flush();
    echo "ob:" . $obContents;
}

ob_test_ob_get_flush();
