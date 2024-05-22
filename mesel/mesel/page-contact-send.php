<?php
$field1 = isset($_POST['field1']) ? $_POST['field1']: '';
$field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
$field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
$field3_1 = isset($_POST['field3_1']) ? $_POST['field3_1']: '';
$field3_2 = isset($_POST['field3_2']) ? $_POST['field3_2']: '';
$field4_1 = isset($_POST['field4_1']) ? $_POST['field4_1']: '';
$field4_2 = isset($_POST['field4_2']) ? $_POST['field4_2']: '';
$field5_1 = isset($_POST['field5_1']) ? $_POST['field5_1']: '';
$field5_2 = isset($_POST['field5_2']) ? $_POST['field5_2']: '';
$field6_1 = isset($_POST['field6_1']) ? $_POST['field6_1']: '';
$field6_2 = isset($_POST['field6_2']) ? $_POST['field6_2']: '';
$field7 = isset($_POST['field7']) ? $_POST['field7']: '';
$field8 = isset($_POST['field8']) ? $_POST['field8']: '';
$field9 = isset($_POST['field9']) ? $_POST['field9']: '';

// $admin_email      = 'prgfinal216@gmail.com';
$admin_email = 'info@mesel-jna.com';
$user_email = $field7;
$name1 = $field5_1;
$name2 = $field5_2;

$message = "
【予約希望店舗】".$field1."<br>
【予約希望日】<br>
　第一希望 : ".$field2_1."　".$field2_2."<br>
　第一希望 : ".$field3_1."　".$field3_2."<br>
　第一希望 : ".$field4_1."　".$field4_2."<br>
【お名前】 : ".$field5_1."　".$field5_2."<br>
【フリガナ】".$field6_1."　".$field6_2."<br>
【メールアドレス】".$field7."<br>
【電話番号】".$field8."<br>
【備考】".$field9."<br>
";

//to administrator
$subject = '【毛髪再生】メセル発毛HCR法｜無料カウンセリングフォーム';

$message_start = "
【毛髪再生】メセル発毛HCR法｜無料カウンセリングフォームからメールが届きました<br>
<br>
-------------------------------------------------<br>
";

$message_end = "
-------------------------------------------------<br>
送信された日時：".date('Y/m/d (D) H:i:s')."<br>
送信者のIPアドレス：".get_client_ip()."<br>
送信者のホスト名：".gethostname()."<br>
問い合わせのページURL：".get_site_url()."/contact/<br>
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
$subject = '【毛髪再生】メセル発毛HCR法｜無料カウンセリングのご予約ありがとうございました';

$message_start = "
※このメールはシステムからの自動返信です。<br>
<br>
".$name1." ".$name2." 様<br>
<br>
この度は、【毛髪再生】メセル発毛HCR法の無料カウンセリングをご予約を頂きまして、誠にありがとうございます。<br>
ご希望の予約日時の空き状況を確認してご連絡差し上げますので、今しばらくお待ち下さい。<br>
<br>
ご予約の内容は以下になります。<br>
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
    echo '<script>location.href="'.home_url().'/contact-success"</script>';
} else {
    echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
}
?>