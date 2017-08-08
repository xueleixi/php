## codecept bdd测试框架使用

### 安装
局部安装方式
- composer  require --dev "codeception/codeception=2.0.*"
- composer  require --dev "codeception/specify=*"
- composer  require --dev "codeception/verify=*"

### quick start

- codecept bootstrap
- codecept generate:cest acceptance First

```
	acceptance.suite.yml
		actor: AcceptanceTester
		modules:
		    enabled:
		        - PhpBrowser:
		            url: {YOUR APP'S URL}
		        - \Helper\Acceptance
```

	<?php
	class FirstCest 
	{
	    public function frontpageWorks(AcceptanceTester $I)
	    {
	        $I->amOnPage('/');
	        $I->see('Home');  
	    }
	}		        
- codecpt run

- codecept generate:test unit Example
- codecept run unit ExampleTest
- codecept run unit
