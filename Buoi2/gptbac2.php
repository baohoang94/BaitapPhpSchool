<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
@$soa=$_POST[txt_a];
@$sob=$_POST[txt_b];
@$soc=$_POST[txt_c];
if(isset($soa,$sob,$soc))
{
	if($soa==0)
			{echo "Bạn đã nhập số a=0, đây là phương trinh bậc nhất<br>GIẢI PT BẬC 1<BR />Phương trình bậc 1 : ".$sob."x+".$soc."=0<br>";
			if($sob<>0) $kq="x=".(-$soc/$sob);
			if($sob==0 && $soc==0) $kq="PT có vô số nghiệm";
			else if($sob==0 && $soc<>0) $kq="PT vô nghiệm";}
if($soa<>0)
{$delta=$sob*$sob-4*$soa*$soc; echo "GIẢI PT BẬC 2<BR />Phương trình bậc 2: ". $soa."x<sup>2</sup>+".$sob."x+".$soc."=0<br>";
if($delta<0) $kq="Phương trình vô nghiệm";
if($delta==0) $kq=(-$sob/2*$soa);
if($delta>0) {$x1=((-$sob+sqrt($delta))/2*$soa); $x2=((-$sob-sqrt($delta))/2*$soa); $kq="x1=".$x1.", x2=".$x2;
}}}
?>

<form action="gptbac2.php" method="post">
<table>
<tr>
<td>Nhập số a</td>
<td><input type="text" name="txt_a" value="<?php echo $soa; ?>" /></td>
</tr>
<tr>
<td>Nhập số b</td>
<td><input type="text" name="txt_b" value="<?php echo $sob; ?>" /></td>
</tr>
<tr>
<td>Nhập số c</td>
<td><input type="text" name="txt_c" value="<?php echo $soc; ?>" /></td><br />

</tr>
<tr><td><input type="submit" value="Nghiệm" /></td>
<td><input type="text" value="<?php echo @$kq; ?>"/></td></tr>
</table></form>
</body>
</html>