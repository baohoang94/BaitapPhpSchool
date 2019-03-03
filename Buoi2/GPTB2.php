<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc hai</title>
</head>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
?>

<body>
<form id="form1" name="form1" method="post" action="GPTB2.php">
  <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
    <tr>
      <td colspan="2" bgcolor="#6699FF">Giải phương trình bậc 2</td>
    </tr>
    <tr>
      <td>Nhập a</td>
      <td><label for="a"></label>
      <input name="a" type="text" id="a" value="<?php echo $a;?>" /></td>
    </tr>
    <tr>
      <td>Nhập b</td>
      <td><input name="b" type="text" id="b" value="<?php echo $b;?>" /></td>
    </tr>
    <tr>
      <td>Nhập c</td>
      <td><input name="c" type="text" id="c" value="<?php echo $c;?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Tính" /></td>
    </tr>
  </table>
</form>
<p>
  <?php
if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"]))
{
 $a=$_POST['a'];
 $b=$_POST["b"];
 $c=$_POST["c"];
  if($a==0)
            {
                if($b==0)
                {
                    if($c==0)
                        $kq="Phương Trình Có Vô Số Nghiệm";
                    else
                        $kq="Phương Trình Vô Nghiệm";
      
                }
                else
                {
                    $kq="Phương Trình Có 1 Nghiệm";
                    $x1="x1= ".(-$c)/$b;
                }
            }
            else
            {
                $delta=$b*$b-4*$a*$c;
                if($delta>0)
                {
                    $x1="x1= ".(-$b+sqrt($delta))/(2*$a);
                    $x2="x2= ".(-$b-sqrt($delta))/(2*$a);
                    $kq="Phương Trình Có 2 Nghiệm Phân Biệt";
                }
                else
                    if($delta==0)
                    {
                        $kq="Phương Trình Có 1 Nghiệm Duy Nhất";
                        $x1="x1= ".(-$b)/(2*$a);
                    }
                    else
                        $kq="Phương Trình Vô Nghiệm";
            }
?>
</p>
<p>&nbsp;</p>
<table width="250" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
  <tr>
    <td align="center" bgcolor="#6699FF"><label> <?php echo $kq;?></label></td>
  </tr>
  <tr>
    <td><label><?php echo $x1;?></label>&nbsp;</td>
  </tr>
  <tr>
    <td><label><?php echo $x2;?></label>&nbsp;</td>
  </tr>
</table>
<?php
}
?>
</body>
</html>