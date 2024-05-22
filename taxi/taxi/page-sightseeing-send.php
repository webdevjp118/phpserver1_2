<?php
get_header();
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field11 = isset($_POST['field11']) ? $_POST['field11']: '';
    $field12 = isset($_POST['field12']) ? $_POST['field12']: '';
    $field13 = isset($_POST['field13']) ? $_POST['field13']: '';
    $field14 = isset($_POST['field14']) ? $_POST['field14']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    $field10 = isset($_POST['field10']) ? $_POST['field10']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field11."　".$field12."（".$field13."　".$field14."）"."<br>
    電話番号 : ".$field2."<br>
    メールアドレス : ".$field3."<br>
    ご利用日時 : ".$field4."<br>
    ご利用人数 : ".$field5."<br>
    希望する車種  : ".$field6."<br>
    ご希望のコース : ".$field7."<br>
    出発地（名古屋市内の駅、ホテル、ご自宅など） : ".$field8."<br>
    到着地（名古屋市内の駅、ホテル、ご自宅、大須エリアなど） : ".$field9."<br>
    その他のお問合せ : ".$field10."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field3 . "\r\n";
    $headers .= "Reply-To: " . $field3 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }    
} else {
    echo '<script>location.href="'.home_url().'/sightseeing/"</script>';
}
?>


<?php
get_footer();
