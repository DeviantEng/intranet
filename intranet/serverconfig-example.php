<?php 

  
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
		"sickbeardURL" => "127.0.0.1",
		"sickbeardPort" => "8081",
		"sickbeardAPI" => "",
		"sickbeardHTTPS" => false,
		"sabnzbdURL" => "127.0.0.1",
		"sabnzbdPort" => "8080",
		"sabnzbdAPI" => "",
		"sabnzbdHTTPS" => false,
		"couchpotatoURL" => "127.0.0.1",
		"couchpotatoPort" => "5000",
		"couchpotatoHTTPS" => false,
		"headphonesURL" => "127.0.0.1",
		"headphonesPort" => "8181",
		"headphonesHTTPS" => false,
		"uTorrentURL" => "127.0.0.1",
		"uTorrentPort" => "8080",
		"transmissionURL" => "127.0.0.1",
		"transmissionPort" => "9091",
		"observiumURL" => "127.0.0.1",
		"observiumDBuser" => "root",
		"observiumDBpass" => "foo",
		"observiumDBname" => "observium",

		# Usernames and Passwords
		# If not using usernames or passwords, leave these to false.
		# ie. "sickbeardUsername" => false,
		"sickbeardUsername" => false,
		"sickbeardPassword" => false,
		"sabnzbdUsername" => false,
		"sabnzbdPassword" => false,
		"uTorrentUsername" => false,
		"uTorrentPassword" => false,
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
		"wifiName" => "Internets",
		"wifiPassword" => "Myp@55word",

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
	
  $observiumcon=mysqli_connect($config['observiumURL'],$config['observiumDBuser'],$config['observiumDBpass'],$config['observiumDBname']);
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

?>