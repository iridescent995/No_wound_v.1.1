<?php

$dbconnect = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'no wound'
);

$db= new mysqli(
$dbconnect['server'],
$dbconnect['user'],
$dbconnect['pass'],
$dbconnect['name']
);


if($db -> connect_errno >0){
    echo "<br><br><h2>No Wound cant be reached right now! :( </h2><br> Error details:" .$db ->connect_error;
    exit;
}


            $username=$db->real_escape_string($_POST['usernamePost']);
			$password=$db->real_escape_string($_POST['passwordPost']);
		
			$login_sql="SELECT * FROM user WHERE user_id='".$username."' AND password='".$password."'";
				$login_query=mysqli_query($db, $login_sql);
			if(mysqli_num_rows($login_query)>0) {
					$login_rs=mysqli_fetch_assoc($login_query);
                    echo "Success";
            } 
			else{
                    echo "error connecting wrong credentials";
				}
				
	



?>