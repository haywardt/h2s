<?php
timeLapsed();
session_start();

function PDOConnect(){ 								// PDO Connect returns the PDO object
	$host = 'localhost';
	$db   = 'test';
	$user = 'root';
	$pass = '';
	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];
	$pdo = new PDO($dsn, $user, $pass, $opt);
	return $pdo;
};

function PDOGet($view,$columns,$start,$limit){		// get a view for display
	require("timeLapsed.php");
	$db = PDOConnect();								// open the connection. 
	$db = PDOConnect();
	var_dump($db);
};

function PDOPut($view,$column,$index,$value){		// put a value, into a table
		
};

function timeLapsed(){								// return the amount of time since the last call 
  static $stime;
  $rtime = microtime(true) - $stime ;
  $stime = microtime(true);
  return $rtime;
}

?>
