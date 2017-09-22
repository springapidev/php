<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "wordappz";
echo "<pre>";
 print_r($_POST['label']);
 
 $array_data = $_POST['label'];
 
 $array_lenth = sizeof($_POST['label']);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$i=0;
foreach($array_data as $value) 
{
	$data = array(
		'label'=>$_POST['label'][$i], 
       'type'=>$_POST['type'][$i], 
       'def_valuess'=>$_POST['def_valuess'][$i], 
       'valuess'=>$_POST['valuess'][$i], 
       'place_holder'=>$_POST['place_holder'][$i], 
       'colmuns'=>$_POST['colmuns'][$i], 
       'names'=>$_POST['names'][$i],
);
//$sql = "INSERT INTO table_form (label, type, def_valuess, valuess, place_holder,colmuns,names)
//VALUES  ('{$data['label']}','{$data['type']}','{$data['def_valuess']}', '{$data['valuess']}', '{$data['place_holder']}', '{$data['colmuns']}', '{$data['names']}')";
addData($data,$conn);
$i+=1;
}
function addData($data,$conn){
	$sql = "INSERT INTO table_form (label, type, def_valuess,valuess, place_holder, colmuns,names)
VALUES ('{$data['label']}','{$data['type']}','{$data['def_valuess']}', '{$data['valuess']}', '{$data['place_holder']}', '{$data['colmuns']}', '{$data['names']}')";
$conn->query($sql);
}


/*

/*

	$sql = "INSERT INTO table_form (label, type, def_valuess,valuess, place_holder, colmuns,names)
VALUES ('John', 'Doe', 'john@example.com','John', 'Doe', 'john@example.com','test');";
*/
/*
for($i=0;$i<count($_POST['label']);$i++){
   $order = array(
       'label'=>$_POST['label'][$i], 
       'type'=>$_POST['type'][$i], 
       'def_valuess'=>$_POST['def_valuess'][$i], 
       'valuess'=>$_POST['valuess'][$i], 
       'place_holder'=>$_POST['place_holder'][$i], 
       'colmuns'=>$_POST['colmuns'][$i], 
       'names'=>$_POST['names'][$i], 
   );
   $sql = "INSERT INTO table_form (label, type, def_valuess, valuess, place_holder,colmuns,names) VALUES  ('{$order['label']}','{$order['type']}','{$order['def_valuess']}', '{$order['valuess']}', '{$order['place_holder']}', '{$order['colmuns']}', '{$order['names']}')";
}



if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/

	  
?>