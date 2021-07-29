<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歯科テンプレート3/NEWS/single</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="main-wrapper" class="animsition">
    <header id="header" class="p-header">
      <div class="logo">
        <a class="animsition-link" href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="">
        </a>
      </div>
      <!-- /.logo -->
      <div class="l-menu-sp-button"><i></i><i></i><i></i></div>
      <!-- /.l-menu-sp-button -->
      <div class="pc-menu">
        <nav class="pc-nav">
          <ul class="pc-nav__list">
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>">初めての方へ</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-menu -->
      <div class="l-action-sp">
        <ul class="l-action-sp__buttons">
          <li class="l-action-sp__button-access">
            <a href="https://goo.gl/maps/zHQuAuFJBFJgpG6fA"><i>アクセス</i></a>
          </li>
          <li class="l-action-sp__button-tel">
            <a href="tel:092-686-7954"><i>ご予約のお電話</i></a>
          </li>
        </ul>
      </div>
      <!-- /.l-action-sp__buttons -->
    </header>
    <!-- /.p-header -->
    <section class="c-news-sl">
      <div class="c-container">
        <ul class="c-news-sl__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date"><?php echo get_the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p><?php the_content(); ?></p>
              </div>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" class="animsition" href="<?php echo esc_url( home_url('/news')); ?>"><span
              class="readmore">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <footer class="p-footer">
      <div class="p-footer__label">
        <h2 class="p-footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" />
        </h2>
        <p class="p-footer__subject">
          一般歯科 / 歯科口腔外科 / 矯正歯科 / 小児歯科
        </p>
        <address>
          <p class="c-txt-sm">
            〒812-0011<br>福岡県福岡市博多区博多駅前3-27-25-9F
          </p>
          <p class="c-txt-sm">
            <span>Google Map</span>
          </p>
        </address>
      </div>
      <div class="p-open-time">
        <div class="p-open-time__wrap">
          <p class="p-open-time__date">
            <span id="log" class="u-display-date"></span>
          </p>
          <table class="p-open-time__table">
            <tbody>
              <tr>
                <th><span class="u-hidden-sp">診療時間</span></th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日祝</th>
              </tr>
              <tr>
                <td>午前<span class="u-hidden-sp"> 9：00〜12：30</span></td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                    alt="休診日" class="close" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                    alt="休診日" class="close" />
                </td>
              </tr>
              <tr>
                <td>午後<span class="u-hidden-sp"> 14：00〜18：00</span></td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                    alt="休診日" class="close" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_circle.svg"
                    alt="診療日" class="open" />
                </td>
                <td>
                  <img src="https://www.dc-tsurumi.com/wp/wp-content/themes/tsurumi/assets/images/calendar_none.svg"
                    alt="休診日" class="close" />
                </td>
              </tr>
            </tbody>
          </table>
          <p class="p-open-time__hours u-hidden-pc">
            午前：9：00〜12：30 ／ 午後：14：00〜18：00
          </p>
        </div>
      </div>
      <!-- /.p-open-time -->
      <nav class="p-footer__nav">
        <ul>
          <li><a href="/first/first.html" class="animsition-link m-button-arrow-l">初めての方へ</a></li>
          <li><a href="/treatment/treatment.html" class="animsition-link m-button-arrow-l">診療について</a></li>
          <li><a href="/staff/staff.html" class="animsition-link m-button-arrow-l">スタッフ紹介</a></li>
          <li><a href="/faq/faq.html" class="animsition-link m-button-arrow-l">よくあるご質問</a></li>
          <li><a href="/news/news.html" class="animsition-link m-button-arrow-l">お知らせ</a></li>
          <li><a href="/recruit/recruit.html" class="animsition-link m-button-arrow-l">採用情報</a></li>
        </ul>
      </nav>
      <div class="p-footer__copyright">
        © RIV ROUND DENTAL CLINIC ALL RIGHTS RESERVED.
      </div>
    </footer>
    <!-- /.p-footer -->
    <div class="l-menu-sp">
      <div class="l-menu-sp__inner">
        <nav class="l-menu-sp__nav">
          <ul>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/first')); ?>">初めての方へ</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a></li>
            <li><a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
          </ul>
          <div class="reserve-btn-wrap">
            <div class="reserve-btn-tel">
              <h4>電話予約はこちら</h4>
              <div class="reserve-btn">
                <a href="tel:092-686-7954"><span>092-686-7954</span></a>
              </div>
            </div>
            <div class="reserve-btn-net">
              <h4>ネット予約はこちら</h4>
              <div class="reserve-btn">
                <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- /.l-menu-sp -->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>      
</body>

</html>