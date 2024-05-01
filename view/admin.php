<?php 
    include "../view/database/connect.php";
    
    if(isset($_POST['btnThemReview'])) {
        $image = $_FILES['image_baiviet']['name'];
        $image_tmp = $_FILES['image_baiviet']['tmp_name'];
        
        $quanname = $_POST['quanname_baiviet'];
        $diachi = $_POST['diachi_baiviet'];
        $formreview = $_POST['formreview_baiviet'];
        $danhgia = $_POST['danhgia_baiviet'];
        
        $sql_review = "INSERT INTO baiviet(tenquan,diachiquan,hinhanhquan,noidungquan,danhgia) VALUES ('$quanname','$diachi','".$image."','$formreview','$danhgia')";
        move_uploaded_file($image_tmp,'../image/'.$image);
        mysqli_query($conn,$sql_review);
    }
?> 

<!-- <?php 

    if(isset($_POST['tukhoa'])){
        $tukhoa = $_POST['timkiem'];
    }
    
    $sql_look = "SELECT * FROM baiviet WHERE tenquan LIKE '%".$tukhoa."%'";
    $query_look = mysqli_query($conn,$sql_look);

?> -->


    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bootstrap Carousel</title>
            <!-- Link Bootstrap CSS -->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../view/css/bootstrap.min.css">
            <link rel="stylesheet" href="../view/css/style.css">
            <link rel="stylesheet" href="../view/viewcss/index.css">
            <link rel="stylesheet" href="../view/viewcss/admin.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
        <div class="navbar">
        <ul>
           <li><a href="">Review Quán cà phê</a></li>
           <li><a href="admin.php">Review Quán Ăn</a></li>
        </ul>
    </div>
    <div class="container">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../image/istockphoto-1143239273-170667a.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/banner-design-japanese-mochi-asian-260nw-2261797571.webp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/s-l1200.webp" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Link Bootstrap JS (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>


    <h2>Review Quán ăn</h2>
 
    <!-- Button đăng nhập để mở form đăng nhập -->
    <button id="myBtn" class="btn btn-warning">Thêm Review</button>
    <form class="d-flex" action="" method="post">
        <input class="form-control me-2" type="search" name="timkiem" placeholder="Nhập tên quán" aria-label="Search">
        <button class="btn btn-outline-success" name="tukhoa" type="submit">Tìm kiếm</button>
      </form>
    <div class="container">
        <div class="row">
            <div class="col-md d-flex align-items-center justify-content-center p-5">
                <div id="clock" class="text-white font-weight-bold"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../view/js/script.js"></script>

    <form action="#" method="post" enctype="multipart/form-data">
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Nội dung form đăng nhập -->
        <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Form Thêm bài viết</h2>
                <div class="fomrgroup">
                    <b>Tên quán:</b>
                    <input type="text" name="quanname_baiviet">
                </div>
                <div class="fomrgroup">
                    <b>Địa chỉ:</b>
                    <input type="text" name="diachi_baiviet">
                </div>
                <div class="fomrgroup">
                    <b>Hình ảnh:</b>
                    <input type="file" name="image_baiviet">
                </div>
                <div class="fomrgroup">
                    <b>Nội dung:</b>
                    <input style="height:80px" type="text" name="formreview_baiviet">
                </div>
                <div class="fomrgroup">
                    <b>Đánh giá:</b>
                    <input type="number" max="10" min="0" value="1" name="danhgia_baiviet">
                </div>
                <div class="fomrgroup">
                    <button type="submit" name="btnThemReview">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // lấy phần Modal
    var modal = document.getElementById('myModal');
  
    // Lấy phần button mở Modal
    var btn = document.getElementById("myBtn");
  
    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close")[0];
  
    // Khi button được click thi mở Modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
  
    // Khi span được click thì đóng Modal
    span.onclick = function() {
        modal.style.display = "none";
    }
  
    // Khi click ngoài Modal thì đóng Modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script> 

<style>
  .formbaiviet {
    animation: fadeIn 0.5s ease forwards; /* Sử dụng animation fadeIn với thời gian 0.5s */
    opacity: 0; /* Mặc định là ẩn */
  }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var elementsToShow = document.querySelectorAll('.formbaiviet');

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        elementsToShow.forEach(function (element) {
            if (isElementInViewport(element)) {
                element.style.opacity = 1;
            }
        });
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll();
});
</script>


<?php   
        while($row = mysqli_fetch_array($query_look)) {
            ?>
            
                <div class="formbaiviet">
                    <a href="detail.php?id=<?php echo $row['id']?>" id="btnChitiet"><img src="../image/<?php echo $row['hinhanhquan'] ?>" width="350"></a>
                    <div><b>Tên quán: <?php echo $row['tenquan'] ?></b></div>
                    <div>Địa chỉ: <?php echo $row['diachiquan'] ?></div>
                    <div>Nội dung: <?php echo $row['noidungquan'] ?></div>
                    <div>Đánh giá: <?php echo $row['danhgia'] ?>/10</div>
                    <div style="display:inline">
                    <div><a style="margin-top:20px" class="btn btn-primary" href="../view/controller/xoa.php?id=<?php echo $row['id'] ?>">Xóa</a></div>
                    <div style="float:right"><a href=""><h5>&#x2764;</h5></a></div>
                    </div>
                </div>
           
            <?php
        }
?>



<footer class="footer bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Thông tin liên hệ</h5>
                <p>Địa chỉ: Quận 8, Thành phố Hồ Chí Minh</p>
                <p>Email: nghipro1417@gmail.com</p>
                <p>Điện thoại: 0938307209</p>
            </div>
            <div class="col-md-6">
                <h5>Liên kết nhanh</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Về chúng tôi</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <p>&copy; 2024 Tất cả quyền được bảo lưu.</p>
    </div>
</footer>

</body>
</html>
