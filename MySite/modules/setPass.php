<?php
	include_once('../include/function.php');
	
	$username = 'admin';
	$oldpassword = get_data("SELECT sha_pass_hash FROM `".$GLOBALS['db_auth']."`.`account` WHERE `username`='$username'");;
	$oldpassword[$username] = 'admin';
	$newpassword = 'admin1';
	
	$oldpassword[$username] = sha_pass($username,$oldpassword[$username]);
	//print_info($oldpassword);
	
	if($oldpassword['sha_pass_hash'] != $oldpassword[$username]){
		echo "Invalid old pass";
	}elseif(preg_match('/[a-zA-Z0-9_-]/',$newpassword)){
		if(strlen($newpassword) >=4){
			$newpassword = sha_pass($username,$newpassword);
			get_data("UPDATE `".$GLOBALS['db_auth']."`.`account` SET `sha_pass_hash`='$newpassword',`v`=NULL,`s`=NULL WHERE `username`='$username'");
			//get_data("UPDATE `".$GLOBALS['db_auth']."`.`account` SET ` WHERE `username`='$username'");
			echo "Пароль успешно изменен";
		}else{
			echo 'Пароль должен содержать минимум 4 символа';
		}
	}else echo "Пароль должен содержать как имнимум 1 символ из набора \'a-zA-Z0-9_-\' ";
?>