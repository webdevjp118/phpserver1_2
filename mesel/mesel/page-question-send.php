<?php
$field1_1 = isset($_POST['field1_1']) ? $_POST['field1_1']: '';
$field1_2 = isset($_POST['field1_2']) ? $_POST['field1_2']: '';
$field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
$field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
$field3 = isset($_POST['field3']) ? $_POST['field3']: '';
if(empty($field3)) {
    $field3 = "未回答";
}
$field4 = isset($_POST['field4']) ? $_POST['field4']: '';
$field5 = isset($_POST['field5']) ? $_POST['field5']: '';
$field6 = isset($_POST['field6']) ? $_POST['field6']: '';
$field7 = (is_array($_POST['field7'])) ? $_POST['field7'] : array();
$field8 = (is_array($_POST['field8'])) ? $_POST['field8'] : array();
$field9 = isset($_POST['field9']) ? $_POST['field9']: '';

// $admin_email      = 'prgfinal216@gmail.com';
$admin_email = 'info@mesel-jna.com';
$user_email = $field4;
$name1 = $field1_1;
$name2 = $field1_2;


$message = "
【お名前】".$field1_1."　".$field1_2."<br>
【フリガナ】".$field2_1."　".$field2_2."<br>
【性別】".$field3."<br>
【メールアドレス】".$field4."<br>
【電話番号】".$field5."<br>
【お住まいの地域】".$field6."<br>
【現在行っている、また過去に行った発毛対策】".implode('、', $field7)."<br>
【現在行っている、また過去に行った発毛対策への不満点】".implode('、', $field8)."<br>
【疑問点、ご要望】".$field9."<br>
";

//to administrator
$subject = '【毛髪再生】メセル発毛HCR法｜アンケート';

$message_start = "
【毛髪再生】メセル発毛HCR法｜アンケートフォームからメールが届きました<br>
<br>
-------------------------------------------------<br>
";

$message_end = "
-------------------------------------------------<br>
送信された日時：".date('Y/m/d (D) H:i:s')."<br>
送信者のIPアドレス：".get_client_ip()."<br>
送信者のホスト名：".gethostname()."<br>
問い合わせのページURL：".get_site_url()."/question/<br>
──────────────────────<br>
【毛髪再生】メセル発毛HCR法<br>
株式会社日本ナチュラルエイジングケア研究所<br>
無料カウンセリング予約専用電話番号：070-1436-0123<br>
メールアドレス：info@mesel-jna.com<br>
URL：".get_site_url()."<br>
──────────────────────<br>
";

$mail_content = $message_start.$message.$message_end;

$headers = "From: " . $user_email . "\r\n";
$headers .= "Reply-To: " . $user_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if(mail($admin_email, $subject, $mail_content, $headers)) {
    //success
} else {
    echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
}

//to user
$subject = '【毛髪再生】メセル発毛HCR法｜アンケートのご回答ありがとうございました';

$message_start = "
".$name1." ".$name2." 様<br>
<br>
この度は、【毛髪再生】メセル発毛HCR法のアンケートにご回答を頂きまして、誠にありがとうございました。<br>
価格表は以下のURLからご確認下さい。<br>
".get_field('price_pdf','option')."<br><br>
<br>
また、ご質問を頂いたお客様におかれましては、070-5468-2746(新宿院) / 070-6941-5379(名古屋駅前院)の番号より、追って連絡を差し上げますので、今しばらくお待ち下さい。<br>
<br>
お客様のアンケートへのご回答内容は以下になります。<br>
<br>
-------------------------------------------------<br>
";

$message_end = "
-------------------------------------------------<br>
<br>
送信日時：".date('Y/m/d (D) H:i:s')."<br>
<br>
──────────────────────<br>
【毛髪再生】メセル発毛HCR法<br>
株式会社日本ナチュラルエイジングケア研究所<br>
無料カウンセリング予約専用電話番号：070-1436-0123<br>
メールアドレス：info@mesel-jna.com<br>
URL：".get_site_url()."<br>
──────────────────────<br>
";

$mail_content = $message_start.$message.$message_end;

$headers = "From: " . $admin_email . "\r\n";
$headers .= "Reply-To: " . $admin_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if(mail($user_email, $subject, $mail_content, $headers)) {
    echo '<script>location.href="'.home_url().'/question-success"</script>';
} else {
    echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
}
?>