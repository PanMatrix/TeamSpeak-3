<?php

$ft = fopen("cache/onl.txt", "r");
$online = fread($ft, 4);
fclose($ft);

$fg = fopen("cache/ping.txt", "r");
$ping = fread($fg, 4);
fclose($fg);

$fs = fopen("cache/packt.txt", "r");
$packet = fread($fs, 3);
fclose($fs);

$fh = fopen("cache/status.txt", "r");
$status = fread($fh, 40);
fclose($fh);

$fs = fopen("cache/version.txt", "r");
$version = fread($fs, 8);
fclose($fs);

$fd = fopen("cache/uptime.txt", "r");
$uptime = fread($fd, 50);
fclose($fd);

$fl = fopen("cache/channels.txt", "r");
$channels = fread($fl, 5);
fclose($fl);


if ($online == 1){
	$tonline = "";}
else if ($online >= 2 && $online < 5) {
	$tonline = "";}
else {
	$tonline = "";}
?>