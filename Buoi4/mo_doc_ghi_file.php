<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mở, đọc, ghi file</title>
</head>

<body>
<?php
@$ten_file=$_POST['ten_file'];
@$noi_dung=$_POST['noi_dung'];
?>
<form action="mo_doc_ghi_file.php" method="post">
<table>
<tr><th colspan="2" bgcolor="#990033" style="color:white">TẠO - GHI VÀ ĐỌC FILE</th></tr>
<TR><TD>Tên file:</TD><td><input type="text" name="ten_file" value="<?php echo $ten_file ?>" /></td></TR>
<tr><td valign="top">Nội dung:</td><td><textarea name="noi_dung"><?php echo $noi_dung ?></textarea></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Ghi và đọc file" /></td></tr></table></form>
<?php
if(isset($_POST['ten_file']) && isset($_POST['noi_dung']))
{
//b1: Ghi file
$file=fopen("$ten_file",'w',1);
fwrite($file,$noi_dung);
echo "<b>Đã ghi file thành công</b>";
fclose($file);
//b2: Xuat file vua ghi ra man hinh
$file=fopen("$ten_file",'r');
echo "<table width='500' align='center' bgcolor='#bd95b8' <tr><td>";
echo "<b>Nội dung của file:</b><br>";
while(!feof($file))
{
$noi_dung=fgets($file,1000);
echo nl2br($noi_dung);	
}
echo "<br><b>Đọc file thành công</b></br>";
echo "</td></tr></table>";
fclose($file);
}
else
echo "<p align='center'> Hãy nhập đủ tên file và nội dung!</p>";
?>
</body>
</html>