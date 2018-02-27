<?php
header("content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');

$sid=$_POST['sid'];
$state=$_POST['state'];

$xml="<xml><sid>".$sid."</sid><state>".$state."</state></xml>";
$f=fopen('data.xml','w');
fwrite($f,$xml);
fclose($f);


?>