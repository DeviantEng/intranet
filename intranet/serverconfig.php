<?php 
  $observiumcon=mysqli_connect("observium.deveng.local","dhorn","MicroSOFT1@3","observium");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $rebootedquery = "SELECT
            hostname,
            type,
            os,
            TIME_FORMAT(SEC_TO_TIME(uptime),'%Hh %im') AS Uptime,
            last_polled AS 'Last SNMP Poll'
          FROM
            devices
          WHERE
            uptime < 86400";
  
	$config = array(

		# Services
		# Set these to false to disable them
		"sickbeard" => true,
		"couchpotato" => true,
		"headphones" => true,
		"sabnzbd" => true,
		"uTorrent" => true,
		"transmission" => false,

		# URLs and Ports
		"sickbeardURL" => "usenet.deveng.local",
		"sickbeardPort" => "9091",
		"sickbeardAPI" => "3354347275a2c9963581f114267a52d0",
		"sickbeardHTTPS" => false,
		"sabnzbdURL" => "usenet.deveng.local",
		"sabnzbdPort" => "9090",
		"sabnzbdAPI" => "06fa0aa74d869990f89d5b71e24d8b7a",
		"sabnzbdHTTPS" => false,
		"couchpotatoURL" => "usenet.deveng.local",
		"couchpotatoPort" => "9092",
		"couchpotatoHTTPS" => false,
		"headphonesURL" => "usenet.deveng.local",
		"headphonesPort" => "9093",
		"headphonesHTTPS" => false,
		"uTorrentURL" => "torrent01.deveng.local",
		"uTorrentPort" => "8888",
		"transmissionURL" => "192.168.1.1",
		"transmissionPort" => "9091",

		# Usernames and Passwords
		# If not using usernames or passwords, leave these to false.
		# ie. "sickbeardUsername" => false,
		"sickbeardUsername" => "tycoonbob",
		"sickbeardPassword" => "MicroSOFT1@3",
		"sabnzbdUsername" => "tycoonbob",
		"sabnzbdPassword" => "MicroSOFT1@3",
		"uTorrentUsername" => "false",
		"uTorrentPassword" => "false",
		"transmissionUsername" => false,
		"transmissionPassword" => false,

		# Sickbeard - Missed or Coming?
		# Australia, for example, is almost an entire day ahead of America so American TV shows 
		# air the day after they say they're going to air, so instead of "coming shows", we use "missed shows"
		# to indicate what's coming out today. 
		# Set to true for "missed", false for "coming"
		"sickMissed" => false,

		# Show popups when hovering over coming shows?
		"sickPopups" => true,

		# Debug
		"debug" => false,

		# Show trailers button
		"showTrailers" => false,

		# Wifi
		# WifiName is also used for page title
		"showWifi" => true,
		"wifiName" => "HornNet",
		"wifiPassword" => "5029947990",

		# Bookmarks
		"bookmarks" => array(
			0 => array(
				"label" => "Miatrix",
				"url" => "https://www.miatrix.com",
				"icon" => "intranet/images/miatrix.ico",
			),
			1 => array(
				"label" => "NZBNDX",
				"url" => "https://www.nzbndx.com/",
				"icon" => "intranet/images/nzbndx.ico",
			),
      2 => array(
				"label" => "NZBPlanet",
				"url" => "https://www.nzbplanet.net/",
				"icon" => "intranet/images/nzbplanet.ico",
			),			
			3 => array(
				"label" => "Season Start Dates",
				"url" => "intranet/comingseasons.php",
				"icon" => "intranet/images/tv.png",
			),
		),

	);
?>
