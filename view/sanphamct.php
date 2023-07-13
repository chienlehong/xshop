    <div class="row mb">
              <div class="boxtrai mr ">
                <div class="row mb">
                <?php 
                extract($onesp);
                ?>
                    <div class="boxtitle"><?=$ten_hh?></div>
                    <div class="row boxcontent">
                        <?php
                        
                        $anh=$img_path.$hinh;
                        echo '<div class="row mb spct"><img src="'.$anh.'"></div>';
                        echo $mo_ta;
                        ?>
                     </div>
              </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
              <script>
                $(document).ready(function(){
             
               
                      $("#binhluan").load("view/binh_luan/binhluan_form.php", {id_hh: <?=$id_hh?>});
                   });
                  
                 </script>
                <div class="row" id="binhluan">
                

                </div>
              <div class="row mb">
                    <div class="boxtitle">sản phẩm cùng lọai</div>
                    <div class="row boxcontent spcl">
                        <?php
                        foreach($sp_cung_loai as $sp_cung_loai){
                            extract($sp_cung_loai);
                            $linksp="index.php?act=sanphamct&id_hh=".$id_hh;
                            $anh=$img_path.$hinh;
                            echo'<a href="'.$linksp.'"><div class="anh123">
                        <img src="'.$anh.'"  width="60%" alt="">
                        <h3>'.$ten_hh.'</h3></a>
                    </div>';


                            // echo '<li><a href="'.$linksp.'">'.$ten_hh.'</a></li>';
                        }
                        ?>
                     </div>
              </div>
                      
                  </div>
              
           <div class="boxphai">
           <?php
            include "boxphai.php";
            ?>
           </div>
    </div>
