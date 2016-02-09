<?
$dblocation = "localhost"; 
$dbuser = "host1444079";  
$dbpasswd = "september13"; 
$dbname = "host1444079"; 
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) // Если дескриптор равен 0 соединение не установлено
{
  echo("<P>В настоящий момент сервер базы данных не доступен, поэтому 
           корректное отображение страницы невозможно. ахахха</P>");
  exit();
}
mysql_select_db($dbname, $dbcnx) ;
?>