<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>So sánh chuỗi</title>
</head>

<body>
<?php
@$chuoi1=$_POST[chuoi1];
@$chuoi2=$_POST[chuoi2];
if(isset($chuoi1,$chuoi2))
{
$kq=strcasecmp($chuoi1,$chuoi2);
if($kq==0) $ket_qua="Hai chuỗi giống nhau";
elseif($kq>0) $ket_qua="Chuỗi thứ nhất lớn hơn chuỗi thứ hai";
else $ket_qua="Chuỗi thứ nhất ngắn hơn chuỗi thứ hai";	
}
?>
<b>Bài 3: So sánh chuỗi</b>
<form action="SoSanhChuoi.php" method="post">
<table>
<tr>
	<td colspan="2" align="center" bgcolor="#FF99FF" style="color:#F60">SO SÁNH CHUỖI</td>
</tr>
<TR>
<td bgcolor="#66FFFF">Chuỗi thứ nhất:</td>
<td bgcolor="#66FFFF"><input type="text" name="chuoi1" value="<?php echo @$chuoi1 ?>" /></td>
</TR>
<TR>
<td bgcolor="#66FFFF">Chuỗi thứ hai:</td>
<td bgcolor="#66FFFF"><input type="text" name="chuoi2" value="<?php echo @$chuoi2 ?>" /></td></TR>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td align="center" bgcolor="#66FFFF"><input type="submit" name="so_sanh" value="so sánh" /></td></tr>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td bgcolor="#66FFFF"><input type="text" value="<?php echo @$ket_qua ?>" /></td>
</tr>
</table>
</form>
</body>
</html>