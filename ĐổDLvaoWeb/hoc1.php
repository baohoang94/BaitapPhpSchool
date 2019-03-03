<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="hoc1.css" />
</head>
<body>
<?php 
	$thong_bao="";
	if(isset($_POST['ten_tai_khoan'],$_POST['pass'],$_POST['email'],$_POST['nhap'],$_POST['as']))
	{
		$ten_tai_khoan=$_POST['ten_tai_khoan'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		

		
		$conn = new mysqli('localhost','root','','database_demo');
        mysqli_set_charset($conn,'utf8');
        if ($conn->connect_error)
	    {
            die("Connection failed: " . $conn->connect_error);
			
        }
		
		$query = $query = "INSERT INTO `dang_nhap`(`ten_tai_khoan`, `pass`, `email`) VALUES ('".$ten_tai_khoan."','".$pass."','".$email."')";
		if($conn->query($query)) $thong_bao = "Them thanh cong";
	}
	else
		$thong_bao = "Da co loi khi nhap";
	
?>
<form action="" method="post">
	<table>
    	<tr>
        	<td>Ten tai khoan: </td>
            <td><input type="text" name="ten_tai_khoan" value="<?php echo $thong_bao;?>"/></td>
        </tr>
        <tr>
        	<td>pass:</td>
            <td><input type="text" name="pass" /></td>
        </tr>
        <tr>
        	<td>Email:</td>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr> <td> <input type="submit" name="nhap" value="nhap" /></td> <td><input type="radio" name="as" /></td></tr>
    </table>
  <div>
    <ul>
    	<li><a href="#">trang chu</a></li>
        <li><a href="#">thong tin</a>
        	<ul>
            	<li><a href="#">tin tuc</a></li>
                <li><a href="#">tin tuc</a></li>
                <li><a href="#">tin tuc</a></li>
            </ul>
           </li>
        <li><a href="#">tin tuc</a></li>
        <li><a href="#">lien he</a></li>
    </ul>
    </div>
</form>
</body>
</html>