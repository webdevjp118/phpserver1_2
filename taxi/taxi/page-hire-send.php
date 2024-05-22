<?php
get_header();
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    お問い合わせの種別 : ".$field3."<br>
    ご利用の日時 : ".$field5."<br>
    ご乗車の人数、おおよその行程など : ".$field6."<br>
    お問い合わせ内容 : <br>".$field4."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    echo $message;
    // if(mail($to, $subject, $message, $headers)) {
    //   echo '<script>location.href="'.home_url().'/success"</script>';
    // } else {
    //   echo '<script>location.href="'.home_url().'/failed"</script>';
    // }    
} else {
    echo '<script>location.href="'.home_url().'/hire/"</script>';
}
?>


<?php
get_footer();
