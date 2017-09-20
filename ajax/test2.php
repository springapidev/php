<DOCTYPE html>
<html>
  <head>
    <title>My Test Form</title>
  </head>

  <body>
  
  <form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="custom_shortcode">custom_shortcode</option>
  <option value="wp_liveshoutbox">wp_liveshoutbox</option>

  </select>
</form>


   <script>
   function showUser(str){
	  var p1=str; 
	  // alert(str);
	 //  document.write(p1);
	 return p1;
   }
var p = showUser(str);
alert(p);
</script>

<?php
$b=$POST['users'];
$a="<script>document.writeln(p);</script>";
echo $b;
?>
  </body>
</html>