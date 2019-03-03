<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hệ thống khoa</title>
</head>

<body>
<?php
include 'ketnoi.php';//ket noi den CSDl
$sqlquery = "select * from htkhoa"; // 
$result = mysql_query($sqlquery);// thực hiện truy vấn
if(mysql_num_rows($result)<>0) 
{
	echo "<p align ='center'>Danh Sách Khoa</p>"."<br>";
	echo "<table border='1' align='center'>";
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
        echo "<td>";
		echo "$MaK";
        echo "</td>";
        echo "<td>";
		echo "$TenK";
        echo "</td>";		 		       
        echo "</tr>";		
	}
	echo"</table>";
}
echo "<table align='center'><tr>";
	echo "<td colspan='3'>";
    echo "<a href='themk.php'>Thêm</a> | ";
    echo "</td>";
	echo "<td colspan='3'>";
    echo "<a href='sua.php'>Sửa</a> | ";
    echo "</td>";    
	echo "<td colspan='3'>";
    echo "<a href='xoa.php'>Xóa</a>";
    echo "</td>";
	echo "</tr></table>";
?>
</body>
</html>