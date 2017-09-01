## SSO的实现方式

1. cookie跨域 在多个二级域名中进行cookie共享
	set_cookie时 domain='.baidu.com'

2. 一级域名不同如何实现跨域：
	第一步：在其中一个网站登录成功后，
	第二部：利用iframe,js,jsonp等进行多个网站“登录”，携带的数据可以为第一步获取的token等唯一凭证数据
	
	使用用户名密码笨方法
	<script src="http://ssp-dev.deepleaper.com/index/login?username=jettz&password=niuhu"></script>

	注意：如果使用这种方式就不要设置cookie跨域了
