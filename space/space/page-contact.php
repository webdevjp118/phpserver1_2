<?php
get_header();
?>

<section id="contain">
    <div class="banner_block_ep" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_9.png) no-repeat top center; background-size:cover;">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_ep">                     	
                    <div class="banner_middle_ep">
                        <div class="banner_text_ep">
                            <p>お問い合わせ</p>
                            <h2>CONTACT</h2>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="mail_block_ep">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mail_block_in_ep">                     	                    	
                    <div class="mail_middle_ep">
                        <div class="mail_title_ep">
                            <h4>株式会社スペースワンにご関心をお持ちいただき、ありがとうございます。</h4>
                            <p>
                                ご意見・ご相談、料金のお見積など、お気軽にお問合わせ下さい。<br />
                                折り返し、担当者よりご連絡させていただきます。
                            </p>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    
    <div class="contact_block_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_cp">                     	                    	
                    <div class="contact_middle_cp">
                        <div class="contact_img_cp">
                            <a href="mailto:ad@spacexone.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_form_img1.png" alt=""/></a>
                        </div>
                        <div class="contact_info_cp">
                            以下のフォームからもお問合せいただけます。
                        </div>
                        <div class="contact_top_cp">
                            <div class="contact-form-cop contact_change_cp">                                
                                <?php echo do_shortcode('[contact-form-7 id="43" title="コンタクトフォーム 1"]'); ?>
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

<?php
get_footer();
