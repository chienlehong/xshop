<div class="row">
    <div class="row header">
        <h1> Thêm Mới Loại Hàng Hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post">
        <div class="row mb10"> Mã Loại
            <input type="text" name="id_ma_loai" value="maloai" disabled>
        </div>
        <div class="row mb10">Tên Loại
            <input type="text" name="ten_loai" required>
        </div>
        <div class="row mb10">
            <input type="submit" name="them_moi" value="Thêm Mới">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>

        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>