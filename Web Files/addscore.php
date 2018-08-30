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

        if (isset($_POST['maxbending'])){
            $hs=$db->real_escape_string($_POST['maxbending']);
		
			$login_sql="SELECT * FROM highscore";
				$login_query=mysqli_query($db, $login_sql);
			if(mysqli_num_rows($login_query)>0) {
					$login_rs=mysqli_fetch_assoc($login_query);
                    $score=$login_rs['bending'];
                    if($hs > $score){
                        $sql = "UPDATE highscore SET bending='$hs'";

                        if ($db->query($sql) === TRUE) {
                            echo "Record updated successfully";
                        } else {
                            echo "Error updating record: " . $db->error;
                        }
                    }
            } 
			else{
                    echo "error connecting wrong credentials";
				}
				
        }

    else {
        
        $hand=$db->real_escape_string($_POST['Handbend']);
		
			$login_sql1="SELECT * FROM highscore";
				$login_query1=mysqli_query($db, $login_sql1);
			if(mysqli_num_rows($login_query1)>0) {
					$login_rs1=mysqli_fetch_assoc($login_query1);
                    $score1=$login_rs1['Handbend'];
                    if($hand > $score1){
                        $sql1 = "UPDATE highscore SET Handbend='$hand'";

                        if ($db->query($sql1) === TRUE) {
                            echo "Record updated successfully";
                        } else {
                            echo "Error updating record: " . $db->error;
                        }
                    }
            } 
			else{
                    echo "error connecting wrong credentials";
				}
        
        
    }

?>