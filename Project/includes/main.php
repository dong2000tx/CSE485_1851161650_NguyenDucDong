<div class="right-home">
    		<div class="box-right-1">
    			<div class="box-right-1-top">
    				<span>THÔNG TIN TOÀN TRƯỜNG</span>
    				<span><a href=""><b>Xem tất cả</b></a></span>
    			</div>
    			<div class="box-right-1-content">
    				<p>[THÔNG TIN ĐÁNG CHÚ Ý]</p>
    				<span>

                        <?php
                        // Lấy 16 bài viết mới nhất đã được phép public ra ngoài từ bảng posts
                        $sql = "select * from baiviet";
                        // Thực hiện truy vấn data thông qua hàm mysqli_query
                        $query = mysqli_query($conn,$sql);
                        ?>
                        <?php
                        // Khởi tạo biến đếm $i = 0
                        $i = 0;
                        // Lặp dữ liệu lấy data từ cơ sở dữ liệu
                        while ($data = mysqli_fetch_array($query)) {
                            // Nếu biến đếm $i = 4, tức là vòng lặp chạy tới bài viết thứ tư thì ta thực hiện xuống hàng cho bài viết kế tiếp
                            // Vì mỗi dòng hiển thị, ta chỉ hiển thị 4 bài viết
                           
                        ?>
                        <article>
                            <a href="display.php?id=<?php echo $data['ID']; ?>"><img src="images/viewpost.gif"> <?php echo substr($data["TIEUDE"], 0, 255)." ..."; ?></a>
                           <!-- <a href="display.php?id=<?php echo $data['id']; ?>" style="text-align: center;"><i style="color: #000;">Xem thêm</i></a>-->
                        </article>
                            <?php
                                
                             }
                        ?>

                        <a href="lienthong.php"><img src="images/viewpost.gif"> Chương trình đào tạo theo học chế tín chỉ trình độ liên thông từ cao đẳng lên đại học hệ chính quy áp dụng từ K55LT trở đi (17/12/2013)</a>
                    </span>
    			</div>
    			<div class="box-right-1-bottom">
    				<span><b>Chưa có dữ liệu</b></span>
    				<span><a href=""><img src="images/news_detail.gif"> Xem chi tiết</a></span>
    			</div>
    			
    		</div>

    		<div class="box-right-1">
    			<div class="box-right-1-top">
    				<span>THÔNG TIN GIẢNG VIÊN</span>
    				<span><a href=""><b>Xem tất cả</b></a></span>
    			</div>
    			<div class="box-right-1-content">
    				<p>[THÔNG TIN ĐÁNG CHÚ Ý]</p>
    				<span><a href=""><img src="images/viewpost.gif"> Thông báo thi Tiếng Anh B1 đợt 4 năm 2019 (10/10/2019)</a></span>
    				<span><a href=""><img src="images/viewpost.gif"> QUY ĐỊNH TRÌNH BÀY LUẬN VĂN THẠC SĨ, ĐƠN XIN BẢO VỆ LUẬN VĂN (04/05/2016)</a></span>
    				<span><a href=""><img src="images/viewpost.gif"> Quy định về đào tạo trình độ thạc sĩ (27/11/2015)</a></span>
    				<span><a href=""><img src="images/viewpost.gif"> Thông báo về chấn chỉnh học viên thực hiện Nội quy học tập của Nhà trường (19/11/2015)</a></span>
    				



    			</div>
    			<div class="box-right-1-bottom">
    				<div class="link">
    					<a href="">Mẫu trình bày đề cương luận văn (07/10/2019)</a>
    				</div>
    				<span>Mẫu trình bày đề văn luận cương</span>
    				<span><a href=""><img src="images/news_detail.gif"> Xem chi tiết</a></span>
    			</div>
    			
    		</div>


    		<div class="box-right-1">
    			<div class="box-right-1-top">
    				<span>ĐẠI HỌC CHÍNH QUY</span>
    				<span><a href=""><b>Xem tất cả</b></a></span>
    			</div>
    			<div class="box-right-1-content">
    				<p>[THÔNG TIN ĐÁNG CHÚ Ý]</p>
    				<span><a href=""><img src="images/viewpost.gif"> Thông báo tổ chức thi chuẩn Tiếng Anh đầu ra cho trình độ đại học hệ chính quy đợt 1 năm 2020 tại Hà Nội (02/07/2020)</a></span>
    				<span><a href=""><img src="images/viewpost.gif"> Kết quả thi chuẩn Tiếng Anh đầu đợt 4 năm 2019 (14/1/2020)</a></span>
    				<span><a href=""><img src="images/viewpost.gif"> Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 4 năm 2019 tại Hà Nội (27/11/2019)</a></span>
    			</div>
    			
    		</div>


    	</div>

    </div>