<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài tập chuỗi PHP</title>
</head>

<body>
<?php
@$chuoi=$_POST[chuoi];
@$chuois=' '.$chuoi;
@$tu_can_tim=$_POST[tu_can_tim];
if(isset($tu_can_tim,$chuoi))
{
$kq=strpos($chuois,$tu_can_tim);
if(!$kq==0)
$ket_qua="Tìm thấy từ: ".$tu_can_tim." trong chuỗi ở vị trí ".($kq-1);
else
$ket_qua="Không tìm thấy";
}
?>
<b>Bài 1: Tìm từ trong chuỗi</b>
<form action="BaiTapChuoi.php" method="post">
<table>
<tr>
	<td colspan="2" align="center" bgcolor="#FF99FF" style="color:#F60">TÌM TỪ TRONG CHUỖI</td>
</tr>
<TR>
<td bgcolor="#66FFFF">Chuỗi</td>
<td bgcolor="#66FFFF"><input type="text" name="chuoi" value="<?php echo @$chuoi ?>" /></td>
</TR>
<TR>
<td bgcolor="#66FFFF">Từ cần tìm</td>
<td bgcolor="#66FFFF"><input type="text" name="tu_can_tim" value="<?php echo @$tu_can_tim ?>" /></td></TR>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td align="center" bgcolor="#66FFFF"><input type="submit" name="tim_kiem" value="Tìm kiếm" /></td></tr>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td bgcolor="#66FFFF"><input type="text" value="<?php echo @$ket_qua ?>" /></td>
</tr>
</table>
</form>
--------------------------------------<br />
<b>Bài 2: Thay thế từ rong chuỗi</b>
<?php
@$chuoi2=$_POST[chuoi2];
@$tu_goc=$_POST[tu_goc];
@$tu_thay_the=$_POST[tu_thay_the];
if(isset($chuoi2,$tu_goc,$tu_thay_the))
{
$kq2=strpos($chuoi2,$tu_goc);
if($kq2>=0)
$ket_qua2=str_replace($tu_goc,$tu_thay_the,$chuoi2);
}
?>
<form action="BaiTapChuoi.php" method="post">
<table>
<tr>
	<td colspan="2" align="center" bgcolor="#FF99FF" style="color:#F60">THAY THẾ TỪ TRONG CHUỖI</td>
</tr>
<TR>
<td bgcolor="#66FFFF">Chuỗi</td>
<td bgcolor="#66FFFF"><input type="text" name="chuoi2" value="<?php echo @$chuoi2 ?>" /></td>
</TR>
<TR>
<td bgcolor="#66FFFF">Từ gốc</td>
<td bgcolor="#66FFFF"><input type="text" name="tu_goc" value="<?php echo @$tu_goc ?>" /></td></TR>
<TR>
<td bgcolor="#66FFFF">Từ thay thế</td>
<td bgcolor="#66FFFF"><input type="text" name="tu_thay_the" value="<?php echo @$tu_thay_the ?>" /></td></TR>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td align="center" bgcolor="#66FFFF"><input type="submit" name="thay_the" value="Thay thế" /></td></tr>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td bgcolor="#66FFFF"><input type="text" value="<?php echo @$ket_qua2 ?>" /></td>
</tr>
</table>
</form>
-----------------------------
<b>Bài 4: Tách từ trong chuỗi</b>
<?php
if(isset($_POST['ho_ten']))
{
@$ho_ten=trim($_POST[ho_ten]);
@$mang=explode(" ",$ho_ten);
$ho=$mang[0];
$ten=$mang[str_word_count($ho_ten,0)-1];
$ten_dem="";
for($i=1; $i < str_word_count($ho_ten,0)-1; $i++)
{
$ten_dem=$ten_dem.$mang[$i]." ";	
}
}
?>

<form action="BaiTapChuoi.php" method="post">
<table>
<tr>
	<td colspan="2" align="center" bgcolor="#FF99FF" style="color:#F60">TACH HO VA TEN</td>
</tr>
<TR>
<td bgcolor="#66FFFF">Ho va ten:</td>
<td bgcolor="#66FFFF"><input type="text" name="ho_ten" value="<?php echo @$ho_ten ?>" /></td>
</TR>
<TR>
<td bgcolor="#66FFFF">Ho:</td>
<td bgcolor="#66FFFF"><input type="text" name="ho" value="<?php echo @$ho ?>" /></td></TR>
<TR>
<td bgcolor="#66FFFF">Ten dem:</td>
<td bgcolor="#66FFFF"><input type="text" name="ten_dem" value="<?php echo @$ten_dem ?>" /></td></TR>
<tr><td bgcolor="#66FFFF">Ten:</td><td bgcolor="#66FFFF"><input type="text" value="<?php echo @$ten ?>" /></td>
</tr>
<tr><td bgcolor="#66FFFF">&nbsp;</td><td align="center" bgcolor="#66FFFF"><input type="submit" name="tht" value="Tach ho ten" /></td></tr>
</table>
</form>
</body>
</html>