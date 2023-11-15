
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<div class="container-fluid">
        <h1> Nhân Viên </h1>
        <div class="card">
            <div class="card-body" style="display: flex;">
                <h5 class="card-title m-b-0">Thêm Một Nhân Viên Mới</h5>
                <div class="btnnhanvien" style="margin-left: 800px;">
                  
    
                </div>
            </div>
            <form action="index.php?pg=addnv" method="post" style="">

                    <div class="row" style="margin: 20px;">
                        <h5 style="margin-right: 100px;">ID</h5> <br>
                        <input type="text" name="idnv" disabled style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 57px;">Chức vụ</h5> <br>
                        <input type="text" name="chucvu" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 65px;">Họ tên</h5><br>
                        <input type="text" name="hoten" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 43px;">ngày sinh</h5> <br>
                        <input type="date" name="ngaysinh" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 50px;">Giới tính</h5> <br>
                        <input type="text" name="gioitinh" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 17px;">Số điện thoại</h5> <br>
                        <input type="number" name="sodienthoai" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 63px;">Địa chỉ</h5> <br>
                        <input type="text" name="diachi" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 75px;">email</h5> <br>
                        <input type="email" name="email" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row">
                        <input type="submit" value="Thêm Mới" name="themnv" style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;">
                        <input type="reset" value="Nhập Lại" style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;">
                        <!-- <a href="index.php?pg=calam"><button style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;">Danh Sách Ca Làm</button></a>  -->
                      <a href="index.php?pg=nhanvien"><input type="button" value="Danh Sách Nhân Viên" style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;"></a>  
                    </div>
                  <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                  ?>


                </form>
            
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->