<?php
		//引入htmlPurifier去除XSS跨站攻击代码 生成安全的html代码
		
		require_once('./htmlpurifier/library/HTMLPurifier.includes.php');
	
		$config = HTMLPurifier_Config::createDefault();   //创建默认配置
		$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
		$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your

		$purifier = new HTMLPurifier($config);   //实例化 并传入默认配置 ($config为空也可)
	
		$safedata = $purifier->purify($_POST['content']); //开始过滤 返回过滤后的字符串
		//print_r($_POST['content']);
		echo '<pre>';
		print_r($safedata);
?>