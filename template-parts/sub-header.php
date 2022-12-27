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


<header class="ojl-header js-header" id="ojl-header">
    <div class="ojl-header__inner">
      <div class="ojl-header__logos">
        <div class="ojl-header__logo1">
          <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/common/c-logo.svg'); ?>" alt="ランジェラのロゴ"></a>
        </div>
        <div class="ojl-header__logo2">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/common/c-logo2.svg'); ?>" alt="ランジェラのロゴ">
        </div>
      </div><!-- logos -->
      <div class="ojl-header__unit">
        <nav class="ojl-header__pc-nav ojl-pc-nav">
          <ul class="ojl-pc-nav__items">
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($news) ; ?>">NEWS</a>
            </li>
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($about) ; ?>">私たちの取り組み</a>
            </li>
            <li class="ojl-pc-nav__item c-dropdown">
              <a href="<?php echo esc_url($products) ; ?>">商品紹介</a>
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
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($service) ; ?>">サービス</a>
            </li>
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($boutique) ; ?>">店舗紹介</a>
				
            </li>
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($contact) ; ?>">お問合せ</a>
            </li>
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($company) ; ?>">会社概要</a>
            </li>
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($privacyPolicy) ; ?>">プライバシーポリシー</a>
            </li>
            <li class="ojl-pc-nav__item">
              <a href="<?php echo esc_url($sdgs) ; ?>">SDGs</a>
            </li>
          </ul>
        </nav>
        <div class="ojl-header__onlineBtn">
          <a href="#"> オンライン<br> ショップ </a>
        </div><!-- onlineBtn -->
      </div><!-- unit -->
      <button type="button" class="ojl-drawer ojl-js-drawer" aria-controls="global-nav" aria-expanded="false" aria-label="グローバルナビゲーション">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/drawer_btn_gold.svg'); ?>" alt="メニュー">
        <span></span>
        <span></span>
      </button> <!-- ojl-drawer -->
    </div><!-- ojl-header__inner -->
  </header>
  <nav class="ojl-drawer-menu ojl-js-drawer-menu" id="global-nav">
    <div class="ojl-drawer-menu__wrap">
      <div class="ojl-drawer-menu__unit">
        <div class="ojl-drawer-menu__inner">
          <div class="ojl-drawer-menu__title">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-drawer__title.svg'); ?>" alt="メニュー">
          </div><!-- title -->
          <ul class="ojl-drawer-menu__items ojl-js-drawer-menu-items">
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($news) ; ?>">NEWS</a>
            </li>
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($about) ; ?>">私たちの取り組み</a>
            </li>
            <li class="ojl-drawer-menu__item c-dropdown">
              <a href="<?php echo esc_url($products) ; ?>">商品紹介</a>
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
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($service) ; ?>">サービス</a>
            </li>
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($company) ; ?>">店舗紹介</a>
            </li>
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($contact) ; ?>">お問合せ</a>
            </li>
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($company) ; ?>">会社概要</a>
            </li>
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($privacyPolicy) ; ?>">プライバシーポリシー</a>
            </li>
            <li class="ojl-drawer-menu__item">
              <a href="<?php echo esc_url($sdgs) ; ?>">SDGs</a>
            </li>
          </ul>
          <div class="ojl-drawer-menu__btn">
            <a class="ojl-drawer-menu__btnlink" href="#">オンラインショップ</a>
          </div><!-- btn -->
        </div><!-- inner -->
      </div><!-- unit -->
    </div>
  </nav>