
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<div class="container-fluid">
        <h1> Ca Làm </h1>
        <div class="card">
            <div class="card-body" style="display: flex;">
                <h5 class="card-title m-b-0">Thêm Một Ca Làm Mới</h5>
                <div class="btncalam" style="margin-left: 800px;">
                  
    
                </div>
            </div>
            <form action="index.php?pg=addcl" method="post" style="">

                    <div class="row" style="margin: 20px;">
                        <h5 style="margin-right: 100px;">ID</h5> <br>
                        <input type="text" name="idcl" disabled style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 30px;">Tên Ca Làm</h5> <br>
                        <input type="text" name="tencl" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 25px;">Giờ Bắt Đầu</h5><br>
                        <input type="text" name="timestart" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row" style="margin: 20px;">
                    <h5 style="margin-right: 20px;">Giờ Kết Thúc</h5> <br>
                        <input type="text" name="timeend" style="margin-left:10px; width: 900px;">
                    </div>

                    <div class="row">
                        <input type="submit" value="Thêm Mới" name="themcl" style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;">
                        <input type="reset" value="Nhập Lại" style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;">
                        <!-- <a href="index.php?pg=calam"><button style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;">Danh Sách Ca Làm</button></a>  -->
                      <a href="index.php?pg=calam"><input type="button" value="Danh Sách Ca" style="margin-left: 20px; margin-bottom: 20px; border-radius:10px; border:solid 1px blue;"></a>  
                    </div>
                  <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                  ?>


                </form>
            
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->