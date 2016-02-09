<?
session_start();
include("./bd.php");
include("./loged.php");
?>
<!DOCTYPE html>
<html class="html" lang="ru-RU">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>Главная</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/master_______-a.css?416449013"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?123556507" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?3764355769"/>
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
    <div class="clearfix colelem" id="pu714"><!-- group -->
     <div class="clearfix grpelem" id="u714"><!-- group -->
      <div class="grpelem" id="u936"><form method='post' action="/switch_team.php">
	  <p><b>выберите матч:</b></p>
	  <?
		require_once 'scripts/simple_html_dom.php'; 
		$html = file_get_html('http://dota2lounge.com');
		
		$count = -1;
		$mass = array();
		
		$teams = $html->find('div.team');
		foreach ($teams as $team) 
		{ 
				$link = $team->style; 
				if(preg_match('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $link, $matches)) {
					$image_url = $matches[0];
					$mass[] = $image_url;
				}	
				
		}
		
		/*парсим id матчей*/
		$divs = $html->find('div.matchmain]');
		 foreach($html->find('div.matchmain a') as $element)
		 {
			  $str = preg_replace("/[^0-9]/", '', $element->href); 
			 //$list_team = file_get_html('http://dota2lounge.com/'.$element->href);
			 echo "<p><input type='radio' name='match_id' value='$str'>";
			 		$count++;					
					echo "<img src='$mass[$count]'/>vs";
					$count++;
					echo "<img src='$mass[$count]'/>";
					echo "</p></input>";
		 }	
		 /*парсим id матчей*/
		
		$html->clear();
		unset($html);
		
		$_SESSION["test"] = "Сессия - тест";
	  ?>
		  <p><input type="submit"></p>
	 </form></div>
      <div class="clearfix grpelem" id="u715"><!-- group -->
       <div class="clearfix grpelem" id="u853-4"><!-- content -->
        <p>Новости</p>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u854-4"><!-- content -->
      <p>Работает!</p>
     </div>
    </div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?275725342" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?185257658" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3999102769" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
