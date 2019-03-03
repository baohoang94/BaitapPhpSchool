<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm khoa</title>
</head>

<body>
<form action="themk.php" method="post">
<table>
<tr><td>Mã khoa:</td><td><input type="text" name="MaK" /></td></tr>
<tr><td>Tên khoa:</td><td><input type="text" name="TenK" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="Them" value="Thêm" /></td></tr>
</table>
</form>
<?php
/*include 'ketnoi.php';
if(isset($_POST['MaK'],$_POST['TenK']))
{
$MaK=$_POST['MaK'];
$TenK=$_POST['TenK'];
$query= "INSERT INTO 'htkhoa'('MaKhoa','TenKhoa') VALUES ('".$MaK."','".$TenK."')";
$result=mysql_query($query);
}*/

// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'danhsach');
mysql_query("SET NAMES 'utf8'"); 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Câu SQL Insert
//$sql = "INSERT INTO htkhoa (MaKhoa, TenKhoa) 
  //      VALUES ('KH01', 'Khoa than kinh')";
if(isset($_POST['MaK'],$_POST['TenK']))
{
$MaK=$_POST['MaK'];
$TenK=$_POST['TenK'];
$sql = "INSERT INTO htkhoa(MaKhoa,TenKhoa) VALUES ('".$MaK."','".$TenK."')";
// Thực hiện thêm record
if($MaK=="") echo "Thêm bản ghi thất bại<br>Vui lòng nhập đủ dữ liệu";
elseif ($conn->query($sql) === TRUE) {
    echo "Thêm bản ghi thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
}
?>
<a href="htkhoa.php"><h3>Về trang chủ</h3></a>
</body>
</html>