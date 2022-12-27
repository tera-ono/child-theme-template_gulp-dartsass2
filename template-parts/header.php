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


<header>
    <button type="button" class="p-drawer js-drawer" aria-controls="global-nav" aria-expanded="false" aria-label="グローバルナビゲーション">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/p-drawer_btn.svg' ); ?>" alt="メニュー" class="p-drawer__menuicon">
      <span></span>
      <span></span>
    </button> <!-- p-drawer -->
    <nav class="p-drawer-menu js-drawer-menu" id="global-nav">
      <div class="p-drawer-menu__wrap">
        <div class="p-drawer-menu__logo ">
          <img class="c-logo" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/common/c-logo.svg' ); ?>" alt="">
        </div><!-- logo -->
        <div class="p-drawer-menu__unit">
          <div class="p-drawer-menu__inner">
            <div class="p-drawer-menu__title">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/p-drawer__title.svg' ); ?>" alt="メニュー">
            </div><!-- title -->
            <ul class="p-drawer-menu__items js-drawer-menu-items">
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($news) ; ?>">NEWS</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($about) ; ?>">私たちの取り組み</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($products) ; ?>">商品紹介</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($service) ; ?>">サービス</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($boutique) ; ?>">店舗紹介</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($contact) ; ?>">お問合せ</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($company) ; ?>">会社概要</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($privacyPolicy) ; ?>">プライバシーポリシー</a>
              </li>
              <li class="p-drawer-menu__item">
                <a href="<?php echo esc_url($sdgs) ; ?>">SDGs</a>
              </li>
            </ul>
            <div class="p-drawer-menu__btn">
              <a class="c-btn c-btn--icon c-btn--large" href="#"> オンラインショップ </a>
            </div><!-- btn -->
          </div><!-- inner -->
        </div><!-- unit -->
      </div>
    </nav>
  </header>