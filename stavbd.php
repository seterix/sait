<?
session_start();
include("./bd.php");
include("./loged.php");
$result = mysql_query("SELECT balance FROM users WHERE id=$key", $dbcnx);
$myusers = mysql_fetch_array($result);
if((isset($_POST['match_id']) && isset($_POST['team_num']) && isset($_POST['r'])))
{
	$match_id = $_POST['match_id'];
	$team_num = $_POST['team_num'];
	$stavka = $_POST['r'];
	$newBal = (int)$myusers["balance"]-(int)$stavka;
	mysql_query("UPDATE users SET balance='$newBal', match_id='$match_id', team='$team_num', stavka='$stavka' WHERE id=$key");
}

header('HTTP/1.1 200 OK');
$redirect_url="/profile.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
exit();
?>