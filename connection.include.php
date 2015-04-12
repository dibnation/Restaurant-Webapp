<?php
    function connect(){
     $conn_string = "host=web0.site.uottawa.ca port=15432 dbname =amess045 user=amess045 password=Dibommfg93!";    
     $dbconnect = pg_connect($conn_string) or die('connection failed !');
    }
    
    function close(){
    
        pg_close();     
    }
   
    ?>
