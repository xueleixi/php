## php异常处理

try{}catche只能捕获手动捕获的Exception,然而一些运行时的错误并不会主动抛出异常，如 
```
try{
    echo 10/0;
}catch (\Exception $e){
    echo $e->getMessage();
}
```
并不能捕获

### 解决方法
通过set_error_handler来处理，抛出异常

```
set_error_handler(function ($errorType,$message,$file,$line,$context) {
//    var_dump(func_get_args());
    throw new \Exception($message,$errorType);
});


try{
    echo 10/0;
}catch (\Exception $e){
    echo $e->getMessage();
}
```
