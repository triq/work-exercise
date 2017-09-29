<?php 
	$DATABASE_NAME = 'data/test.db';


	class MyDB extends SQLite3 {
	  function __construct() {
	  	global $DATABASE_NAME;
	     $this->open($DATABASE_NAME);
	  }
	}

   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }


 ?>