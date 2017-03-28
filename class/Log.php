<?php

/**
 * Created by PhpStorm.
 *
 * 类的设计=>以日志类为例子
 *
 * User: xueleixi
 * Date: 2017/3/28
 * Time: 下午4:41
 */
class Log
{
    const DEBUG = 1;
    const INFO = 2;
    const WARN = 3;
    const ERROR = 4;
    const LEVEL_DESC = ["TRACE", "DEBUG", "INFO", "WARN", "ERROR"];
    const DATE_FORMAT = "Y-m-d H:i:s";


    private static $logFile;
    private static $logFileConfName = "logPath";
    private static $initFlag = false;

    public static function init()
    {
        if (!self::$initFlag) {
            $confPath = Conf::getConf(self::$logFileConfName);
            if ($confPath) {
                $dir = dirname($confPath);
                if (!file_exists($dir)) {
                    if (!mkdir($dir, 0777, true)) {
                        throw new \Exception("mkdir {$dir} error");
                    }
                }
                self::$initFlag = true;
                self::$logFile = $confPath;
            } else {
                throw new Exception("no log conf found!");
            }
        }
    }

    /**
     *  格式化日志内容，添加日志时间-级别-内容信息
     * @param $level string eg.INFO WARN ERROR
     * @param $content 日志内容
     */
    public static function writeLog($level, $content)
    {
        self::init();
        $logContent = sprintf("%s\t[%s]\t%s\n", date(self::DATE_FORMAT), $level, $content);
        error_log($logContent, 3, self::$logFile);
    }

    /**
     *  LEVEL_DESC中任意个级别打印日志 INFO,WARN,ERROR
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        echo "name:{$name}\n";
        var_dump($arguments);
        $level = strtoupper($name);
        if ((array_search($level, self::LEVEL_DESC)) !== false) {
            self::writeLog($level, $arguments[0]);
        }
    }


//    public static function info($content)
//    {
//        self::init();
//        $logContent = sprintf("%s\t[%s]\t%s\n", date(self::DATE_FORMAT), self::getLogLevel(self::INFO), $content);
//        error_log($logContent,3,self::$logFile);
//    }
//
//    public static function error($content)
//    {
//        self::init();
//        $logContent = sprintf("%s\t[%s]\t%s\n", date(self::DATE_FORMAT), self::getLogLevel(self::ERROR), $content);
//        error_log($logContent,3,self::$logFile);
//    }
    /**
     * @param $level int [0,1,2,3,4,5]根据 LEVEL_DESC数组获取日志级别的文字描述
     * @return mixed 返回文字描述
     */
//    private static function getLogLevel($level)
//    {
//        return self::LEVEL_DESC[$level];
//    }


}

class Conf
{
    private static $conf = ["logPath" => "/tmp/log/php.log"];

    public static function getConf($item)
    {
        return isset(self::$conf[$item]) ? self::$conf[$item] : null;
    }
}


//Log::info("用户名错误");
Log::warn("wrong password!");
//var_dump(Log::af);

//var_dump(Conf::getConf("logPath"));
//echo dirname("/tmp/app/a/php.ini");

