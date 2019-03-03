<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
@$so=$_POST[so];
?>
<form action="bcc.php" method="post">
<table>
<tr>
<td>Bảng củu chương số</td>
<td><input type="text" name="so" value="<?php echo @$so; ?>" /><input type="submit" value="Ok" /></td>
</tr>
<tr>
<td colspan="2" align="center"><?php
if($so>1&&$so<10)
for($i=1; $i<=10; $i=$i+1)
echo $kq=$so."x".$i."=".$so*$i."<br>";
else echo "Vui lòng nhập số từ 2 đến 9";
?></td></tr>
</table>

</form>
</body>
</html>