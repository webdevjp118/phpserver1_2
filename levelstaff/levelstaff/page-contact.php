<?php
get_header();
?>
<?php

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    企業名 : ".$field1."<br>
    ご担当者名 : ".$field2."<br>
    E-MAIL : ".$field3."<br>
    電話番号 : ".$field4."<br>
    業種 : ".$field5."<br>
    備考 : <br>".$field6."<br>
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
<main>
  <section class="contact_top">
    <h1 class="contactTop_title">
    お問い合わせ<span>Contact</span>
    </h1>
  </section>
  <section class="formBox">
    <div class="formWrapper">
      <h2 class="formTitle">
        株式会社レベルスタッフのWebサイトをご覧いただきありがとうございます。
      </h2>
      <p class="formText">
        下記、お問い合わせフォームより必要事項をご入力のうえ送信してください。
      </p>
      <p class="formText">
        お問い合わせは、弊社営業時間内に順次対応させていただきますがお問い合わせの内容によりましては、<br class="pc">
        お返事までにお時間を頂戴する場合もございますので、あらかじめご了承ください。<br>
        お問い合わせをいただくにあたって、弊社のプライバシーポリシーについてをご確認ください。
      </p>
      <div class="contactBox">
        <p class="contactText">
            お電話でも承ります。お気軽にご連絡ください。<br>
            平日10〜18時、お問い合わせフォームは24時間受付中
          </p>
        <a href="tel:050-3625-1930" class="btn -type2 -blue">
          <i class="fa-solid fa-phone fa-rotate-90"></i>
          <div class="tel">
            050-3625-1930
            <span>平日：10時〜18時</span>
          </div>
        </a>
        <a href="#" class="btn -type3 -blue">資料請求はこちらから <i class="fa-solid fa-angle-right"></i></a>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form">
          <div class="flex">
            <div class="form_left">
              <dl>
                <dt>企業名*</dt>
                <dd>
                  <input type="text" id="company_name" name="field1" value="" required>
                </dd>
                <dt>ご担当者名*</dt>
                <dd>
                  <input type="text" id="name" name="field2" value="" required>
                </dd>
                <dt>E-MAIL*</dt>
                <dd>
                  <input id="email1" type="email" name="field3" value="" required>
                </dd>
                <dt>E-MAIL確認（上記と同じものを入力お願いします）*</dt>
                <dd>
                  <input id="email2" type="email" name="field31" value="" required>
                </dd>
                <dt>電話番号*</dt>
                <dd>
                  <input id="phone" type="tel" name="field4" value="" required>
                </dd>
              </dl>
            </div>
            <div class="form_right">
              <dl>
                <dt>業種*</dt>
                <dd>
                  <input type="text" id="occ" name="field5" value="" required>
                </dd>
                <dt>備考</dt>
                <dd>
                  <textarea name="field6" required></textarea>
                </dd>
              </dl>
            </div>
          </div>
          <p class="require">
            *は必須項目です
          </p>
          <div class="privacyPolicy">
            <input type="checkbox" id="agree" required>
            <label for="agree"><a href="<?php echo get_site_url(); ?>/privacypolicy">プライバシーポリシー</a>に同意して送信する*</label>
          </div>
          <div class="formBtn">
            <input type="hidden" name="submit-confirm" value="submit-confirm">
            <button id="submit-btn" class="btn -type4" type="submit">
              確認画面へ<i class="fa-solid fa-angle-right"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
<?php
get_footer();
