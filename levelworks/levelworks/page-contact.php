<?php
get_header();

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';

    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    フリガナ : ".$field2."<br>
    郵便番号 : ".$field3."<br>
    住所 : ".$field4."<br>
    電話番号 : ".$field5."<br>
    メールアドレス : ".$field6."<br>
    お問い合わせ内容 : <br>".$field7."<br>
    ";

    $subject = 'Team Building';

    $headers = "From: " . $field3 . "\r\n";
    $headers .= "Reply-To: " . $field3 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
        echo '<script>location.href="'.home_url().'/failed"</script>';
    }    
}
?>
<!-- CONTAIN_START -->
<section id="contain">	
    <div class="breadcrumb_block_sdp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sdp">
                    <div class="breadcrumb_middle_sdp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">HOME</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Contact</a></li>
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="banner_block_bp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_bp">  
                    <div class="common_title_hp">                   	
                        <h2>Contact</h2>
                        <div>
                        <h3>お問い合わせ</h3>
                        </div>
                    </div>
                    <div class="banner_middle_bp">                        		
                        <div class="banner_img_bp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img5.png" alt="">
                        </div>            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="contact_block_cp">             
        <div class="container container_inner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_cp">      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="contact_middle_cp">                        		                        
                        <div class="contact_info_cp">
                            <p>お問い合わせご希望の方は下記フォームよりどうぞ。<br><span>※は入力必須項目です。</span></p>                               
                        </div>                         
                        <div class="contact_form_cp">                                                                
                            <div class="form_field_cp">
                                <div class="form_field_lable_cp">お名前<sup>※</sup></div>
                                <div class="form_field_input_cp"><input type="text" name="field1" placeholder=" " required></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form_field_cp">
                                <div class="form_field_lable_cp">フリガナ<sup>※</sup></div>
                                <div class="form_field_input_cp"><input type="text" name="field2" placeholder=" " required></div>
                                <div class="clearfix"></div>
                            </div> 
                            <div class="form_field_cp">
                                <div class="form_field_lable_cp">郵便番号</div>
                                <div class="form_field_input_cp"><input type="text" name="field3" placeholder=" "></div>
                                <div class="clearfix"></div>
                            </div>                                
                            <div class="form_field_cp">
                                <div class="form_field_lable_cp">住所</div>
                                <div class="form_field_input_cp"><input type="text" name="field4" placeholder=" "></div>
                                <div class="clearfix"></div>
                            </div> 
                            <div class="form_field_cp">
                                <div class="form_field_lable_cp">電話番号<sup>※</sup></div>
                                <div class="form_field_input_cp"><input type="text" name="field5" placeholder=" " required></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form_field_cp">
                                <div class="form_field_lable_cp">メールアドレス<sup>※</sup></div>
                                <div class="form_field_input_cp"><input type="email" name="field6" placeholder=" " required></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form_field_cp form_field_top_cp">
                                <div class="form_field_lable_cp">お問い合わせ内容<sup>※</sup></div>
                                <div class="form_field_input_cp"><textarea placeholder="" name="field7" required></textarea></div>
                                <div class="clearfix"></div>
                            </div>                                                                                                                                       
                        </div>                            
                        <div class="contact_btn_cp">
                            <input type="hidden" name="submit-confirm" value="submit-confirm">
                            <button class="common_btn_hp" type="submit">送信</button>
                        </div>                                                                                                                                             
                    </div>                       
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="company_block_hp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company_block_in_hp">                    	
                    <div class="company_middle_hp">                        		
                        <div class="company_boxes_cp">
                            <div class="company_box_np" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/Company_img.png) no-repeat center center; background-size:cover;"> 
                                <a href="<?php echo get_site_url(); ?>/company/">                           
                                    <div class="company_box_in_np">
                                        <h2>Company</h2>
                                        <h3>会社概要</h3>
                                    </div>
                                </a>    
                            </div>
                            <div class="company_box_np" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/Company_img2.png) no-repeat center center; background-size:cover;">                            
                                <a href="<?php echo get_site_url(); ?>/contact/">
                                    <div class="company_box_in_np">
                                        <h2>Contact</h2>
                                        <h3>お問い合わせ</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
