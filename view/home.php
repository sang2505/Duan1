 <?php
    $html_dstb_new='';
    foreach ($dstb_new as $tb) {
        extract($tb);
        $html_dstb_new.= '<tbody>
        <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$tieuDe.'</td>
          <td>'.$ngayThang.'</td>
          <td><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Chi Tiết</button></td>
        </tr>
      </tbody>';
    }
 ?>


 <!-- ============================================================== -->
 <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">

     <!-- Container fluid  -->
     <!-- ============================================================== -->
     <div class="container-fluid">
         <h1> Thông Báo Mới </h1>
         <div class="card">
             <div class="card-body">
                 <h5 class="card-title m-b-0">Thông Báo Mới</h5>
             </div>
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">Id</th>
                         <th scope="col">Tiêu Đề</th>
                         <th scope="col">Ngày</th>
                         <th></th>
                     </tr>
                 </thead>
                 <?=$html_dstb_new; ?>
                 <!-- <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td><button style="border-radius: 5px; border: 1px solid blue; coler:gray;">Chi Tiết</button></td>
                                    </tr>
                                  </tbody> -->
             </table>
         </div>

     </div>
     <!-- ============================================================== -->
     <!-- End Container fluid  -->
     <!-- ============================================================== -->
     <!-- ============================================================== -->