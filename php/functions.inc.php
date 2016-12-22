<?php
if(session_id() == '') {
    session_start();
}

include_once('settings.inc.php');

$con=db_conncect($data_base,$data_server,$data_user,$data_pass);

function db_conncect($data_base,$data_server,$data_user,$data_pass){
	$link = @mysqli_connect($data_server, $data_user, $data_pass, $data_base);
	if(!$link) {
        $error = mysqli_connect_error();
        echo "<div class=\"alert alert-danger\">{$error}<br>Please contact the administrator!</div>";
		return false;
		exit;
	} else {
		mysqli_query($link,"set names 'utf8'");	
		return $link;
	}
}

function get_data($sql){
	global $con;
	$res=mysqli_query($con,$sql);
	if($res){
		return mysqli_fetch_all($res,MYSQLI_BOTH);
	}
}

function fetchinfo($rowname,$tablename,$finder,$findervalue) {
	global $con;
	if($finder == "1") $result = mysqli_query($con, "SELECT $rowname FROM $tablename");
	else $result = mysqli_query($con, "SELECT $rowname FROM $tablename WHERE `$finder`='$findervalue'");
	if($result) {
		$row = mysqli_fetch_assoc($result);
		return $row[$rowname];
	} else {
		return;
	}
}

function fetchinfoQuery($rowname,$tablename,$finder) {
	global $con;
	if($finder == "1") $result = mysqli_query($con, "SELECT $rowname FROM $tablename");
	else $result = mysqli_query($con, "SELECT $rowname FROM $tablename WHERE $finder");
	if($result) {
		$row = mysqli_fetch_assoc($result);
		return $row[$rowname];
	} else {
		return;
	}
}

function callJail($id, $auth, $method) {
	return file_get_contents('http://109.234.156.253/prison/universal.php?user='.$id.'&key='.$auth.'&method='.$method);
}

?>