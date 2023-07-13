<div class="row mb">
              <div class="boxtrai mr ">
              <div class="row mb">
                    <div class="boxtitle">Sản phẩm <strong><?=$tendm?></strong></div>
                    <div class="row boxcontent">
                        <?php
                        $i=0;
                        foreach ($dshh as $hh){
                            extract($hh);
                              $linksp="index.php?act=sanphamct&id_hh=".$id_hh;
                            // $linksp="index.php?act=sanpham&id_hh=".$id_hh;
                            $anh=$img_path.$hinh;
                            if(($i==2 )|| ($i==25 )||($i==8 )||($i==11 )){
                                $mr="mr";
                            }else{
                                $mr="";
                            }
                            echo' <div class="boxsp '.$mr.'">
                            <div class="img"><a href="'.$linksp.'"> <img src="'.$anh.'" width="100%" alt=""></a></div>
                            <p >'.$don_gia.'$</p>
                            <a href="'.$linksp.'">'.$ten_hh.'</a>
                        </div>';
                        $i+=1;
                        }
                       
                        ?>
                     </div>
              </div>
              
        
                      
                  </div>
              
           <div class="boxphai">
           <?php
            include "boxphai.php"
            ?>
           </div>
    </div>
