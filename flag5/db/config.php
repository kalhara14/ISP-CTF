<?php
   define('DB_HOST', 'localhost:3308');
   // The DB credentials should not be be stored in source control, but they are include here to provide a complete example.  
   define('DB_USERNAME', 'ctf_user');
   define('DB_PASSWORD', 'ctf_user123');
   define('DB_DATABASE', 'sql_challenge');
   $db = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $db->set_charset("utf8");
?>