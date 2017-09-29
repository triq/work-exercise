<?php
   require_once 'data/config.php';

   $sql =<<<EOF
      DELETE from COMPANY where ID = 2;
EOF;
   
   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record deleted successfully\n";
   }

   $sql =<<<EOF
      SELECT * from COMPANY;
EOF;
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "ID = ". $row['ID'] . "\n";
      echo "NAME = ". $row['NAME'] ."\n";
      echo "ADDRESS = ". $row['ADDRESS'] ."\n";
      echo "SALARY = ".$row['SALARY'] ."\n\n";
   }
   echo "Operation done successfully\n";
   $db->close();
?>