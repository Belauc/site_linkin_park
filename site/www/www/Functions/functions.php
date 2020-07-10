<?php 
	require_once "connect.php";
	
	function getNews ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		
		return resultToArray($result);
		
		}
		function resultToArray ($result) {
			$array = array();
			while (($row = $result->fetch_assoc()) != false)
				$array[] = $row;
				return $array;
		}
		
		function getOneNews ($limit, $id) {
		global $mysqli;
		connectDB();
		 $where = "WHERE `id` = ".$id;
		$result = $mysqli->query("SELECT * FROM `news`$where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return $result->fetch_assoc();
		
		}
		
		
		function getPhoto ($dir) {
			$files= scandir($dir);
			unset($files[0], $files[1]);
				return $files;			
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

?>