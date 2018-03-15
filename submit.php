<?php 
	include 'SqlHelper.php';
	$sqlHelper = new SqlHelper();
	if(isset($_POST['title'])){
		$sqlHelper->execute_dml("insert into message value(NULL,'{$_POST['title']}', '{$_POST['content']}', '{$_POST['name']}', '{$_POST['tel']}','".time()."')");
	}
	header('Location: index.php#postForm');