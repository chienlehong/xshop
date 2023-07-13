<div class="row ">
   <div class="row row header mb">
    <H1>Thống kê sản phẩm theo loại</H1></div>
           <div class="row formcontent">
               
                  <div class="list">
                   <table>
                     <tr>
                         <th>Mã Lọai</th>
                         <th>Tên hàng hóa</th>
                         <th>Số lượng</th>
                         <th>Giá cao nhất</th>
                         <th>Giá thấp nhất</th>
                         <th>Giá trung bình</th>
                      </tr>
                      <?php
                      foreach ($listthongke as $thongke){
                        extract($thongke);
                        echo'
                        <tr>
                        <td>'.$id_ma_loai.'</td>
                        <td>'.$ten_loai.'</td>
                        <td>'.$counthh.'</td>
                        <td>'.$maxdon_gia.'</td>
                        <td>'.$mindon_gia.'</td>
                        <td>'.$avgdon_gia.'</td>
                        </tr>
                        ';
                      }
                      ?>
                      
                    </table>
                </div>
            </div>

   </div>
<div class="row mb10">
    <a href="index.php?act=bieudo"><input type="button" value="xem biểu đồ"></a>
</div>



