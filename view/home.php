<div class="row mb">
              <div class="boxtrai mr demo">
                     <div class="row">
                         <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
                 <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="images/0.jpg" style="width:100%">
                 <div class="text"></div>
                </div>

               <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="images/1.jpg" style="width:100%">
                  <div class="text"></div>
               </div>

               <div class="mySlides fade">
                <div class="numbertext"></div>
                 <img src="images/2.jpg" style="width:100%">
                <div class="text"></div>
                   </div>

                   <!-- Next and previous buttons -->
                 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
               </div>
                  <br>

                      <!-- The dots/circles -->
                   <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
               <span class="dot" onclick="currentSlide(2)"></span>
               <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                         </div>
                     </div>
                  <div class="row">
                    <?php
                    $i=0;
                    foreach ($hhnew as $hh){
                        extract($hh);
                        $linksp="index.php?act=sanphamct&id_hh=".$id_hh;
                        $anh=$img_path.$hinh;
                        if(($i==2 )|| ($i==25 )||($i==8 )){
                            $mr="mr";
                        }else{
                            $mr="";
                        }
                        echo' <a href="'.$linksp.'"><div class="boxsp '.$mr.'">
                        <div class="img"> <img src="'.$anh.'" width="100%" alt=""></div>
                        <h3>'.$ten_hh.'</h3>
                        <p >'.number_format($don_gia).'$</p>
                    </div></a>';
                    $i+=1;
                    }
                    ?>
                      
                  </div>
              </div>
           <div class="boxphai">
               <?php
               include "boxphai.php";
               ?>
           
            </div>
       </div>
