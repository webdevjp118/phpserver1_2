<?php
get_header();
?>
<main>
  <section class="company_top">
    <h1 class="companyTop_title">
    会社概要<span>Company</span>
    </h1>
  </section>
  <section class="company">
    <h2 class="companyTitle">
      企業理念
    </h2>
    <div class="companyBox">
      <p class="companyText">
      関わる全ての繋ぎ手となる会社をつくります
    </p>
      <h3 class="companyBox_title">
      会社情報
    </h3>
      <dl>
        <dt>社名</dt>
        <dd>株式会社レベルスタッフ</dd>
        <dt>設立日</dt>
        <dd>平成31年 2月22日</dd>
        <dt>代表者名</dt>
        <dd>八伏 秀明</dd>
        <dt>資本金</dt>
        <dd>300万円</dd>
        <dt>住所</dt>
        <dd>〒101-0047 東京都千代田区内神田1丁目11-11</dd>
        <dt>TEL</dt>
        <dd>050-3625-1930</dd>
        <dt>FAX</dt>
        <dd>03-5366-8615</dd>
      </dl>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4220682340197!2d139.7640536154286!3d35.691229937030684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c042330471f%3A0x657934c7ffb2c78f!2z44CSMTAxLTAwNDcg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65YaF56We55Sw77yR5LiB55uu77yR77yR4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1667106228589!5m2!1sja!2sjp"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

  </section>
  <section class="contactSection">
    <h2 class="contactSection_title">
      サービスのお問い合せ・申し込みはこちらから
    </h2>
    <div class="btnBox">
      <a href="<?php echo get_site_url(); ?>/contact" class="btn -type1">お問合せ・申し込み</a>
      <a href="tel:050-3625-1930" class="btn -type2">
        <i class="fa-solid fa-phone fa-rotate-90"></i>
        <div class="tel">
          050-3625-1930
          <span>平日：10時〜18時</span>
        </div>
      </a>
    </div>
  </section>
</main>
<?php
get_footer();
