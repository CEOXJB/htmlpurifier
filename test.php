<?php
		//����htmlPurifierȥ��XSS��վ�������� ���ɰ�ȫ��html����
		
		require_once('./htmlpurifier/library/HTMLPurifier.includes.php');
	
		$config = HTMLPurifier_Config::createDefault();   //����Ĭ������
		$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
		$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your

		$purifier = new HTMLPurifier($config);   //ʵ���� ������Ĭ������ ($configΪ��Ҳ��)
	
		$safedata = $purifier->purify($_POST['content']); //��ʼ���� ���ع��˺���ַ���
		//print_r($_POST['content']);
		echo '<pre>';
		print_r($safedata);
?>