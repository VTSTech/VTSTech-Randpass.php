<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secure Password Generator by VTSTech</title>
</head>
<body bgcolor=ffffff text=000000>
<b>
<?
date_default_timezone_set('Canada/Pacific');
$today = date("m-d-y");
$currtime = date("His");
print "<br><br><br><font size='8'><center>Secure Password Generator by <a href='http://www.vts-tech.org'>VTSTech</a><br><br>";
$length = 16;
if (empty($_POST['nosym'])) {
	$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()_+-=[]{}:./?"), 0, $length);
}else{
	$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
echo $randomString;
print "</font><br><br><form method='post' name='options' action='randpass.php?action=submit'><input type=button value='New Pass' onClick='window.location.reload()'></form></center>";
#print "DEBUG: " . $_POST['options'];
#print $today . " " . $currtime . " PST -- " . $nosym;
?>
</b>
</body>
</html>