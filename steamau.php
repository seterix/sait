<?

/* ///Данные приложения\\\ */
$link="<a href='https://steamcommunity.com/openid/login?openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.mode=checkid_setup&openid.return_to=".urldecode($steam["redirect"])."%3Fstate=steam&openid.realm=".urldecode($steam["redirect"])."&openid.ns.sreg=http%3A%2F%2Fopenid.net%2Fextensions%2Fsreg%2F1.1&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select'>Аутентификация через Steam</a>"; // Создание ссылки для аутентификации
echo $link;
if(isset($_GET["state"]) and @$_GET["state"]=="steam") { // Проверка
                preg_match("/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/", $_GET["openid_identity"], $key); // Вытаскиваем id юзера
                $key=$key[1];
				echo $key;
	$userInfo = json_decode(file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steam["key"]."&steamids=".$key)); // Получаем информацию о пользователе
	// Переводим полученные данные в класс
	$userInfo=$userInfo->response->players[0];
	echo "</br>";
	echo $userInfo->personaname;
	echo "<img src='$userInfo->avatarmedium'/>";
}
?>