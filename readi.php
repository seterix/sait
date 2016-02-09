<?


if(isset($_GET["state"]) and @$_GET["state"]=="steam") { // Проверка
                preg_match("/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/", $_GET["openid_identity"], $key); // Вытаскиваем id юзера
                $key=$key[1];
}
session_start();
$_SESSION['key']=$key;
header('HTTP/1.1 200 OK');
$redirect_url="/profile.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
exit();
?>