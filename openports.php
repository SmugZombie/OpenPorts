<?
$host = $_GET['query'];
$port = $_GET['port'];
if($host == ""){$host = "dnsdiagnosis.com"; $port = 80;}
$domain3 = mb_strimwidth($host, 0, 25, "...");
$domainlength = strlen($host);

function server_online($server, $portno)
{
	fsockopen($server, $portno, $errno, $errstr, 0.1);
	return($errno === 0);
}

if(server_online($host, $port) != "1" || $hostip == "unknown")
	{
		//echo "<img src='http://img.digdns.com/reddot.png' class='statusimg'/> $domain2:$port ";
		echo "<span class='offline box darktext paddinglr25 pointer2' title='Port $port is closed.'>✘</span> $domain3:$port ";
	}
else
	{
		//echo "<img src='http://img.digdns.com/greendot.png' class='statusimg'/> $domain2:$port ";
		echo "<span class='online box darktext paddinglr1 pointer2' title='Port $port is open and accepting connections.'>✔</span> $domain3:$port ";
	}
echo "</br>";
?>
