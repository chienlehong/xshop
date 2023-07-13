<?php 
if(is_array($dm)){
    extract($dm);
}

?>
<div class="row">
    <div class="row header">
        <h1> Cập nhật  Loại Hàng Hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=update" method="post">
        <div class="row mb10"> Mã Loại
            <input type="text" name="id_ma_loai" value="maloai" disabled>
        </div>
        <div class="row mb10">Tên Loại
            <input type="text" name="ten_loai" value="<?php if(isset($ten_loai)&&($ten_loai!=""))echo "$ten_loai"; ?>" required>
        </div>
        <div class="row mb10">
            <input type="hidden" name="id_ma_loai" value="<?php if(isset($id_ma_loai)&&($id_ma_loai>0))echo "$id_ma_loai"; ?>">
            <input type="submit" name="capnhat" value="cập nhật">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>

        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>