<?php 
include("bd.php");
$comment = $_POST['addMessage'];
echo "<div>123123123</div>";
mysql_query("INSERT INTO todocom (Message) VALUES ('$comment')");
 ?>
