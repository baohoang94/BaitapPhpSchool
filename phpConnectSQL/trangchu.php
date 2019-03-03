<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trangchu</title>
<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
<div id="wapter">
	<div id="top">
    	<a name="trang_chu"><img src="Images/banner_01.jpg" /></a><img src="Images/banner_02.jpg" /><img src="Images/banner_03.jpg" /><img src="Images/banner_04.jpg" /><img src="Images/banner_05.jpg" />
    </div>
	<div id="top1">
    	<ul>
        	<li style="margin-left:-25px;"><a href="#">Trang chu</a>&nbsp;&nbsp;&nbsp;&nbsp;|
           		
                </li>
            <li><a href="#">Gioi thieu </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
            <li><a href="#">Tin tuc </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
            <li><a href="file:///D:/HocKy%20IV/HTML/thi%20php/DV_canhan/DV_canhan.html#dich_vu">Dich vu </a>&nbsp;&nbsp;&nbsp;&nbsp;|
             <ul>
                	<li><a href="#">fsfsfsf1</a></li>
                    <li><a href="#">fsfsfsf1</a></li>
                    <li><a href="#">fsfsfsf1</a></li>
                </ul>
            </li>
            <li><a href="#">khach hang </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
            <li><a href="#">Lien he</a></li>
            	
        </ul>
    </div>
    <div id="trai">
  		<div id="bang" align="center">
        	<img src="Images/Dich_vu.gif" style="margin-top:15px;"/>
            <img src="Images/gop_y.gif" />
            <img src="Images/ngan_hang_lienket.gif" />
            <img src="Images/tygia.gif" />
            <img src="Images/thong_tin.gif" />
            <img src="Images/Dong_a.jpg" />
            <img src="Images/cam_on.jpg" />
        </div>
    </div>
    <div id="center">
    	<div id="chu">
        	<marquee onmousemove="stop()" onmouseout="start()" direction="left" >Công ty thương mại cổ phần…</marquee>
        </div>
        <img src="Images/tich_luy_01.jpg"/><img src="Images/tich_luy_02.jpg"/><img src="Images/tich_luy_03.jpg"/>
        <div id="ct1">
        	<p><b>BANG TIN TRONG NGAY</b></p>
            <form action="" method="post"> 
          	<input name="load" type="submit" />
           </form>
        </div>
        <?php  
		///// ket noi    
		if(isset($_POST['load'])){
		$conn = new mysqli('localhost','root','','database_demo');
        // chống lỗi font khi load dữ liệu ra trang
        mysqli_set_charset($conn,'utf8');// quen khong sua :)) con nhieu nhung minh dùng utf8
        // ukm 
        if ($conn->connect_error)
	    {
            die("Connection failed: " . $conn->connect_error);
        }
      
		$rel = array(); // tạo bien mảng để lưu kết quả từ database
        $result = $conn->query("SELECT * FROM `bang_tin_trong_ngay` WHERE 1"); // không thích thì dùng hướng thư
           $i=0;
        while($info = $result->fetch_assoc())
		     {//tim cai cho hien so dong mà khong thay booi den di
                    $rel[$i++] = $info;
             }
      
		  ?>
          
        <?php foreach($rel as $value ){ ?>
        <div id="ct2">
        	<img src="<?php echo $value['anh']; ?>" />
            <div class="noidung" style="margin-left:10px;">
				<?php echo $value['noi_dung']; ?><br />
				
                <input name="" type="text" value="<?php echo $value['thoi_gian']; ?>" />
            </div>
        </div>
        <?php }} ?>
      
        
    </div>
    <div id="phai">
    	<div id="bang2" align="center" >
        	<img src="Images/phat_hanh_ATM.jpg" style="margin-top:15px;"/>
            <img src="Images/ATM.jpg" />
            <img src="Images/cophieu.jpg" />
            <img src="Images/cophieu.jpg" />
            
        </div>
    </div>
</div>
</body>
</html>
