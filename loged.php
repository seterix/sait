<?
if(isset($_SESSION['key']))
{
	$key=$_SESSION['key'];
	$result = mysql_query("SELECT* FROM users WHERE id=$key", $dbcnx);
	if (mysql_num_rows($result)==0)
		$indb = mysql_query("INSERT INTO users(id,balance) VALUES ('$key','5000')");
}
?>