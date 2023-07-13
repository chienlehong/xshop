<?php

?>
<div class="row">
    <div class="row header mb"><h1> Danh Sách Loại Hàng Hóa</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="id_ma_loai" >
                    <option value="0" selected>Tất cả</option>
                <?php 
            foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id_ma_loai.'">'.$ten_loai.'</option>';
            }
            
            ?>
                </select>
                <input type="submit" name="timkiem" value="tìm kiếm">
            </form>
    <div class="row formcontent">
        <div class="row mb10 formdsl">
            
            <table>
                <tr>
                    <th></th>
                    <th>Mã hàng hóa</th>
                    <th>Tên hàng hóa</th>
                    <th>Đơn giá</th>
                    <th>Giảm giả</th>
                    <th>Hình </th>
                    <th>Ngày nhập</th>
                    <th>Mô tả</th>
                    <th>Đặc biệt</th>
                    <th>Số lượt xem</th>
                    <th>mã loại</th>
                    <th></th>
                </tr>
        <?php
             foreach($listhanghoa as $hanghoa){
                extract($hanghoa);
                $suasp="index.php?act=suasp&id_hh=".$id_hh;
                $xoasp="index.php?act=xoasp&id_hh=".$id_hh;
                $hinhpath="../upload/".$hinh;
                if(is_file($hinhpath)){
                   $img="<img src='".$hinhpath."'height='80'>";
                }else{
                    $img="không có hình";
                }

                
                 echo'<tr>
                    <td><input type="checkbox" name=""></td>
                     <td> '.$id_hh.'</td>
                     <td> '.$ten_hh.' </td>
                     <td> '.$don_gia.' </td>
                     <td> '.$giam_gia.' </td>
                     <td> '.$img.' </td>
                     <td> '.$ngay_nhap.' </td>
                     <td> '.$mo_ta.' </td>
                     <td> '.$dac_biet.' </td>
                     <td> '.$so_luot_xem.' </td>
                     <td> '.$id_ma_loai.' </td>
                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'" ><input type="button" value="Xóa"></a></td>
                </tr>';
                } 
             ?>
            </table>
        </div>


        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>

        </div>


    </div>


       </div>

</div>
