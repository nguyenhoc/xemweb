<?
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once("./func/mysql.php");
function addlog($xid,$time,$ip,$action,$result)
{
  @$a=mysql_query("INSERT INTO xdata_log(xid,date,ip,action,result) VALUES ('{$xid}', '{$time}','{$ip}','{$action}','{$result}')");
}
function updatetlog($xid,$lastlogin,$lastlogin_ip)
{
	$sqlz="UPDATE `xdata_log` SET `lastlogin` = '{$lastlogin}',`lastlogin_ip`= '{$lastlogin_ip}' WHERE `xid` = '{$xid}' LIMIT 1 ;";
	$updatelog=mysql_query($sqlz);
}

?>
