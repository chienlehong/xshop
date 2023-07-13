<?php

?>
<div class="row">
    <div class="row header"><h1> Danh Sách Bình Luận</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsl">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Bình luận</th>
                    <th>Nội dung</th>
                    <th> Mã hàng hóa </th>
                    <th>Mã khách hàng</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
        <?php
             foreach($listbinhluan as $binhluan){
                extract($binhluan);
                
                $xoabl="index.php?act=xoabl&id_bl=".$id_bl;
                
                
                 echo'<tr>
                    <td><input type="checkbox" name=""></td>
                     <td> '.$id_bl.'</td>
                     <td>'.$noi_dung.'</td>
                    <td> '.$id_hh.' </td>
                    <td>'.$id_kh.'</td>
                    <td>'.$ngay_bl.'</td>
                   
                    <td> <a href="'.$xoabl.'" ><input type="button" value="Xóa"></a></td>
                </tr>';
                } 
             ?>
            </table>
        </div>


        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            

        </div>


    </div>


</div>

</div>
