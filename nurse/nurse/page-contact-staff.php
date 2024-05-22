<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {
var_dump($_POST);
    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';

    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    募集：勤務先 : ".$field3."<br>
    保有資格 : ".implode(", " , $field4)."<br>
    ";

    $subject = 'お問い合わせ';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
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
    <div class="nursing_block_np">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nursing_block_in_np">                    	
                    <div class="nursing_middle_np"> 
                        <div class="nursing_link_np">
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/care/">介護事業</a></li>
                                    <li><a class="" href="<?php echo get_site_url(); ?>/nursinghome/">有料老人ホーム事業</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/disabled/">障がい児通所支援</a></li>
                                    <li><a class="active" href="<?php echo get_site_url(); ?>/news/">お知らせ</a></li>                            </ul>                                
                        </div>				     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div> 
    <div class="breadcrumb_block_sp">             
        <div class="container container_inner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sp">
                    <div class="breadcrumb_middle_sp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">トップ </a></li>
                            <li class="breadcrumb-item"><a href="#"><span>介護スタッフ 採用 お問い合せ</span></a></li>
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  
    <div class="child_block_cp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 child_block_in_cp">                    	
                    <div class="child_middle_cp">
                        <div class="common_page_title_ncp">
                            <div class="common_page_title_in_ncp">
                                <h2>介護スタッフ 採用 お問い合せ</h2>
                            </div>
                            <div class="child_btn_cp">
                                <a href="#">メンテナンス事業のお問い合わせはコチラ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/child_icon_feather.svg" alt=""/></a>
                            </div>
                        </div>                         					     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>		        
        
    <div class="recruitment_block_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 recruitment_block_in_cp">                    	
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="recruitment_middle_cp change_pd_cp"> 
                        <div class="recruitment_title_cp">
                            【求人】訪問介護・住宅型有料老人ホーム
                        </div>
                        <div class="contact-form-cop">                                
                            <div class="form-field-cop" >
                                <div class="form-field-lable-cop recruitment_title_width_cp"><span>※</span>のある項目は必須項目です。</div>                                         
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">お名前<span>※</span></div>                     
                                    <div class="form-field-input-cop recruitment_width_cp"><input type="text" placeholder="" name="field1" required></div>                                        
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">メールアドレス<span>※</span></div> 
                                    <div class="form-field-input-cop recruitment_width_cp"><input type="email" placeholder="anyone@example.com" name="field2" required></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">募集：勤務先</div> 
                                    <div class="form-field-input-cop recruitment_width_cp"><input type="text" name="field3" required></div>
                                <div class="clearfix"></div>
                            </div>                                 
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">保有資格</div>
                                <div class="form-field-input-cop">                                    
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">初任者研修修了者（ヘルパー2級）
                                                <input type="checkbox"  name="field4[]" value="初任者研修修了者（ヘルパー2級）">                                                 
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">実務者研修終了者（ヘルパー1級）
                                                <input type="checkbox"  name="field4[]" value="実務者研修終了者（ヘルパー1級）"> 
                                                <span class="checkmark-cp"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">介護福祉士
                                                <input type="checkbox"  name="field4[]" value="介護福祉士">    
                                                <span class="checkmark-cp"></span>                                             
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">看護師・准看護師
                                                <input type="checkbox"  name="field4[]" value="看護師・准看護師">   
                                                <span class="checkmark-cp"></span>                                              
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">音楽療法士・言語訓練士
                                                <input type="checkbox"  name="field4[]" value="音楽療法士・言語訓練士">  
                                                <span class="checkmark-cp"></span>                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">居宅介護支援員
                                                <input type="checkbox"  name="field4[]" value="居宅介護支援員"> 
                                                <span class="checkmark-cp"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">理学療法士
                                                <input type="checkbox"  name="field4[]" value="理学療法士">  
                                                <span class="checkmark-cp"></span>                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">作業療法士
                                                <input type="checkbox"  name="field4[]" value="作業療法士"> 
                                                <span class="checkmark-cp"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-radio-cp form-field-radio-main-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">無資格
                                                <input type="checkbox"  name="field4[]" value="無資格">                                                 
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>                                                                                                                                                        
                        </div>                                						     
                    </div>         
                    <div class="recruitment_btn_cp">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button tyep="submit">送信</button>
                    </div>                                      
                    <div class="clearfix"></div>
                </form>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
            
    
    
    
    
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
