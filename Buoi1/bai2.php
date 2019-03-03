<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
@$so_a=$_POST['txt_a'];
@$so_b=$_POST['txt_b'];
if(isset($_POST['btn_tong']))
{
	$tong=$so_a+$so_b;
}
if(isset($_POST['btn_hieu']))
{
	$hieu=$so_a-$so_b;
}
if(isset($_POST['btn_tich']))
{
	$tich=$so_a*$so_b;
}
if(isset($_POST['btn_thuong']))
{
	$thuong=$so_a/$so_b;
}
?>
<form action="bai2.php" method="post">
<table>
	<tr>
		<td>So a</td>
		<td><input type="text" name="txt_a" value="<?php echo @$so_a ?>" /></td>
	</tr>
    <tr>
		<td>So b</td>
		<td><input type="text" name="txt_b" value="<?php echo @$so_b ?>" /></td>
	</tr>
	<tr>
		<td><input type="submit" value="Tong" name="btn_tong" /></td>
		<td><input type="text" value="<?php echo @$tong ?>" /></td>
	</tr>
    <tr>
		<td><input type="submit" value="Hieu" name="btn_hieu" /></td>
		<td><input type="text" value="<?php echo @$hieu ?>" /></td>
	</tr>
     <tr>
		<td><input type="submit" value="Tich" name="btn_tich" /></td>
		<td><input type="text" value="<?php echo @$tich ?>" /></td>
	</tr>
    <tr>
		<td><input type="submit" value="Thuong" name="btn_thuong" /></td>
		<td><input type="text" value="<?php echo @$thuong ?>" /></td>
	</tr>
</table>
</form>
</body>
</html>