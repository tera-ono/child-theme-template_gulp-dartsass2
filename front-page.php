<?php

/**
 * Front-page
 *
 *  @package WordPress
 *  @subpackage codeups
 */

?>
<?php
$value     = home_url('index.php/about'); //「私たちの取り組みについて」ボタン
$produuct  = home_url('index.php/products');
$about    = home_url('index.php/boutique');
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header'); ?>

<p class="p-test">こんにち</p>

<main class="p-sidebg">
	<section class="l-topMv">
		<div class="p-topMv">
			<picture class="p-topMv__img">
				<source media="(min-width: 768px" srcset="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-topMv_bg_pc@2x.jpg'); ?>" />
				<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/p-topMv_bg@2x.jpg'); ?>" alt="サンタクロースのケーキが6個ある写真">
			</picture>
			<div class="p-topMv__logo">
				<img class="c-logo" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/common/c-logo.svg'); ?>" alt="ランジェラのロゴ">
			</div><!-- logo -->
		</div>
	</section><!-- mv -->
	<!-- <div class="p-sidebg"> -->
	<section class="l-topMessage">
		<div class="p-topMessage z-5">
			<div class="p-topMessage__inner l-inner">
				<div class="p-topMessage__sectionHeader">
					<div class="c-title-wrapper">
						<div class="c-title c-title--rose">
							<div class="c-title__inner">
								<div class="c-title__text">
									<?php
									$set_title =  SCF::get('sectiton1_ttl');
									$set_subttl = SCF::get('sectiton1_subttl');
									if ($set_title !== "" && $set_subttl !== "") { ?>
										<h2 class="c-title__main">
											<?php echo esc_html($set_title); ?>
										</h2>
										<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
									<?php } ?>
								</div><!-- text -->
							</div><!-- inner -->
						</div><!-- title -->
					</div>
				</div><!-- sectionHeader -->
				<div class="p-topMessage__contents">
					<div class="p-topMessage__text">
						<p class="c-largeText"> -ランジェラのお菓⼦を⼿にした<br class="for-sp-new-line"> すべての⼈を幸せに- </p>
					</div><!-- text" -->
					<div class="p-topMessage__images">
						<div class="p-images">
							<div class="c-images">
								<?php
								$set_img_left =  SCF::get('sectiton1_img_left');
								$set_img_mdl = SCF::get('sectiton1_img_middle');
								$set_img_right = SCF::get('sectiton1_img_right');

								if ($set_img_left === "") { ?>
									<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
								<?php } else { ?>
									<figure class="c-images__topImg">
										<img src="<?php echo wp_get_attachment_url($set_img_left); ?>">
									</figure><!-- /topImg-->
								<?php } ?>
								<div class="c-images__wrapper">
									<?php if ($set_img_mdl === "") { ?>
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
									<?php } else { ?>
										<figure class="c-imges__leftImg">
											<img src="<?php echo wp_get_attachment_url($set_img_mdl); ?>">
										</figure>
									<?php } ?>
									<?php if ($set_img_right === "") { ?>
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
									<?php } else { ?>
										<figure class="c-images__topImg">
											<img src="<?php echo wp_get_attachment_url($set_img_right); ?>">
										</figure><!-- /topImg-->
									<?php } ?>
								</div><!-- imgWrapper -->
							</div><!-- images -->
						</div><!-- /.p-images -->
					</div><!-- images -->
					<div class="p-topMessage__text">
						<p class="c-largeText"> ⾒て⾷べて受け取って。<br> すべてのシーンで想いが伝わるよう、こだわりを持って作っています。 </p>
					</div>
					<div class="p-topMessage__movie">
						<video src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/video/message-movie.mp4'); ?>" autoplay muted></video>
					</div>
				</div><!-- contents -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
	</section><!-- topMessage-->
	<section class="l-topValue">
		<div class="p-topValue z-5">
			<div class="p-topValue__inner l-inner">
				<div class="p-topValue__sectionHeader">
					<div class="c-title-wrapper c-title-wrapper--white">
						<div class="c-title c-title">
							<div class="c-title__inner">
								<div class="c-title__text">
									<?php
									$set_title =  SCF::get('sectiton2_ttl');
									$set_subttl = SCF::get('sectiton2_subttl');
									if ($set_title !== "" && $set_subttl !== "") { ?>
										<h2 class="c-title__main">
											<?php echo esc_html($set_title); ?>
										</h2>
										<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
									<?php } ?>
								</div><!-- text -->
							</div><!-- inner -->
						</div><!-- title -->
					</div>
				</div><!-- sectionHeader -->
				<div class="p-topValue__contents">
					<div class="p-topValue__text">
						<p class="c-largeText"> -贈る⼈も受け取る⼈も、<br class="for-sp-new-line"> 皆満⾜するために- </p>
					</div><!-- text -->
					<div class="p-topValue__media">
						<div class="c-media">
							<?php
							$set_sec2_img = SCF::get('set_sec2_img');
							if ($set_sec2_img === "") { ?>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
							<?php } else { ?>
								<figure class="c-media__img">
									<img src="<?php echo wp_get_attachment_url($set_sec2_img); ?>" alt="">
								</figure>
							<?php } ?>

							<div class="c-media__body">
								<P class="c-media__text"> ランジェラはスイーツ界のお花屋さんになるために、３つの⼤切な約束をお客様としています。<br> それは「美しいこと」「美味しいこと」「安全であること」どれか１つでも⽋けたら、全ての⼈を幸せにすることはできません。 </P>
								<div class="c-media_btn">
									<!-- <a class="c-lineBtn" href="<?php echo esc_html($value); ?>">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/c-lineBtn_about.png'); ?>" alt="私たちの取り組みについて">
									</a> -->
									<a class="c-lineBtn" href="<?php echo get_page_link('28'); ?>">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/c-lineBtn_about.png'); ?>" alt="私たちの取り組みについて">
									</a>
								</div><!-- btn -->
							</div><!-- description -->
						</div><!-- /.c-media -->
					</div><!-- /.media -->
				</div><!-- contents -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
	</section><!-- topValue-->
	<section class="l-topProduct">
		<div class="p-topProduct z-5">
			<div class="p-topProduct__inner l-inner">
				<div class="p-topProduct__sectionHeader">
					<div class="c-title-wrapper">
						<div class="c-title">
							<div class="c-title__inner">
								<div class="c-title__text">
									<?php
									$set_title =  SCF::get('sectiton3_ttl');
									$set_subttl = SCF::get('sectiton3_subttl');
									if ($set_title !== "" && $set_subttl !== "") { ?>
										<h2 class="c-title__main">
											<?php echo esc_html($set_title); ?>
										</h2>
										<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
									<?php } ?>
								</div><!-- text -->
							</div><!-- inner -->
						</div><!-- title -->
					</div>
				</div><!-- sectionHeader -->
				<div class="p-topProduct__contents">
					<div class="p-topProduct__text">
						<p class="c-largeText"> -パティシエの⼿から<br class="for-sp-new-line"> ⽣まれるお菓⼦たち- </p>
					</div><!-- /.text -->
					<div class="p-topProduct__images">
						<div class="c-images">
							<?php
							$set_img_left =  SCF::get('sectiton3_img_left');
							$set_img_mdl = SCF::get('sectiton3_img_middle');
							$set_img_right = SCF::get('sectiton3_img_right');

							if ($set_img_left === "") { ?>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
							<?php } else { ?>
								<figure class="c-images__topImg">
									<img src="<?php echo wp_get_attachment_url($set_img_left); ?>">
								</figure><!-- /topImg-->
							<?php } ?>
							<div class="c-images__wrapper">
								<?php if ($set_img_mdl === "") { ?>
									<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
								<?php } else { ?>
									<figure class="c-imges__leftImg">
										<img src="<?php echo wp_get_attachment_url($set_img_mdl); ?>">
									</figure>
								<?php } ?>
								<?php if ($set_img_right === "") { ?>
									<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
								<?php } else { ?>
									<figure class="c-images__topImg">
										<img src="<?php echo wp_get_attachment_url($set_img_right); ?>">
									</figure><!-- /topImg-->
								<?php } ?>
							</div><!-- imgWrapper -->
						</div><!-- images -->
					</div><!-- images -->
					<p class="p-topProduct__description"> ランジェラの原点、バラのマドレーヌ 【ベルレーヌ】。<br class="for-sp-new-line"> ベルレーヌをさらに美しく昇華させるオリジナルギフト。<br> 遠⽅のお客様からのご要望から⽣まれた【純⽣冷凍ケーキ】。<br> そして、店頭でしか受け取れないオーダーメイドケーキなど、こだわりの商品をご紹介いたします。 </p>
					<div class="p-topProduct__btn">
						<a class="c-btn c-btn--rose" href="<?php echo get_page_link('30'); ?>">
							<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets//images/c-btn_product.jpg'); ?>" alt="商品紹介">
						</a>
					</div><!-- btn -->
				</div><!-- contents -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
	</section><!-- topProduct-->
	<section class="l-topGift">
		<div class="p-topGift z-5">
			<div class="p-topGift__inner l-inner">
				<div class="p-topGift__sectionHeader">
					<div class="c-title-wrapper c-title-wrapper--white">
						<div class="c-title c-title">
							<div class="c-title__inner">
								<div class="c-title__text">
									<?php
									$set_title =  SCF::get('sectiton4_ttl');
									$set_subttl = SCF::get('sectiton4_subttl');
									if ($set_title !== "" && $set_subttl !== "") { ?>
										<h2 class="c-title__main">
											<?php echo esc_html($set_title); ?>
										</h2>
										<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
									<?php } ?>
								</div><!-- text -->
							</div><!-- inner -->
						</div><!-- title -->
					</div>
				</div><!-- sectionHeader -->
				<div class="p-topGift__contents">
					<div class="p-topGift__text">
						<p class="c-largeText"> -全国どこでも<br class="for-sp-new-line"> 安⼼してお届けします- </p>
					</div><!-- text" -->
					<div class="p-topGift__media">
						<div class="c-media">
							<?php
							$set_sec_img = SCF::get('set_sec4_img');
							if ($set_sec_img === "") { ?>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
							<?php } else { ?>
								<figure class="c-media__img">
									<img src="<?php echo wp_get_attachment_url($set_sec_img); ?>" alt="">
								</figure>
							<?php } ?>
							<div class="c-media__body">
								<P class="c-media__text"> ランジェラは全国どこでもお気持ちを届けることが出来るように、たくさんの⼯夫を凝らしています。<br> 大切な方にも安⼼して贈ることができるように、ギフトの詳細を詳しくまとめました。ぜひご覧ください。 </P>
								<div class="c-media_btn">
									<a class="c-lineBtn" href="#">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets//images/c-lineBtn_gift.png'); ?>" alt="ギフトについて">
									</a>
								</div><!-- btn -->
							</div><!-- description -->
						</div><!-- /.c-media -->
					</div><!-- /.media -->
				</div><!-- contents -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
	</section><!-- topGift-->
	<section class="l-topAbout">
		<div class="p-topAbout z-5">
			<div class="p-topAbout__inner l-inner">
				<div class="p-topAbout__sectionHeader">
					<div class="c-title-wrapper">
						<div class="c-title">
							<div class="c-title__inner">
								<div class="c-title__text">
									<?php
									$set_title =  SCF::get('sectiton5_ttl');
									$set_subttl = SCF::get('sectiton5_subttl');
									if ($set_title !== "" && $set_subttl !== "") { ?>
										<h2 class="c-title__main">
											<?php echo esc_html($set_title); ?>
										</h2>
										<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
									<?php } ?>
								</div><!-- text -->
							</div><!-- inner -->
						</div><!-- title -->
					</div>
				</div><!-- sectionHeader -->
				<div class="p-topAbout__contents">
					<div class="p-topMessage__text">
						<p class="c-largeText"> -富⼠市から全国に幸せを届けます -</p>
					</div><!-- text" -->
					<div class="p-topMessage__media">
						<div class="c-media">
							<?php
							$set_sec_img = SCF::get('set_sec5_img');
							if ($set_sec_img === "") { ?>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/images/common/no-image_gray.jpeg'); ?>" alt="画像がないときの代替え画像">
							<?php } else { ?>
								<figure class="c-media__img">
									<img src="<?php echo wp_get_attachment_url($set_sec_img); ?>" alt="">
								</figure>
							<?php } ?>
							<div class="c-media__body">
								<P class="c-media__text"> 平成25年の創業以来、たくさんのスイーツを⽣み出している⼯房がここにあります。富⼠市から全国へ、たくさんのギフトをお届けしている⼯房について、皆様にご紹介したいと思っています。 </P>
								<div class="c-media_btn">
									<a class="c-lineBtn" href="<?php echo get_page_link('34'); ?>">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/c-lineBtn_shop.png'); ?>" alt="お店について">
									</a>
								</div><!-- btn -->
							</div><!-- description -->
						</div><!-- /.c-media -->
					</div><!-- /.media -->
				</div><!-- contents -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
	</section><!-- about -->
	<section class="l-contact">
		<div class="p-contact">
			<div class="p-contact">
				<div class="p-contact__inner l-inner">
					<div class="p-contact__sectionHeader">
						<div class="c-title-wrapper">
							<div class="c-title">
								<div class="c-title__inner">
									<div class="c-title__text">
										<?php
										$set_title =  SCF::get('sectiton6_ttl');
										$set_subttl = SCF::get('sectiton6_subttl');
										if ($set_title !== "" && $set_subttl !== "") { ?>
											<h2 class="c-title__main">
												<?php echo esc_html($set_title); ?>
											</h2>
											<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
										<?php } ?>
									</div><!-- text -->
								</div><!-- inner -->
							</div><!-- title -->
						</div>
					</div><!-- sectionHeader -->
					<div class="p-contact__contents">
						<div class="p-contact__cards">
							<div class="p-cards">
								<div class="p-cards__card">
									<div class="c-card">
										<span class="c-card__corner c-card__corner--top"></span>
										<p class="c-card__title" data-sub="オンラインショップ">online shop</p>
										<p class="c-card__text">全国にお届けします。</p>
										<div class="c-card__btn">
											<a class="c-btn c-btn--icon" href="https://langela.shop-pro.jp/" target="_blank" rel="noopener noreferrer"> online shop </a>
										</div><!-- /.btn -->
										<span class="c-card__corner c-card__corner--bottom"></span>
									</div><!-- c-card -->
								</div><!-- /.card -->
								<div class="p-cards__card">
									<div class="c-card">
										<span class="c-card__corner c-card__corner--top"></span>
										<p class="c-card__title c-card__title--two-row" data-sub="お問い合わせ">0545-60-7708</p>
										<div class="c-card__btn">
											<a class="c-btn" href="#"> お問合せフォーム </a>
										</div><!-- /.btn -->
										<span class="c-card__corner c-card__corner--bottom"></span>
									</div><!-- c-card -->
								</div><!-- /.card -->
							</div><!-- /.cards -->
						</div><!-- cards -->
					</div><!-- /.card -->
				</div><!-- contents -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
		</div>
	</section><!-- contact -->
	<section class="l-topNews">
		<div class="p-topNews z-5">
			<div class="p-topNews__inner l-inner">
				<div class="p-topNews__unit">
					<div class="p-topNews__sectionHeader">
						<div class="c-title-wrapper c-title-wrapper--white">
							<div class="c-title c-title">
								<div class="c-title__inner">
									<div class="c-title__text">
										<?php
										$set_title =  SCF::get('sectiton7_ttl');
										$set_subttl = SCF::get('sectiton7_subttl');
										if ($set_title !== "" && $set_subttl !== "") { ?>
											<h2 class="c-title__main">
												<?php echo esc_html($set_title); ?>
											</h2>
											<p class="c-title__sub"><?php echo esc_html($set_subttl); ?></p>
										<?php } ?>
									</div><!-- text -->
								</div><!-- inner -->
							</div><!-- title -->
						</div>
					</div><!-- sectionHeader -->
					<div class="p-topNews__contents">
						<div class="p-topNews__newnLists">
							<ul class="p-newsLists">
								<?php
								$args      = array(
									'post_type'      => 'post',
									'posts_per_page' => 3, // 表示件数.
								);
								$the_query = new WP_Query($args);
								if ($the_query->have_posts()) :
									while ($the_query->have_posts()) :
										$the_query->the_post();
								?>
										<?php get_template_part('template-parts/newsList'); ?>
									<?php
									endwhile;
								else :
									?>
									<p>まだ記事がありません</p>
								<?php endif; ?>
								<?php wp_reset_postdata(); ?>
							</ul>
						</div><!-- lists -->
					</div><!-- contents -->
				</div><!-- unit -->
			</div><!-- .inner -->
		</div><!-- topAbout -->
	</section><!-- news -->
	<!-- </div> -->
</main>


<?php get_template_part('template-parts/footer'); ?>

<?php get_footer(); ?>