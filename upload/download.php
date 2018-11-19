<?php
	require_once('auth.php');
?>
<?php
include('config.php');

$rrr=$_GET['id'];
$sss=$_SESSION['SESS_PRO_PIC'];
$filename=$rrr;
$date = date('m/d/Y h:i:s a', time());
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');

readfile($filename);
$update=mysql_query("INSERT INTO log (downloaby, filename, date)
VALUES
('$sss','$filename','$date')");
?>