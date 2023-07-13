<div class="row">
    <div class="row header">
        <h1> Thêm Mới Loại Hàng Hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post"  enctype="multipart/form-data">
        <div class="row mb10"> danh muc<br>
           <select name="id_ma_loai" >
            <?php 
            foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id_ma_loai.'">'.$ten_loai.'</option>';
            }
            
            ?>


           </select>
        </div>
        <div class="row mb10">Tên hàng hóa
            <input type="text" name="ten_hh" required>
        </div>
        <div class="row mb10">Đơn giá
            <input type="text" name="don_gia" required>
        </div>
        <div class="row mb10">Giảm giá
            <input type="text" name="giam_gia" required>
        </div>
        <div class="row mb10">hình ảnh
            <input type="file" name="hinh">
        </div>
        <div class="row mb10">Ngày nhập
            <input type="date" name="ngay_nhap" required>
        </div>
        <div class="row mb10" >Mô tả
            <textarea name="mo_ta"  cols="30" rows="10" required></textarea>
            
        </div>
        <div class="row mb10">Đặc biệt 
            <input type="text" name="dac_biet" required>
        </div>
       
        
        <div class="row mb10">
            <input type="submit" name="them_moi" value="Thêm Mới">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>

        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>