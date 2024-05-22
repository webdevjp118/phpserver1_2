<?php
get_header();
?>
  <main>
    <section class="service">
      <h1 class="serviceTitle">
        事業内容<span>Service</span>
      </h1>
    </section>
    <section class="parttime">
      <h2 class="parttimeTitle">
        スキマバイト事業
      </h2>
      <div class="parttimeBox">
        <p class="parttime_text">
          スキマバイト事業とは、お客様の急な人材不足を解決するために業務を請負、ワーカーを提供するサービスです。<br>
          <span class="bold">1日3時間〜</span>ご利用していただけるため非常に使いやすくなっております。
        </p>
        <div class="flex">
          <span>１日３時間からご利用可能</span>
          <span>何名でも手配可能</span>
          <span>建築に特化！</span>
        </div>
        <p class="parttime_text02">
          他社では難しいと断られた案件も現場にベストな提案が可能<br>
          200万人の登録ワーカーの中からお探しするため他社にはない圧倒的な提供力があります<br>
          そのため求人の予算と手間が省けます
        </p>
      </div>
    </section>
    <section class="figure">
      <figure class="serviceFigure">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service_02.png" alt="">
      </figure>
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
