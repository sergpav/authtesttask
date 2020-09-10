<?php

class Connection {

	protected static $instance = null;

	public static function getInstance() {
		if(static::$instance) {
			return static::$instance;
		} else {
			static::$instance = mysqli_connect('localhost', 'root', '', 'auth_test');
			if(!static::$instance) {
				throw new Exception("Can't connect to DB");
			}
			return static::$instance;
		}
	}
}
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $db = 'auth_test';

// $conn = new mysqli($servername, $username, $password, $db);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// return $conn;