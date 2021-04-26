<?php

	ob_start();

	class CONNECTION {



	// const HOST = 'localhost';
	const HOST = '127.0.0.1';


	// const USERNAME = 'flashyfl_dbUser';
	const USERNAME = '';

		//const PASS = 'OHD}&VDeJdq-';
		const PASS = '';

		const DATABASE = 'flashyfl_live';


		function __construct() {

			$CONNECT = mysql_connect(self::HOST,self::USERNAME,self::PASS) or die(mysql_error());

			$DB = mysql_select_db(self::DATABASE, $CONNECT) or die(mysql_error());

		}

	}

	$OBJ = new CONNECTION;



	// Mysql PDO

	/*try{

		$conn = new PDO("mysql:host=localhost;dbname=FlashyFlyers","ff_developer","_8OgL[[OEezP");

	}

	catch(PDOException $e){

		echo "Error: ".$e->getMessage();

	}*/

?>
