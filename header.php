
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu680"><!-- group -->
     <div class="shadow museBGSize clearfix grpelem" id="u680"><!-- column -->
      <a class="nonblock nontext MuseLinkActive colelem" id="u681-4" href="./index.php"><!-- rasterized frame --><img id="u681-4_img" alt="Dota 2" width="184" height="61" src="images/u681-4.png"/></a>
      <?
	  $redirect_url = "/profile.php";
	  $steam=array(
		'key'=>'0B096A39F5637CDE7231396F4B50A1E7',
		'redirect'=>'http://dotainvest.ru/readi.php'
		);
	  $link = "https://steamcommunity.com/openid/login?openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.mode=checkid_setup&openid.return_to=".urldecode($steam["redirect"])."%3Fstate=steam&openid.realm=".urldecode($steam["redirect"])."&openid.ns.sreg=http%3A%2F%2Fopenid.net%2Fextensions%2Fsreg%2F1.1&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select";
	  
	  if(!isset($key))
		  $log = "вход";
	  else
		  $log = "выйти";
	  echo "<a class='nonblock nontext Button rounded-corners clearfix colelem' id='buttonu708' href=".$link."><!-- container box --><div class='clip_frame grpelem' id='u930'><!-- image --><img class='block' id='u930_img' src='images/steamlg.png' alt='' width='76' height='20'/></div><div class='clearfix grpelem' id='u709-4'><!-- content --><p>$log</p></div></a>";
     
$userInfo = json_decode(file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=0B096A39F5637CDE7231396F4B50A1E7&steamids=".$key)); // Получаем информацию о пользователе
	// Переводим полученные данные в класс
	$userInfo=$userInfo->response->players[0]
	 ?>
	 
	 </div>
     <div class="clearfix grpelem" id="u682-5"><!-- content -->
      <p id="u682-3"><span id="u682">тотализатор</span><span class="superscript">beta</span></p>
     </div>
	 <!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<script type="text/javascript">
  VK.init({apiId: 5244003, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Like block will be -->
<div style="margin-left:440px;" id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
    </div>
	
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35032600 = new Ya.Metrika({
                    id:35032600,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/35032600" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
    <div class="clearfix colelem" id="pu774"><!-- group -->
     <a class="nonblock nontext shadow clearfix grpelem" id="u774" href="./profile.php"><!-- group --><div class="clearfix grpelem" id="u747-4"><!-- content --><p>мой аккаунт</p></div></a>
     <a class="nonblock nontext shadow clearfix grpelem" id="u782" href="./switch_match.php"><!-- group --><div class="clearfix grpelem" id="u749-4"><!-- content --><p>сделать ставку</p></div></a>
     <a class="nonblock nontext shadow clearfix grpelem" id="u784" href="./profile.php"><!-- group --><div class="clearfix grpelem" id="u750-4"><!-- content --><p>топ</p></div></a>
     <a class="nonblock nontext shadow clearfix grpelem" id="u785" href="./profile.php"><!-- group --><div class="clearfix grpelem" id="u751-4"><!-- content --><p>контакты</p></div></a>
     <a class="nonblock nontext shadow clearfix grpelem" id="u786" href="./profile.php"><!-- group --><div class="clearfix grpelem" id="u752-4"><!-- content --><p>моя команда</p></div></a>
     <a class="nonblock nontext shadow clearfix grpelem" id="u787" href="./comments.php"><!-- group --><div class="clearfix grpelem" id="u753-4"><!-- content --><p>отзывы</p></div></a>
    </div>