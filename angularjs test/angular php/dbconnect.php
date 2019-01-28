<?php

$dbconnect = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'iridescent.polaroid'
);

$db= new mysqli(
$dbconnect['server'],
$dbconnect['user'],
$dbconnect['pass'],
$dbconnect['name']
);

if($db -> connect_errno >0){
    echo "<br><br><h2>Database cant be reached right now! :( </h2><br> Error details:" .$db ->connect_error;
    exit;
}

$output = array();

	$sql="SELECT * FROM walls ";
	$query=mysqli_query($db, $sql);
	if(mysqli_num_rows($query)>0) {
		while($row = mysqli_fetch_array($query)){
			$output[] = $row;
		};
		echo json_encode($output);
	}

?>
