<?php
session_start();

class Sql {

	public $conn;

	public function __construct(){

		// return $this->conn = mysqli_connect("localhost", "rickv509", "d1E7ijD2n1", "rickv509_radioGuaraWeb");
		// return $this->conn = mysqli_connect("127.0.0.1", "root", "", "radioGuaraWeb");
		header('Content-Type: text/html; charset=utf-8');
		mysql_connect("localhost", "rickv509_wrdp3", 'FetrMjnYdv9g');
		// mysql_connect("localhost", "root", "");
		// // mysql_connect("localhost", "root", "");
		// mysql_select_db("radioGuaraWebBD");
		// mysql_query("SET NAMES 'utf8'");
		// mysql_query('SET character_set_connection=utf8');
		// mysql_query('SET character_set_client=utf8');
		// mysql_query('SET character_set_results=utf8');
		// return mysql_query;
		return $this->conn = mysql_select_db("rickv509_radioGuaraWeb");
		// return $this->conn = mysql_select_db("radioGuaraWebBD");
		// return $this->conn = mysqli_connect("localhost", "root", "", "radioGuaraWebBD");

	}

	public function query($string_query){
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');
		// return mysql_query;
		return mysql_query($string_query);
		// return mysql_query(utf8_encode($string_query));
		// return mysqli_query($this->conn, utf8_encode($string_query));

	}

	public function select($string_query){

		$result = $this->query($string_query);

		$data = array();

	    while ($row = mysql_fetch_array($result)) {
	    // while ($row = mysqli_fetch_array($result)) {

	    	foreach ($row as $key => $value) {
	    		$row[$key] = $value;
	    		// $row[$key] = utf8_encode($value);
	    	}

	        array_push($data, $row);

	    }

	    unset($result);

	    return $data;

	}

	public function __destruct(){

		// mysql_close($this->conn);
		// mysqli_close($this->conn);

	}

}

?>
