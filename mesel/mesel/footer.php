
<?php wp_footer(); ?>
<!-- FOOTER_START -->
<footer id="footer">
    <div class="page_top" id="gototop"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page_top.svg"></div>
    <div class="footer_block">
        <div class="footer_wrap">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="<?php echo get_site_url(); ?>/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.svg" alt=""/>
                    </a>
                </div>
                <div class="footer_menu">
                    <div class="footer_menu1"><a class="footer_menua" target="_blank" href="https://mesel-jna.com/company.html">会社概要</a></div>
                    <div class="footer_menu1"><a class="footer_menua" href="<?php echo get_site_url(); ?>/connect/">お問合せ</a></div>
                    <div class="footer_menu1"><a class="footer_menua" target="_blank" href="https://mesel-facial.com/">メセル美顔FCR法</a></div>
                    <div class="footer_menu1"><a class="footer_menua" target="_blank" href="http://mesel-shop.com/">メセルオンラインショップ</a></div>
                    <div class="footer_menu1">&nbsp;</div>
                    <div class="footer_menu1"><a class="footer_menua" href="<?php echo get_site_url(); ?>/privacy/">プライバシーポリシー</a></div>
                </div>
            </div>
            <div class="footer_hx1"></div>
            <div class="footer_bottom">
                <div class="footer_copyright">© meSEL</div>
            </div>
        </div>        
    </div>
</footer>
<!-- FOOTER_END -->
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ScrollMagic.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/TweenMax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src='https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js'></script>
<!-- 日付カレンダーIE対応 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/mCustomScrollbar.min.js"></script>
<script>
$( function() {
$( ".js_datepicker" ).datepicker( {
	dateFormat: 'yy年mm月dd日',
	monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
	minDate: new Date()
});
$( ".first_datepicker" ).datepicker( "setDate", new Date() );
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/additional-methods.min.js"></script>
<script>
$(document).ready(function () {
    $('#contact_form').validate({
        errorElement: "span",
        // debug: true,
        rules: {
            field1: { required: true },
            field2_1: { required: true },
            field2_2: { required: true },
            field5_1: { required: true },
            field5_2: { required: true },
            field6_1: { 
                pattern : "^[ぁ-んァ-ヶー]+$",
            },
            field6_2: { 
                pattern : "^[ぁ-んァ-ヶー]+$",
            },
            email: {
                required: true
            },
            電話番号: { required: true },
        },
        messages:{
            field1: {
                required: "この項目は必須です"
            },
            field2_1: {
                required: "この項目は必須です"
            },
            field2_2: {
                required: "この項目は必須です"
            },
            field5_1: {
                required: "この項目は必須です"
            },
            field5_2: {
                required: "この項目は必須です"
            },
            field6_1: {
                pattern: "「ひらがな」、「カタカナ」のみ記入してください"
            },
            field6_2: {
                pattern: "「ひらがな」、「カタカナ」のみ記入してください"
            },
            email: {
                required: "この項目は必須です",
                email: "メールアドレスが正しくありません"
            },
            電話番号: {
                required: "この項目は必須です"
            },
        },
        // submitHandler: function (form) {
        //     console.log("--->>submit");
        //     form.submit();
        // },
        // errorPlacement: function(error, element) 
        // {
        //     console.log("--->>error placement");
        //     var errorshowed = false;
        //     if ( element.is(":radio, :checkbox") ) 
        //     {
        //         error.appendTo( element.parents('.radio_checkbox_container') );
        //     }
        //     else if(error[0].innerText == '上から少なくとも1つのフィールドが必要です' && !errorshowed) {
        //         error.insertAfter('label[for="level_it_to_admin1"]');
        //         errorshowed = true;
        //     }
        //     else 
        //     {
        //         error.insertAfter( element );
        //     }
        // },
        // invalidHandler: function(form, validator) {
        //     console.log("--->>invalid handler");
        //     var errors = validator.numberOfInvalids();
        //     if (errors) {
        //         $("html, body").animate({ scrollTop: 0 }, "fast");
        //         $(".custom_error_message").fadeIn();
        //         $(".custom_error_message button.close").click(function(){
        //             $(this).parent(".custom_error_message").fadeOut();
        //         });
        //     }else {
        //         $(".custom_error_message").fadeOut();
        //     }
        // },
        // showErrors: function (errorMap, errorList) {
        //     if (typeof errorList[0] != "undefined") {
        //         var position = $(errorList[0].element).position().top - 100;
        //         $('html, body').animate({
        //             scrollTop: position
        //         }, 300);
                
        //     }
        //     this.defaultShowErrors();
        // }
    });
    $('#question_form').validate({
        errorElement: "span",
        // debug: true,
        rules: {
            field1_1: { required: true },
            field1_2: { required: true },
            field2_1: { 
                pattern : "^[ぁ-んァ-ヶー]+$",
            },
            field2_2: { 
                pattern : "^[ぁ-んァ-ヶー]+$",
            },
            email: {
                required: true
            },
            電話番号: { required: true },
            field6: { required: true },
            'field7[]': { required: true,},
            'field8[]': { required: true,},
            field9: { required: true },
        },
        messages:{
            field1_1: {
                required: "この項目は必須です"
            },
            field1_2: {
                required: "この項目は必須です"
            },
            field2_1: {
                pattern: "「ひらがな」、「カタカナ」のみ記入してください"
            },
            field2_2: {
                pattern: "「ひらがな」、「カタカナ」のみ記入してください"
            },
            email: {
                required: "この項目は必須です",
                email: "メールアドレスが正しくありません"
            },
            電話番号: {
                required: "この項目は必須です"
            },
            field6: {
                required: "この項目は必須です"
            },
            'field7[]': {
                required: "この項目は必須です",
            },
            'field8[]': {
                required: "この項目は必須です",
            },
            field9: {
                required: "この項目は必須です"
            },
        },
        // submitHandler: function (form) {
        //     console.log("--->>submit");
        //     form.submit();
        // },
        // errorPlacement: function(error, element) 
        // {
        //     console.log("--->>error placement");
        //     var errorshowed = false;
        //     if ( element.is(":radio, :checkbox") ) 
        //     {
        //         error.appendTo( element.parents('.radio_checkbox_container') );
        //     }
        //     else if(error[0].innerText == '上から少なくとも1つのフィールドが必要です' && !errorshowed) {
        //         error.insertAfter('label[for="level_it_to_admin1"]');
        //         errorshowed = true;
        //     }
        //     else 
        //     {
        //         error.insertAfter( element );
        //     }
        // },
        // invalidHandler: function(form, validator) {
        //     console.log("--->>invalid handler");
        //     var errors = validator.numberOfInvalids();
        //     if (errors) {
        //         $("html, body").animate({ scrollTop: 0 }, "fast");
        //         $(".custom_error_message").fadeIn();
        //         $(".custom_error_message button.close").click(function(){
        //             $(this).parent(".custom_error_message").fadeOut();
        //         });
        //     }else {
        //         $(".custom_error_message").fadeOut();
        //     }
        // },
        // showErrors: function (errorMap, errorList) {
        //     if (typeof errorList[0] != "undefined") {
        //         var position = $(errorList[0].element).position().top - 100;
        //         $('html, body').animate({
        //             scrollTop: position
        //         }, 300);
                
        //     }
        //     this.defaultShowErrors();
        // }
    });
});
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>
