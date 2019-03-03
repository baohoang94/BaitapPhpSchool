<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kết quả Upload File</title>
</head>

<body>
<?php
var_dump($_FILES['file_that_uploaded']);
move_uploaded_file($_FILES['file_that_uploaded']['tmp_name'] , $_FILES['file_that_uploaded']['name']);
if($_FILES["file_that_uploaded"]["error"]==0)
echo "<h1>THÔNG TIN VỀ FILE ĐÃ ĐƯỢC UPLOAD</h1>Tên File: ".$_FILES["file_that_uploaded"]["name"]."<br>"."Loại: ".$_FILES["file_that_uploaded"]["type"]."<br>"."Kích thước: ".$_FILES["file_that_uploaded"]["size"]." byte<br>"."Lưu trữ tại: Ổ cứng máy tính này";
else
echo "<center><h1>THÔNG TIN</h1>Đã xảy ra ".$_FILES["file_that_uploaded"]["error"]." lỗi trong quá trình upload file<h1>UPLOAD FILE THẤT BẠI</h1></center>";
?>
</body>
</html>