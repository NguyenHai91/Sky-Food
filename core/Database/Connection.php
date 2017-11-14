<?php 

namespace Core\Database;
use PDO;

class Connection {

	public static function make($config){
		try {
			// return new PDO('mysql:host=127.0.0.1;dbname=TESTINGDB', 'root', '1');
			// echo "Connect successful";
			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		}
		catch (Exception $ex) {
			die($ex);
		}
	}
}