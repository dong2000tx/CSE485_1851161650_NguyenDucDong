<?php require_once("includes/config.php");?>
<?php session_start(); ?>

<?php
error_reporting(0);
ini_set('display_errors', 0);
?>
<?php include "includes/header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <main>
        <div class="main">
                <table id="TbSeach" cellSpacing="0" width="100%">
                    <tbody>
                        <tr>
                            <div align="left " style="padding-top: 60px;">
                                <form action="search.php" method="get" >Thông tin giảng viên (họ, tên): <input type="text" name="search" />
                                <input id="submit-btn" type="submit" name="ok" value="Search" />
                            </form>
                        </div>
                        <tr>

    <div style="margin-top: 30px;">
        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok']))
        {
            echo'                        </tr>
                    </tbody>
                </table>
             </div>';
        // Gán hàm addslashes để chống sql injection
        $search = addslashes($_GET['search']);
        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
        if (empty($search)) {
        
                    echo "<script>alert('Bạn phải nhập dữ liệu!'); window.location='search.php'</script>";
            
            }
            else
            {
             $sql = "SELECT * FROM giangvien WHERE TEN like '%$search%'";
            // Thực thi câu truy vấn
            $query = mysqli_query($conn,$sql);
                if(mysqli_num_rows($query)>0){
                    echo "<script>";
                    echo ' $( document ).ready(function(){
                        $("#table2").removeAttr("style");
                    })';
                    echo "</script>";
            }

            else {
                echo "<script>alert('Không tìm thấy!'); window.location='search.php'</script>";

            }
            }

            }
            
        else{
            echo '                        <td colspan="3">
                            <img id="Image1" src="images/Teacher_schedule.jpg" />
                        </td>
                        </tr>
                    </tbody>
                </table>
    </div>';


            
        }
        mysqli_close($conn);
            ?>
        
    <div id="table2" style="visibility: hidden;">
        <table class="table table-bordered table-striped" style="margin: 60px 0px;">

            <thead class="bg-light">
                <tr>
                    <th scope="col">Mã Giảng Viên</th>
                    <th scope="col">Họ Và Tên</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">SĐT</th>
                    
                </tr>
            </thead>
            

            <tbody>
                <?php

                while($data = mysqli_fetch_array($query)) {
                $MAGIANGVIEN = $data['MAGIANGVIEN'];
                ?>
                <tr>
                    <td scope="row"><?php echo $data['MAGIANGVIEN']; ?></td>
                    <td><?php echo $data['TEN']; ?></td>
                    <td><?php echo $data['DIACHI']; ?></td>
                    <td><?php echo $data['SDT']; ?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

        
    </div>
</div>
</main>
<?php include "includes/footer.php" ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>