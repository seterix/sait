<?
session_start();
$key=$_SESSION['key'];
include("./bd.php");
include("./loged.php");
//echo $key;
if (isset($key))
{
$result = mysql_query("SELECT balance, match_id, team, stavka FROM users WHERE id=$key", $dbcnx);
$myusers = mysql_fetch_array($result);
$matchs_data = mysql_query("SELECT status, win FROM matchs WHERE id='1231'", $dbcnx);
$match = mysql_fetch_array($matchs_data);
$userFriends = json_decode(file_get_contents("http://api.steampowered.com/ISteamUser/GetFriendList/v0001/?key=0B096A39F5637CDE7231396F4B50A1E7&steamid=".$key)); // Получаем информацию о пользователе

		
		
		
}




	
?>

<!DOCTYPE html>
<html class="html" lang="ru-RU">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "_______.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>Профиль</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/master_______-a.css?416449013"/>
  <link rel="stylesheet" type="text/css" href="css/_______.css?163955415" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts________.css?314922684"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/ubuntu:n7,n4,n3:all.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body>
<?
include("./header.php");
?>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=410012515081575&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=seller&targets=%D0%BF%D0%BE%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5+%D0%B1%D0%B0%D0%BB%D0%B0%D0%BD%D1%81%D0%B0&targets-hint=&default-sum=100&button-text=03&successURL=http%3A%2F%2Fwww.dotainvest.ru%2F" width="450" height="200"></iframe>
    <div class="clearfix colelem" id="pu714"><!-- group -->
     <div class="clearfix grpelem" id="u714"><!-- group -->
      <div class="clearfix grpelem" id="u834-4"><!-- content -->
	  <? if (isset($key))
	 {
		 echo
       '<p><span id="u834">Привет,</span></p>
      </div>
      <div class="clearfix grpelem" id="u928-4"><!-- content -->
       <p><span id="u928">'.$userInfo->personaname.'</span></p>
      </div>
      <div class="clearfix grpelem" id="u898-4"><!-- content -->
       <p>баланс:</p>
      </div>
      <div class="clearfix grpelem" id="u904-4"><!-- content -->
       <p>'.$myusers["balance"].' рубля</p>
      </div>
      <div class="clearfix grpelem" id="u715"><!-- group -->
       <div class="clearfix grpelem" id="u853-4"><!-- content -->
        <p>Новости</p>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u854-4"><!-- content -->
      <p>Работает!</p>
     </div>
	 
     <div class="PamphletWidget clearfix grpelem" id="pamphletu859"><!-- none box -->
      <div class="ThumbGroup clearfix grpelem" id="u862"><!-- none box -->
       <div class="popup_anchor">
        <div class="Thumb popup_element clearfix" id="u865"><!-- group -->
         <div class="clearfix grpelem" id="u866-4"><!-- content -->
          <p>средства</p>
         </div>
        </div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element clearfix" id="u863"><!-- group -->
         <div class="clearfix grpelem" id="u864-4"><!-- content -->
          <p>ставки</p>
         </div>
        </div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element clearfix" id="u867"><!-- group -->
         <div class="clearfix grpelem" id="u868-4"><!-- content -->
          <p>друзья</p>
         </div>
        </div>
       </div>
       <div class="popup_anchor">
        <div class="Thumb popup_element clearfix" id="u921"><!-- group -->
         <div class="clearfix grpelem" id="u927-4"><!-- content -->
          <p>my team</p>
         </div>
        </div>
       </div>
      </div>
      <div class="popup_anchor" id="u869popup">
       <div class="ContainerGroup clearfix" id="u869"><!-- stack box -->
        <div class="Container clearfix grpelem" id="u870"><!-- group -->
		</div>
        <div class="Container invi clearfix grpelem" id="u874"><!-- column -->
         <div class="clearfix colelem" id="u917-4"><!-- content -->
          <p>Твои ставки:</p>
         </div>
		<div class="clearfix colelem" id="pu910-4"><!-- group -->
          <div class="clearfix grpelem" id="u910-4"><!-- content -->
           <p>идентификатор матча:</p>
          </div>
          <div class="clearfix grpelem" id="u913-4"><!-- content -->
           <p>'.$myusers["match_id"].'</p>
          </div>
         </div>
         <div class="clearfix colelem" id="pu911-4"><!-- group -->
          <div class="clearfix grpelem" id="u911-4"><!-- content -->
           <p>идентификатор команды:</p>
          </div>
          <div class="clearfix grpelem" id="u914-4"><!-- content -->
           <p>'.$myusers["team"].'</p>
          </div>
         </div>
         <div class="clearfix colelem" id="pu912-4"><!-- group -->
          <div class="clearfix grpelem" id="u912-4"><!-- content -->
           <p>размер ставки:</p>
          </div>
          <div class="clearfix grpelem" id="u915-4"><!-- content -->
           <p>'.$myusers["stavka"].'</p>
          </div>
         </div>
		 
		 <div class="clearfix colelem" id="pu912-4"><!-- group -->
          <div class="clearfix grpelem" id="u912-4"><!-- content -->
           <p>статус игры:</p>
          </div>
          <div class="clearfix grpelem" id="u915-4"><!-- content -->
           <p>'.$match["status"].'</p>
          </div>
         </div>
        </div>
		 <div class="Container invi clearfix grpelem" id="u878"><!-- group -->
         </div>
        </div>
        <div class="Container invi grpelem" id="u923"><!-- simple frame --></div>
       </div>`
      </div>
     </div>
    </div>
    <div class="verticalspacer"></div>
   </div>
  </div>';
	 }
	 else
		 echo "sign in";
  ?>
  

  
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?275725342" type="text/javascript"></script>
  <script src="scripts/webpro.js?3883484123" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?360574455" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?342093292" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4218319045" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3999102769" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('#pamphletu859', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'',autoPlay:false,displayInterval:3000,transitionStyle:'horizontal',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu859 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
