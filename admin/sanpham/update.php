<?php 
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$hinh;
                if(is_file($hinhpath)){
                   $img="<img src='".$hinhpath."'height='80'>";
                }else{
                    $img="không có hình";
                }

?>
<div class="row">
    <div class="row header">
        <h1> Cập nhật  Loại Hàng Hóa</h1>
    </div>
    <div class="row formcontent">
    <form action="index.php?act=updatesp" method="post"  enctype="multipart/form-data">
    <select name="id_ma_loai" >
                    <option value="0" selected>Tất cả</option>
                <?php 
            foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                if($id_ma_loai==$id_hh) $s="selected"; else $s="";
                 echo '<option value=" '.$id_ma_loai.'"'.$s.'>'.$ten_loai.'</option>';
            }
            
            ?>
                </select>
        <div class="row mb10"> Mã hàng hóa
            <input type="text" name="id_hh" value="id_hh" disabled>
        </div>
        <div class="row mb10">Tên hàng hóa
            <input type="text" name="ten_hh" value="<?=$ten_hh?>" required>
        </div>
        <div class="row mb10">Đơn giá
            <input type="text" name="don_gia" value="<?=$don_gia?>" required>
        </div>
        <div class="row mb10">Giảm giá
            <input type="text" name="giam_gia" value="<?=$giam_gia?>" required>
        </div>
        <div class="row mb10">hình ảnh
            <input type="file" name="hinh" >
            <?=$img?>
        </div>
        <div class="row mb10">Ngày nhập
            <input type="date" name="ngay_nhap" value="<?=$ngay_nhap?>" required>
        </div>
        <div class="row mb10">Mô tả
            <textarea name="mo_ta"  cols="30" rows="10" value="<?=$tmo_ta?>" required></textarea>
            
        </div>
        <div class="row mb10">Đặc biệt 
            <input type="text" name="dac_biet" required>
        </div>
        
        
      
        <div class="row mb10">
            <input type="hidden" name="id_hh" value="<?=$id_hh?>">
            <input type="submit" name="capnhat" value="Cập Nhật">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>

        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>