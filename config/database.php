<?php
	define('host', 'localhost');
	define('port', '5432');
	define('user', 'theo');
	define('password', 'ambu');
	define('database', 'odontosoft');

	class DataAccess {
		public function conectar() {
			$host = constant('host');
			$port = constant('port');
			$user = constant('user');
			$password = constant('password');
			$database = constant('database');

			$pgsql_url="pgsql:host=$host;port=$port;dbname=$database";
			$conn = new PDO($pgsql_url, $user, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// $conn->exec("set names utf8");
			return $conn;
		}
	}


?>