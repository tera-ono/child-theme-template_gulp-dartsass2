<?php
$news     = get_page_link('71'); 
$about  = get_page_link('28');
$products    = get_page_link('30');
$madeleine = get_page_link('450');
$purefreshcake = get_page_link('481');
$custommade = get_page_link('34');
$service = get_page_link('32');
$boutique = get_page_link('747');
$contact = get_page_link('615');
$company = get_page_link('38');
$privacyPolicy = get_page_link('3');
$sdgs = get_page_link('36');
?>


<footer class="ojl-footer l-footer">
    <div class="ojl-footer__inner l-inner">
      <div class="ojl-footer__contents">
        <div class="ojl-footer__icon">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/p-drawer_btn.svg' ); ?>" alt="menu">
        </div><!-- /.icon -->
        <div class="ojl-footer__btn">
          <a class="ojl-footerbtn" href="#"> online shop </a>
        </div><!-- /.btn -->
        <div class="ojl-footer__fnav ojl-fnav" role="navigation" aria-label="フッターナビゲーション">
          <ul class="ojl-fnav__items">
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($news) ; ?>">NEWS</a>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($about) ; ?>">私たちの取り組み</a>
            </li>
            <li class="ojl-fnav__item c-dropdown">
              <a href="<?php echo esc_url($products) ; ?>">商品紹介 </a>
									<ul class="c-dropdown__lists">
              <li class="c-dropdown__list">
                <a href="#">マドレーヌ</a>
              </li>
              <li class="c-dropdown__list">
                <a href="#">純生冷凍ケーキ</a>
              </li>
              <li class="c-dropdown__list">
                <a href="#">オーダーメイドケーキ</a>
              </li>
            </ul>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($service) ; ?>">サービス</a>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($boutique) ; ?>">店舗紹介 </a>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($contact) ; ?>">お問合せ </a>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($company) ; ?>">会社概要</a>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($privacyPolicy) ; ?>">プラポリ</a>
            </li>
            <li class="ojl-fnav__item">
              <a href="<?php echo esc_url($sdgs) ; ?>">SDG</a>
            </li>
            <li class="ojl-fnav__item ojl-fnav__item--onlyPc">
              <a href="#">ONLINE SHOP</a>
            </li>
          </ul>
        </div><!-- ojl-fnav -->
      </div><!-- footer__contents  -->
      <div class="ojl-footer__copyright">
        <small> Copyright&copy;ランジェラ All Rights Reserved.</small>
      </div><!-- copyright -->
    </div> <!-- /inner -->
  </footer>