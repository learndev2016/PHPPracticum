<?php
	Class Item {
		private $m_inv_data = array();
		private $m_ii_data = array();
		private $m_it_data = array();
		private $m_socket_data = array();
		private $m_socket_bdesc = '';
		private $m_ench_desc = array();
		private $mysql_path = array();
		private $mysql_login = array();
		private $mysql_password = array();
		private $mysql_db = array();
		private $mysql_db_characters = array();
		private $mysql_db_world = array();
		private $ConnectDB = array();
		
		public function ConnectToDB($r_num){
			$this->ConnectDB['cms'] = mysqli_connect($GLOBALS['mysql_path']['cms'], $GLOBALS['mysql_login']['cms'], $GLOBALS['mysql_password']['cms']);
			mysqli_query("SET NAMES 'utf8'", $this->ConnectDB['cms']);
			//$link = $this->ConnectDB['cms'];
			//if($link->connect_error) die($link->connect_error);

			$this->mysql_db_characters['server'] = $GLOBALS['mysql_db_characters'][$r_num];
			$this->mysql_db_world['server'] = $GLOBALS['mysql_db_world'][$r_num];
			$this->ConnectDB['server'] = mysqli_connect($GLOBALS['mysql_path'][$r_num], $GLOBALS['mysql_login']['cms'], $GLOBALS['mysql_password']['cms']);
			mysqli_query("SET NAMES 'utf8'", $this->ConnectDB['server']);
			//$link = $this->ConnectDB['server'];
			//if($link->connect_error) die($link->connect_error);
			
		}
		
		public function CloseConnectToDB($r_num){
			mysqli_close($this->ConnectDB['cms']);
			mysqli_close($this->ConnectDB['server']);
		}
	}
?>