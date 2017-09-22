<?php


    ?>
    <div class="wrap">
        <?php
    $servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "wordappz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "show tables;";
$data = $conn->query($sql);


       
        ?>
        <form  method="POST">
            <select name="selelctBox" id="selelctBox" onchange="this.form.submit()">
                <option value="0">Select Table</option>
                <?php
                foreach ($data as $result) {
                    foreach ($result as $tab) {
                       
                      print '<option  id="' . $tab . '" value="' . $tab . '">' . $tab . '</option>';
                    }
                }
                ?>
            </select>
        </form>
        <br/>
        <?php
        if (isset($_POST['selelctBox'])) {
            //  print_r($_POST);
            $table = $_POST['selelctBox'];
            print "<br/>" . $table;
            $sql = 'describe '. $table;
            $results = $conn->query($sql);
            // var_dump($results);
            echo '<form action="success.php" name="table_array" method="post">';
            echo '<table class="table table-responsive">';
            echo '<thead class="table-hover">';
            echo '<tr>';
            echo '<td>Label</td>';
            echo '<td>Type</td>';
            echo '<td>Values</td>';
            echo '<td>Place Holder</td>';
            echo '<td>Default Value</td>';
            echo '<td>Colmuns</td>';
            echo '<tr>';
            echo '</thead>';
            echo '<tbody class="table-hover">';


            foreach ($results as $result) {
 //var_dump($result);
                echo '<tr>';
              //  $form_field = ucwords(str_replace('_', ' ', $result->Field));
                echo '<td>';
                echo '<input name="label[]" type="text" value="ok" />';
                echo '</td>';

                echo '<td>';
                echo '<input name="type[]" type="text"  />';
                echo '</td>';

                echo '<td>';
                echo '<input name="valuess[]" type="text"  />';
                echo '</td>';

                echo '<td>';
                echo '<input name="place_holder[]" type="text"  />';
                echo '</td>';

                echo '<td>';
                echo '<input name="def_valuess[]" type="text"  />';
                echo '</td>';

                echo '<td>';
                echo '<input name="colmuns[]" type="text"  />';
                echo '</td>';
				echo '<td>';
                echo '<input  name="names[]" type="text"  />';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '<tr>';
            echo '<td>';
            echo '<input type="submit" value="Save as Form"/>';
            echo '</td>';
            echo '</tr>';
            echo '</table>';
            echo '</form>';
        }
      
      /*
	  
 CREATE TABLE table_form (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
label VARCHAR(30),
type VARCHAR(30),
values VARCHAR(30) ,
place_holder VARCHAR(30),
colmuns VARCHAR(30),
names VARCHAR(30) 
)  
	  
	  
	  
	  */
	  
	 
	  
        ?>
    </div>
	

	
	
	
  