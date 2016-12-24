<?php

	include_once('config.php');
	
	$con = connectDB($db_host,$db_login,$db_pass);
	
	function connectDB($db_host,$db_login,$db_pass){
		$connect = mysqli_connect($db_host,$db_login,$db_pass);
		if(!$connect){
			die($connect->connect_error);
		}else{
			return $connect;
		}
	}
	
	function get_data($sql){
		global $con;
		$res = mysqli_query($con, $sql);
		if($res){
			return @mysqli_fetch_assoc($res);
		}
	}
	
	function fetchinfo($rowname,$tablename,$finder,$findervalue){
		global $con;
		if($finder == "1") $result = mysqli_query($con, "SELECT $rowname FROM $tablename");
		else $result = mysqli_query($con, "SELECT $rowname FROM $tablename WHERE `$finder`='$findervalue'");
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row[$rowname];
		}else{
			return;
		}
	}
	
	function fetchinfoQuery($rowname,$tablename,$finder){
		global $con;
		if($finder == "1") $result = mysqli_query($con, "SELECT $rowname FROM $tablename");
		else $result = mysqli_query($con,"SELECT $rowname FROM $tablename WHERE $finder");
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row[$rowname];
		}else{
			return;
		}
	}
	
	function sha_pass($login, $pass){
		$password = strtoupper($pass);
		$login = strtoupper($login);
		$hash = strtoupper(SHA1($login.':'.$password));
		return $hash;
	}
	
	function print_info($var){
		echo '<pre>';
		print_r($var);
		echo '<pre>';
		return $var;
	}
?>