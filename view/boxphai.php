<div class="row mb">
                   <div class="boxtitle">TÀI KHOẢN</div>
                   <div class="boxcontent formtaikhoan">
                     <?php
                   if(isset($_SESSION['ho_ten'])){
                    extract($_SESSION['ho_ten']);
                   
                    
                   ?> 
                    <div class="row mb10">
                        Xin chào<br>
                        <?=$ho_ten?> 
                        
                    </div>
                    
                    <div class="row mb10">
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_khachhang">cập nhật tài khoản</a>
                        </li>
                        <?php
                        if($vai_tro=='1'){
                        ?>
                        <li>
                            <a href="admin/index.php">Đăng nhập admin</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="index.php?act=thoat">thoát</a>
                        </li>
                    </div>
                    <?php
                   }else{

                   }
                    ?>
                   <form action="index.php?act=dangnhap" method="post"  enctype="multipart/form-data">
                          <div class="row mb10"> Tên đăng nhập<input type="text" name="ho_ten" required></div> 
                          <div class="row mb10">   Mật khẩu<input type="password" name="mat_khau" required></div>
                          <div class="row mb10">   <input type="checkbox" name="">Ghi nhớ tài khoản</div>
                          <div class="row mb10">  <input type="submit" name="dangnhap" value="Đăng Nhập">
                            <input type="reset" value="nhập lại"></div>
                        </form>
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                       <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                   </div>
               </div>
               <div class="row mb">
                   <div class="boxtitle">DANH MỤC</div>
                   <div class="boxcontent2 menudoc">
                       <ul>
                        <?php
                        foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm="index.php?act=sanpham&id_ma_loai=".$id_ma_loai;
                            echo'<li><a href="'.$linkdm.'">'.$ten_loai.'</a></li>';
                        }
                        ?>

                       </ul>

                   </div>
                   <div class="boxfooter searbox">
                       <form action="index.php?act=sanpham" method="post">
                           <input type="text" name="kyw" >
                           <input type="submit" name="timkiem" value="Tìm kiếm">
                       </form>
                   </div>
               </div>
               <div class="row">
                   <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                   <div class="row boxcontent">
                    <?php
                    foreach($dstop10 as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&id_hh=".$id_hh;
                        $anh=$img_path.$hinh;
                       

                        echo'<a href="'.$linksp.'"><div class="row mb10 top10">
                        <img src="'.$anh.'" alt="">
                        <h3>'.$ten_hh.'</h3></a>
                    </div>';
                    }
                    ?>
                       

                       
                   </div>
               </div>