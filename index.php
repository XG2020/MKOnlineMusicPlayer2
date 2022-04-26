<?php

if (isset ($_SERVER['HTTP_USER_AGENT'])) {
  $clientkeywords = array ('nokia',  'sony','ericsson','mot','samsung','htc','sgh','lg','sharp','oppo','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'); 

 // 从HTTP_USER_AGENT中查找手机浏览器的关键字
 if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))){
require_once 'm.php';
}else{
require_once 'pc.php';
}
}else{
echo "未知";
}