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

<?php 
    include "../view/database/connect.php";
    $sql_xuat = "SELECT * FROM baiviet";
    $result = $conn -> query($sql_xuat);
   



    // Kiểm tra nếu form đã được gửi
    if(isset($_POST['tukhoa'])){
        // Lấy giá trị từ input tìm kiếm
        $keyword = $_POST['timkiem'];
    
        // Sử dụng câu truy vấn SQL để lấy các bài viết có tên sản phẩm chứa từ khóa
        $sql_search = "SELECT * FROM baiviet WHERE tenquan LIKE '%$keyword%'";
        $result_search = mysqli_query($conn, $sql_search);
        
    }

?>

<?php 
    include "../view/database/connect.php";
   if(isset($_GET['id'])){
    $id = $_GET['id'];
   }

   $sql_chitiet = mysqli_query($conn, "SELECT * FROM baiviet WHERE id = '$id'");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Review</title>
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
</head>
<body>

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
</body>
</html>


    <h2>Review Quán ăn</h2>
 
    <?php
    while($row = mysqli_fetch_array($sql_chitiet)){?> 
        <div class="box-chitiet">
          <img width="500" src="../image/<?php echo $row['hinhanhquan'] ?>"
            <h3><?php echo $row['tenquan'] ?></h3>
            <div><?php echo $row['diachiquan'] ?></div>
            <div><?php echo $row['noidungquan'] ?></div>
            <div><?php echo $row['danhgia'] ?>/10</div>
        </div>
    <?php } ?>

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
