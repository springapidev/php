<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
//$q = intval($_GET['q']);
$table=$_GET['q'];
$con = mysqli_connect('localhost','root','1234','wordappz');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"wordappz");
//$sql="SELECT * FROM custom_shortcode WHERE id = '".$q."'";

$sql="SELECT id FROM ".$table;

$result = mysqli_query($con,$sql);
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo "<table style='border:1px solid #000'>";

 foreach($outp as $head){
	  echo "<tr style='border:1px solid #000'>";
	 foreach($head as $col){
    echo "<td style='border:1px solid #000'>" . $col . "</td>";
	 }
    echo "</tr>";
   }


echo "</table>";




mysqli_close($con);
?>
</body>
</html>