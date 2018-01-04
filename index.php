<?php
// Simple usage

if(isset($_REQUEST['url']) && !empty($_REQUEST['url')){
$url = $_REQUEST['url'];
$link = "https://getfbid.com/api/?url=".$url;
$connect = file_get_contents($link);
$dc = json_decode($connect);
$uid = $dc->id;
$uname = $dc->name;
echo $uid."-".$uname;
}
?>
