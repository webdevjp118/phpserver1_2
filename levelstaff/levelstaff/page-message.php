<?php
get_header();
?>
<main>
  <section class="message_top">
    <h1 class="messageTop_title">
    メッセージ<span>Message</span>
    </h1>
  </section>
  <section class="message">
    <h2 class="messageTitle">
  社長メッセージ
</h2>
    <div class="messageBox">
      <p class="message_text">我が国において建築業界は日々忙しく、人手が足りないのが状況です。</p>
      <p class="message_text bold">その状況は打破しようとしても、中々突破できないのも現状です。</p>
      <p class="message_text bold">しかし我々レベルスタッフはその建築業界に特化した会社です。</p>
      <p class="message_text bold">業界に慣れたワーカーを育成し続けており、人手不足の企業と働きたいワーカーをつなぎ社会に貢献しています。</p>
      <p class="message_text">困ったら、“レベルスタッフに連絡しよう”と一番に頭に浮かんでくれるような</p>
      <p class="message_text">誰よりも頼れる存在でありたいと考えています。</p>
      <p class="message_text">お客様の声と、ワーカー様の声に寄り添い、徹底的なサポートに努めます。</p>
    </div>
    <figure class="messageFigure">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/message_03.png" alt="">
    </figure>
    <p class="name">代表　八伏　秀明</p>
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
