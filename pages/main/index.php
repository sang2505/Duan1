<?php
$sql_pro_sale = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.gia_sale > '0' ORDER BY tbl_sanpham.id_sp ASC" ;
$query_pro_sale = mysqli_query($mysqli,$sql_pro_sale);
?>
<?php
$sql_pro_iphone = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.id_danhmuc='2' ORDER BY tbl_sanpham.id_sp ASC";
$query_pro_iphone = mysqli_query($mysqli,$sql_pro_iphone);
?>
<?php
$sql_pro_ipad = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc AND tbl_sanpham.id_danhmuc='3' ORDER BY tbl_sanpham.id_sp ASC";
$query_pro_ipad = mysqli_query($mysqli,$sql_pro_ipad);
?>
<?php
$sql_post = "SELECT * FROM tbl_baiviet ORDER BY id_baiviet DESC";
$query_post = mysqli_query($mysqli,$sql_post);
?>
<!-- //todo slider -->
<div id="myCarousel" class="carousel slide border" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/img/banner1.jpg" alt="Leopard">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/banner2.jpg" alt="Cat">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assets/img/banner1.jpg" alt="Lion">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //todo support -->
<div class="container-support">
    <div class="container-support-item">
        <div class="container-support-item-icon">
            <i class="fa-solid fa-truck-fast"></i>
        </div>
        <div class="container-support-item-desc">
            <strong>Giao hàng miễn phí</strong>
            <p>Các đơn hàng có giá trị từ 200k trở lên</p>
        </div>
    </div>
    <div class="container-support-item">
        <div class="container-support-item-icon">
            <i class="fa-solid fa-right-left"></i>
        </div>
        <div class="container-support-item-desc">
            <strong>Hoàn trả miễn phí</strong>
            <p>Hoàn trả miễn phí trong 9 ngày</p>
        </div>
    </div>
    <div class="container-support-item">
        <div class="container-support-item-icon">
            <i class="fa-solid fa-credit-card"></i>
        </div>
        <div class="container-support-item-desc">
            <strong>Thanh toán an toàn</strong>
            <p>Thanh toán của bạn được an toàn với chúng tôi</p>
        </div>
    </div>
    <div class="container-support-item">
        <div class="container-support-item-icon">
            <i class="fa-solid fa-headset"></i>
        </div>
        <div class="container-support-item-desc">
            <strong>Hỗ trợ 24/7</strong>
            <p>Liên hệ với chúng tôi 24 giờ</p>
        </div>
    </div>
</div>
<!-- //todo container product sales -->
<div class="container-product-sales">
    <div class="container-product-sales-heading">
        <strong>Sản phẩm đang sale</strong>
        <p>Thêm các sản phẩm giảm giá vào hàng tuần</p>
    </div>
    <div class="container-product-sales-slider">
        <?php
        while ($row_pro_sale = mysqli_fetch_array($query_pro_sale)){
        ?>
        <form action="pages/main/addtocart.php?id=<?php echo $row_pro_sale["id_sp"]?>" method="POST">
            <div class=" container-product-sales-item">
                <div class="container-product-sales-img">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_sale['hinhanh']?>" alt="">
                </div>
                <div class="product-icon-cart">
                    <ul class="icon-cart-list">
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-right-left"></i>
                        </li>
                    </ul>
                </div>
                <p class="product-cate">
                    <?php echo $row_pro_sale['tendanhmuc'] ?>
                </p>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_sale['id_sp'] ?>&iddm=<?php echo $row_pro_sale['id_danhmuc']?>"
                    class="product-title">
                    <?php echo $row_pro_sale['tensp']?>
                </a>
                <?php
                if($row_pro_sale['gia_sale']>0){
                ?>
                <p style="text-decoration: line-through;" class="product-price">
                    <?php echo number_format($row_pro_sale['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <p class="product-price-sales">
                    <?php echo number_format($row_pro_sale['gia_sale'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }else{
                ?>
                <p class="product-price">
                    <?php echo number_format($row_pro_sale['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }
                ?>
                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="add-to-cart">
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</div>
<!-- //todo container categories -->
<div class="container-categories">
    <div class="container-categories-heading">
        <strong>Danh mục phổ biến</strong>
        <p>Thêm Danh mục Phổ biến vào hàng tuần</p>
    </div>
    <div class="container-categories-body">
        <div class="container-categories-body-item">
            <strong class="categories-item-title">Phụ kiện Macbook</strong><br>
            <a href="#" class="categories-item-view">
                Xem ngay
                <i class="fa-solid fa-circle-chevron-right"></i>
            </a>
            <img src="./assets/img/cate-mac1.jpg" alt="" class="categories-item-img">
        </div>
        <div class="container-categories-body-item">
            <strong class="categories-item-title">Phụ kiện iPhone</strong><br>
            <a href="#" class="categories-item-view">
                Xem ngay
                <i class="fa-solid fa-circle-chevron-right"></i>
            </a>
            <img src="./assets/img/iphone.jpg" alt="" class="categories-item-img">
        </div>
        <div class="container-categories-body-item">
            <strong class="categories-item-title">Phụ kiện iPad</strong><br>
            <a href="#" class="categories-item-view">
                Xem ngay
                <i class="fa-solid fa-circle-chevron-right"></i>
            </a>
            <img src="./assets/img/cate-ipad.jpg" alt="" class="categories-item-img">
        </div>
        <div class="container-categories-body-item">
            <strong class="categories-item-title">Phụ kiện Apple Watch</strong><br>
            <a href="#" class="categories-item-view">
                Xem ngay
                <i class="fa-solid fa-circle-chevron-right"></i>
            </a>
            <img src="./assets/img/cate-apple.png" alt="" class="categories-item-img">
        </div>
        <div class="container-categories-body-item">
            <strong class="categories-item-title">Phụ kiện Công nghệ khác</strong><br>
            <a href="#" class="categories-item-view">
                Xem ngay
                <i class="fa-solid fa-circle-chevron-right"></i>
            </a>
            <img src="./assets/img/cate-cnk.jpg" alt="" class="categories-item-img">
        </div>
    </div>
</div>
<!-- //todo container product iphone  -->
<div class="container-product-iphone">
    <div class="container-product-iphone-heading">
        <strong>Phụ kiện iPhone</strong>
        <p>Thêm các sản phẩm vào hàng tầm</p>
    </div>
    <div class="container-product-iphone-slider">
        <?php
        while ($row_pro_iphone = mysqli_fetch_array($query_pro_iphone)){
        ?>
        <form action="pages/main/addtocart.php?id=<?php echo $row_pro_iphone["id_sp"] ?>" method="POST">
            <div class="container-product-iphone-item">
                <div class="container-product-iphone-img">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_iphone['hinhanh'] ?>" alt="">
                </div>
                <div class="product-icon-cart">
                    <ul class="icon-cart-list">
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-right-left"></i>
                        </li>
                    </ul>
                </div>
                <p class="product-cate">
                    <?php echo $row_pro_iphone['tendanhmuc'] ?>
                </p>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_iphone['id_sp']?>&iddm=<?php echo $row_pro_iphone['id_danhmuc']?>"
                    class="product-title">
                    <?php echo $row_pro_iphone['tensp'] ?>
                </a>
                <?php
                if($row_pro_iphone['gia_sale']>0){
                ?>
                <p style="text-decoration: line-through;" class="product-price">
                    <?php echo number_format($row_pro_iphone['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <p class="product-price-sales">
                    <?php echo number_format($row_pro_iphone['gia_sale'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }else{
                ?>
                <p class="product-price">
                    <?php echo number_format($row_pro_iphone['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }
                ?>
                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="add-to-cart">
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</div>
<!-- //todo container product ipad -->
<div class="container-product-ipad">
    <div class="container-product-ipad-heading">
        <strong>Phụ kiện ipad</strong>
        <p>Thêm các sản phẩm vào hàng tầm</p>
    </div>
    <div class="container-product-ipad-slider">
        <?php
        while($row_pro_ipad = mysqli_fetch_array($query_pro_ipad)){
        ?>
        <form action="pages/main/addtocart.php?id=<?php echo $row_pro_ipad["id_sp"] ?>" method="POST">
            <div class="container-product-ipad-item">
                <div class="container-product-ipad-img">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro_ipad['hinhanh']?>" alt="">
                </div>
                <div class="product-icon-cart">
                    <ul class="icon-cart-list">
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-heart"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="icon-cart-item">
                            <i class="fa-solid fa-right-left"></i>
                        </li>
                    </ul>
                </div>
                <p class="product-cate">
                    <?php echo $row_pro_ipad['tendanhmuc'] ?>
                </p>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro_ipad['id_sp'] ?>&iddm=<?php echo $row_pro_ipad['id_danhmuc'] ?>"
                    class="product-title">
                    <?php echo $row_pro_ipad['tensp']?>
                </a>
                <?php
                if($row_pro_ipad['gia_sale']>0){
                ?>
                <p style="text-decoration: line-through;" class="product-price">
                    <?php echo number_format($row_pro_ipad['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <p class="product-price-sales">
                    <?php echo number_format($row_pro_ipad['gia_sale'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }else{
                ?>
                <p class="product-price">
                    <?php echo number_format($row_pro_ipad['giasp'],0,',','.'). ' vnđ'?>
                </p>
                <?php
                }
                ?>
                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="add-to-cart">
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</div>
<!-- //todo grid img -->
<div class="grid-img">
    <div class="grid-img-item">
        <img src="./assets/img/grid-airpod.jpg" alt="" class="grid-img-airpod">
    </div>
    <div class="grid-img-item">
        <img src="./assets/img/grid-iphone.jpg" alt="" class="grid-img-iphone">
    </div>
    <div class="grid-img-item">
        <img src="./assets/img/grid-watch.jpg" alt="" class="grid-img-watch">
    </div>
</div>
<!-- //todo container blog  -->
<div class="container-blogs">
    <div class="container-blogs-heading">
        <strong>Bảng tin</strong>
        <p>Cập nhật thông tin vào mỗi tuần</p>
    </div>
    <div class="container-blogs-slider">
        <?php
        while ($row_post = mysqli_fetch_array($query_post)){
        ?>
        <div class="container-blogs-item">
            <div class="container-blogs-content">
                <p class="container-blogs-content-heading">NEW</p>
                <strong class="container-blogs-content-title">Tin hot, tin hot</strong>
                <p class="container-blogs-content-desc">
                    <?php echo $row_post['tieude'] ?>
                </p>
                <a href="#" class="container-blogs-content-link">
                    Đọc thêm
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
            <img src="admin/modules/quanlybaiviet/img_post/<?php echo $row_post['img_baiviet'] ?>" alt=""
                class="container-blogs-img">
        </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- //todo grid img footer -->
<div class="grid-img-footer">
    <img src="./assets/img/logo.jpg" alt="" class="grid-img-footer-logo">
    <p class="grid-img-footer-desc">
        Uy tín là vàng
        <i class="fa-solid fa-dollar-sign"></i>
    </p>
    <img src="./assets/img/img-iphone.jpg" alt="" class="grid-img-footer-bg">
</div>
<div class="adv js-adv">
    <div class="container-adv">
        <i class="fa-solid fa-xmark container-adv-close js-close-adv"></i>
        <img src="./assets/img/QC.jpg" alt="" class="container-adv-img">
        <div class="container-adv-desc">
            <img src="./assets/img/logo1.png" alt="" class="container-adv-desc-logo">
            <p class="container-adv-desc-text">
                Uy tín là<strong> Vàng <i class="fa-solid fa-dollar-sign"></i></strong> <br>
            </p>
        </div>
    </div>
</div>
<div class="go-to-top js-top">
    <a href="#top">
        <i class="fa-solid fa-up-long"></i>
    </a>
</div>