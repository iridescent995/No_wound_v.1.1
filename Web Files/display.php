<?php
    // Send variables for the MySQL database class.
    $database = mysql_connect('mysql_host', 'mysql_user', 'mysql_password') or die('Could not connect: ' . mysql_error());
    mysql_select_db('my_database') or die('Could not select database');
 
    $query = "SELECT * FROM `scores` ORDER by `score` DESC LIMIT 5";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
    $num_results = mysql_num_rows($result);  
 
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysql_fetch_array($result);
         echo $row['name'] . "\t" . $row['score'] . "\n";
    }
?>