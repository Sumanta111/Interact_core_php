<!--<?php
$sendfrom_id=$_REQUEST['sendfrom'];
$sendto_id=$_REQUEST['sendto'];
$link=mysqli_connect("localhost","root","","Professor_db");
$qry14="select messages from chat where send_from_id='$sendto_id' AND send_to_id='$sendfrom_id' ORDER BY message_id desc LIMIT 5";
$resultset14=mysqli_query($link,$qry14);
while($row=mysqli_fetch_row($resultset14)){
	echo "<div class='message me-message'>".$row[0]."</div>";
}
?>-->
<?php
echo foo;
?>