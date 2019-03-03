<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
@$ten=$_POST['txt_ten'];
if(isset($ten))
{
	$kq="Xin chao ".$ten;
}
?>
<form action="bai1.php" method="post">
<table>
	<tr>
		<td>Ten</td>
		<td><input type="text" name="txt_ten" value="<?php echo @$ten ?>" /></td>
	</tr>
	<tr>
		<td><input type="submit" value="Chao" /></td>
		<td><input type="text" value="<?php echo @$kq ?>" /></td>
	</tr>
</table>
</form>
</body>
</html>