<?php
header("content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');

$sid=$_GET['sid'];
$user=$_GET['user'];
$psw=$_GET['password'];
$xmlStr=file_get_contents("http://www.xxx.cn/qrcodetest/data.xml");
$xml=simplexml_load_string($xmlStr);

if($user=='siyuan'&&$psw='123'&&$xml->sid==$sid)//假设密码验证已经通过
{	
$newXML="<xml><sid>".$sid."</sid><state>true</state></xml>";
$f=fopen('data.xml','w');
fwrite($f,$newXML);
fclose($f);
echo "success";	
	
}
else
	
	{
		echo "{res:false}";	
	}

/*$xml="<xml><sid>".$sid."</sid><state>".$state."</state></xml>";
$f=fopen('data.xml','w');
fwrite($f,$xml);
fclose($f);*/



?>