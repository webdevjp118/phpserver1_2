<?php
get_header('salon');
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    氏名 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    関連事項 : ".$field3."<br>
    職業 : ".$field4."<br>
    メッセージ本文 : <br>".$field5."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>location.href="'.home_url().'/thanks/"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="'.home_url().'/salon-contact/"</script>';
    }  
}
?>
<!-- CONTAIN_START -->
<section id="contain"> 
    <div class="introduction_main_ip">
        <video id="Mp4Video" class="video-div" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Top.mp4" loop muted playsinline autoplay></video>
    </div> 
    <div class="contact_block_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_cp"> 
                    <div class="common_title_hp common_change_hp">
                        <h2>CONTACT</h2>
                    </div>                    	
                    <div class="salon_main_img_sap">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_7.png" alt="" />
                        </div>
                    <div class="contact_middle_cp">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="contact_top_cp contact_pd_cnp">
                                <div class="contact-form-cop"> 
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">氏名</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field1" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                                                                                                       
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">メールアドレス</div>
                                        <div class="form-field-input-cop">
                                            <input type="email" placeholder="" name="field2" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                                                                        
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">関連事項</div>
                                        <div class="form-field-input-cop">
                                            <div class="form-list-cop">                                        	
                                                <div class="form-list-select-cop">
                                                    <select class="custom-select" name="field3">
                                                        <option value="龍粋社">龍粋社</option>
                                                        <option value="天川龍一 / 天妙龍啓">天川龍一 / 天妙龍啓</option>
                                                        <option value="Canon Sakamoto">Canon Sakamoto</option>
                                                        <option value="霊能施術 / タロット占い">霊能施術 / タロット占い</option>
                                                        <option value="オンラインサロン「RYUSUISYA」">オンラインサロン「RYUSUISYA」</option>
                                                        <option value="霊能力者養成スクール「龍粋舎">霊能力者養成スクール「龍粋舎</option>
                                                        <option value="坂本かのんのタロッt占い">坂本かのんのタロッt占い</option>
                                                    </select>
                                                </div>                                 
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop field-top-cop">
                                        <div class="form-field-lable-cop">題名</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field4" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>    
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">メッセージ<br/>本文</div>
                                        <div class="form-field-input-cop">
                                            <textarea type="text" placeholder="" name="field5" required></textarea>                                                                                   
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                                                                                       
                                </div>     
                                <div class="contact_btn_cp">
                                    <a href="#contact" id="submit_trick" class="common_btn_hp">送信 > </a>
                                </div>                                                           
                            </div>
                            <input type="hidden" name="submit-confirm" value="submit-confirm">
                            <button type="submit" id="form_submit" style="opacity:0"></button>
                        </form>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<!-- FOOTER_START -->
<footer id="footer" class="footer_change_sop footer_change_trp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp footer_change_hp">
                <div class="footer_middle_hp">
                    <div class="footer_top_hp">
                        <div class="footer_box_hp">
                            <div class="footer_img_hp">
                                <a href="https://www.youtube.com/@ryusuisya"> 
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img.png" alt="" />
                                </a>
                            </div>
                            <div class="footer_img_hp">
                                <a href="https://twitter.com/ryusuisya"> 
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img2.png" alt="" />
                                </a>
                            </div> 
                            <div class="footer_img_hp">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt="" />	
                                </a>
                            </div>                                                         
                        </div>
                        <div class="footer_copyright_sop">                                                                                   
                            ©️All rights reserved.
                        </div>
                    </div>                              
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- FOOTER_END -->
<?php
get_footer();
