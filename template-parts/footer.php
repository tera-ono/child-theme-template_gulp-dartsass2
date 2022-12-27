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


<footer class="p-footer l-footer">
    <div class="p-footer__inner l-inner">
      <div class="p-footer__contents">
        <div class="p-footer__icon">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/p-drawer_btn.svg' ); ?>" alt="menu">
        </div><!-- /.icon -->
        <div class="p-footer__btn">
          <a class="c-btn c-btn--whiteicon" href="#"> online shop </a>
        </div><!-- /.btn -->
        <div class="p-footer__fnav p-fnav" role="navigation" aria-label="フッターナビゲーション">
          <ul class="p-fnav__items">
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($news) ; ?>">NEWS</a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($about) ; ?>">私たちの取り組み</a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($products) ; ?>">商品紹介 </a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($service) ; ?>">サービス</a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($boutique) ; ?>">店舗紹介 </a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($contact) ; ?>">お問合せ </a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($company) ; ?>">会社概要</a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($privacyPolicy) ; ?>">プラポリ</a>
            </li>
            <li class="p-fnav__item">
              <a href="<?php echo esc_url($sdgs) ; ?>">SDG</a>
            </li>
            <li class="p-fnav__item p-fnav__item--onlyPc">
              <a href="#">ONLINE SHOP</a>
            </li>
          </ul>
        </div><!-- p-fnav -->
      </div><!-- footer__contents  -->
      <div class="p-footer__copyright">
        <small> Copyright&copy;ランジェラ All Rights Reserved.</small>
      </div><!-- copyright -->
    </div> <!-- /inner -->
  </footer>