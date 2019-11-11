
<?php
require_once ("lib/ts3admin.class.php");
require_once ("include/config.php");

$time = time();
$filename = 'cache/status.txt';
$ftm = filemtime($filename);
$tm = $time - $ftm;

if ($tm > $ts3_time){
$tsAdmin = new ts3admin($ts3_ip, $ts3_queryport);
if($tsAdmin->getElement('success', $tsAdmin->connect())) {
	$tsAdmin->login($ts3_user, $ts3_pass);
	$tsAdmin->selectServer($ts3_port);	
	$tsAdmin->setName($bot_nickname);
	
	$whoami = $tsAdmin->getElement('data', $tsAdmin->whoAmI());
    $tsAdmin->clientMove($whoami['client_id'],$bot_move);

		$serverInfo = $tsAdmin->getElement('data', $tsAdmin->serverInfo());
        $clientsOnline = ($serverInfo['virtualserver_clientsonline'] - $serverInfo['virtualserver_queryclientsonline']);
		$serverPing = ($serverInfo['virtualserver_total_ping']);
		$serverStatus = ($serverInfo ['virtualserver_status']);
		$serverVersion = ($serverInfo ['virtualserver_version']);
		$serverUptime = ($serverInfo ['virtualserver_uptime']);
		$serverChannels = ($serverInfo ['virtualserver_channelsonline']);
		
			$fstatus = fopen ("cache/status.txt", "w");
			flock($fstatus, LOCK_EX); 
			fwrite($fstatus, $serverStatus); 
			flock($fstatus, LOCK_UN);
			fclose($fstatus);
		
			$fonline = fopen("cache/onl.txt", "w");
			flock($fonline, LOCK_EX); 
			fwrite($fonline, $clientsOnline); 
			flock($fonline, LOCK_UN); 
			fclose($fonline);
			
			$fping = fopen ("cache/ping.txt", "w");
			flock($fping, LOCK_EX); 
			fwrite($fping, $serverPing); 
			flock($fping, LOCK_UN); 
			fclose($fping);
			
			$fpacket = fopen ("cache/packt.txt", "w");
			flock($fpacket, LOCK_EX); 
			fwrite($fpacket, $serverPacket); 
			flock($fpacket, LOCK_UN); 
			fclose($fpacket);
			
			
			$fversion = fopen ("cache/version.txt", "w");
			flock($fversion, LOCK_EX); 
			fwrite($fversion, $serverVersion); 
			flock($fversion, LOCK_UN); 
			fclose($fversion);
			
			$d = floor($serverUptime/(3600*24));
			$serverUptime = $serverUptime % (3600*24);
 
			$h = floor($serverUptime/3600);
			$serverUptime = $serverUptime % 3600;
 
			$m = floor($serverUptime/60);
			$serverUptime = $serverUptime % 60;
			
			$fuptime = fopen ("cache/uptime.txt", "w");
			flock($fuptime, LOCK_EX); 
			fwrite($fuptime, "$d dni"); 
			flock($fuptime, LOCK_UN); 
			fclose($fuptime);
			
			$fchannels = fopen ("cache/channels.txt", "w");
			flock($fchannels, LOCK_EX); 
			fwrite($fchannels, $serverChannels); 
			flock($fchannels, LOCK_UN); 
			fclose($fchannels); 
			
header ("Location: index.php");
die ();									
}

else{
	$fstatus = fopen ("cache/status.txt", "w");
	flock($fstatus, LOCK_EX); 
	fwrite($fstatus, 'Wystąpił problem z połączeniem!'); 
	flock($fstatus, LOCK_UN);
	fclose($fstatus);
	header ("Location: index.php");
}
}
header ("Location: index.php");
?> 