<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hệ thống khoa</title>
</head>

<body>
<form action="sua.php" method="post">
<table>
<tr><td>Mã khoa:</td><td><input type="text" name="MaK" /></td></tr>
<tr><td>Tên khoa:</td><td><input type="text" name="TenK" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="edit" value="Sửa" /></td></tr>
</table>
</form>
<?php
// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'danhsach');
mysql_query("SET NAMES 'utf8'"); 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
if(isset($_POST['MaK']) || isset($_POST['TenK']))
{
$MaK=$_POST['MaK'];
$TenK=$_POST['TenK'];
$sql = "update htkhoa set TenKhoa='".$TenK."' where MaKhoa='".$MaK."'";
// Thực hiện sửa record
if($MaK=="") echo "Sửa bản ghi thất bại<br>Vui lòng nhập đủ dữ liệu";
else if ($conn->query($sql) === TRUE) {
    echo "Sửa bản ghi thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
}
/*include 'ketnoi.php';//ket noi den CSDl
$sqlquery = "select * from htkhoa"; // 
$result = mysql_query($sqlquery);// thực hiện truy vấn
if(mysql_num_rows($result)<>0) 
{
	echo "<p align ='center'>Danh Sách Khoa</p>"."<br>";
	echo "<form action='sua.php' method='post'><table border='1' align='center'>";
    echo "<tr>";
    echo "<th>";
    echo "Mã Khoa";
    echo "</th>";
    echo "<th>";
    echo "Tên Khoa";
    echo "</th>";		  
    echo "</tr>";
	//duyet & in tat ca các mau tin co trong bang 
	while($row = mysql_fetch_row($result))
	{
		$MaK = $row[0];
		$TenK = $row[1];               
        echo "<tr>";
        echo "<td><input type='text' value=";
		echo "'$MaK'";
        echo "</td>";
        echo "<td><input type='text' value=";
		echo "'$TenK'";
        echo "</td>";		 		       
        echo "</tr>";
		echo "<tr>";		
	}
	echo "<td colspan='2' align='center'><input type='submit' name='edit' value='Sửa' /></td></tr>";
	echo"</table><form>";
}*/
?>
<a href="htkhoa.php"><h3>Về trang chủ</h3></a>
</body>
</html>