<?php require_once("includes/config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
  <div class="header">
		<header>
			<div class="title">
				<span class="text_left">HỆ THỐNG ĐĂNG KÍ HỌC - ĐẠI HỌC THỦY LỢI </span>
			</div>
			
			<nav class="nav-right">
				<ul>
					<li><a href="index.php">Trang chủ |</a></li>
					<li><a href="login.php">Thoát |</a></li>
					<li><a href="question.php">Hỏi đáp |</a></li>
					<li><a href="help.php" target="_blank">Trợ giúp</a></li>
					<select>
						<option value="">VN</option>
					</select>
				</ul>
			</nav>
            
            
            
			<div class="box-user">
				<div class="info-user">
            
          <p>
		  <?php
				if(isset($_SESSION['TENTAIKHOAN']))
				{
					$TENTAIKHOAN = $_SESSION['TENTAIKHOAN'];

					$sql = "SELECT * from taikhoan where TENTAIKHOAN = '$TENTAIKHOAN'";
					$query = mysqli_query($conn,$sql);
					$data = mysqli_fetch_array($query);
					$id = $data['ID'];

					if($data['QUYEN'] == 4)
					{

					$sql = "SELECT * from sinhvien where MASINHVIEN = '$id'";
					$query = mysqli_query($conn,$sql);
					$data = mysqli_fetch_array($query);
					echo "TENTAIKHOAN";
					}
					else
            {
              echo " Khách ";
            }}
				?>
		  
		  </p>
				</div>
			</div>
		</header>
	</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<div class="home-page">
    	<div class="left-home">
    		<div class="box-left-1">
    			<div class="menu1-navbar">
    				<ul class="sidebar-menu">
    					<li class="header-home"><a href="">DANH MỤC CHÍNH</a></li>
    					<li><a href="search.php">Tra cứu lịch giảng dạy</a></li>
						<li><a href="diem/diem.php">Tra cứu điểm sinh viên</a></li>
    					<!--<li><a href="">Chương trình đào tạo</a></li>
    					<li><a href="">Giảng đường trực tuyến</a></li>-->
    				</ul>
    			</div>
    		</div>

    		<div class="box-left-2">
    			<div class="box-left-2-top"><span>Liên kết hữu ích</span></div>
    			<div class="box-left-2-content"><center></center></div>
    			<div class="box-left-2-bottom"><center></center></div>
    		</div>

    		<div class="box-left-3">
    			<div class="box-left-3-top"><span>Thăm dò ý kiến</span></div>
    			<div class="box-left-3-content">
    				<p>Chưa có bình luận chọn nào</p>
    				<input type="submit" name="" value="Đồng ý">
    				<input type="submit" name="" value="Xem kêt quả">
    			</div>
    			<div class="box-left-3-bottom"><center></center></div>
    		</div>

            <div class="box-left-4">
    			<div class="box-left-4-top"><span>Hỏi đáp</span></div>
    			<div class="box-left-4-content">
                   

    					<article>
    						<a href="">Đăng ký nguyện vọng học là gì? Đăng ký nguyện vọng học để làm gì? Quy trình xét nguyện vọng vào các lớp học phần như thế nào? Có phải tất cả các nguyện vọng đăng ký học đều được đáp ứng?</a>
    					</article>

                        <article>
                            <a href="">Khi bị quên mật khẩu của tài khoản đăng ký học thì sinh viên phải làm gì?</a>
                        </article>

    					<article>
    						<a href="" class="all">[Xem tất cả]</a>
    					</article>
    				</div>
    			<div class="box-left-4-bottom"><center></center></div>
    		</div>

            <div class="box-left-5">
    			<div class="box-left-5-top"><span>Điều tra việc làm</span></div>
    			<div class="box-left-5-content">
    				<p>Bạn đã có việc làm chưa</p>
    				<input type="radio" name="" value=""><label>Đã có</label>
    				<input type="radio" name="" value=""><label>Chưa có</label>

    				<input type="submit" name="" value="Đồng ý">
    				<input type="submit" name="" value="Hủy">
    				<input type="submit" name="" value="Thống kê">

    			</div>
    			<div class="box-left-5-bottom"><center></center></div>
    		</div>


</div>
    	</div>

<div class="right-home">
    		<div class="box-right-1">
    			


    	</div>

    </div>

<?php include "includes/footer.php" ?>