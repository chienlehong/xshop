<?php

?>
<div class="row">
    <div class="row header"><h1> Danh Sách Loại Hàng Hóa</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsl">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
        <?php
             foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                $suadm="index.php?act=suadm&id_ma_loai=".$id_ma_loai;
                $xoadm="index.php?act=xoadm&id_ma_loai=".$id_ma_loai;

                
                 echo'<tr>
                    <td><input type="checkbox" name=""></td>
                     <td> '.$id_ma_loai.'</td>
                    <td> '.$ten_loai.' </td>
                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'" ><input type="button" value="Xóa"></a></td>
                </tr>';
                } 
             ?>
            </table>
        </div>


        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>

        </div>


    </div>


</div>

</div>
