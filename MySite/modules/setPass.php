<?php
	include_once('../include/function.php');
	
	$username = 'admin';
	$password = get_pass($password);
	$password['new'] = 'admin';
	$newpassword = 'admin1';
	
	$password['new'] = sha_pass($username,$password['new']);
	//print_info($password);
	
	if($password['sha_pass_hash'] != $password['new']){
		echo "Invalid old pass";
	}elseif(preg_match('/[a-zA-Z0-9_-]/',$newpassword)){
		if(strlen($newpassword) >=4){
			$newpassword = sha_pass($username,$newpassword);
			get_data("UPDATE `".$GLOBALS['db_auth']."`.`account` SET `sha_pass_hash`='$newpassword',`v`=NULL,`s`=NULL WHERE `username`='$username'");
			echo "Пароль успешно изменен";
		}else{
			echo 'Пароль должен содержать минимум 4 символа';
		}
	}else echo "Пароль должен содержать как имнимум 1 символ из набора \'a-zA-Z0-9_-\' ";
?>
