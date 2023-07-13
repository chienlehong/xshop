<?php

?>
<div class="row">
    <div class="row header"><h1> Danh Sách Tài Khoản</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsl">
            <table>
                <tr>
                    <th></th>
                    <th>Mã khách hàng</th>
                    <th>Tên đăng nhâp</th>
                    <th> Mật khẩu </th>
                    <th>Kích hoạt</th>
                    <th>Email</th>
                    <th> Vai trò</th>
                    <th></th>
                </tr>
        <?php
             foreach($listkhachhang as $khachhang){
                extract($khachhang);
                $suakh="index.php?act=suakh&id_kh=".$id_kh;
                $xoakh="index.php?act=xoakh&id_kh=".$id_kh;
                

                
                 echo'<tr>
                    <td><input type="checkbox" name=""></td>
                     <td> '.$id_kh.'</td>
                     <td>'.$ho_ten.'</td>
                    <td> '.$mat_khau.' </td>
                    <td>'.$kich_hoat.'</td>
                    <td>'.$email.'</td>
                    <td>'.$vai_tro.'</td>
                    <td><a href="'.$suakh.'"><input type="button" value="Sửa"></a> <a href="'.$xoakh.'" ><input type="button" value="Xóa"></a></td>
                </tr>';
                } 
             ?>
            </table>
        </div>


        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>

        </div>


    </div>


</div>

</div>
