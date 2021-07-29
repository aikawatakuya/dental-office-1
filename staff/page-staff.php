<?php
 /* Template Name: staff
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>スタッフ紹介 | 歯科テンプレート1</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="staff-wrapper animsition">
    <header id="header" class="p-header">
      <div class="logo">
        <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
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
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/first')); ?>">初めての方へ</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>">診療について</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
            </li>
            <li class="pc-nav__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a>
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
    <div class="staff-contents">
      <div id="c-topview" class="c-topview">
        <div class="c-topview__inner">
          <div class="c-topview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/reception@pc.jpg" alt="">
          </div>
          <h2 class="st-topview__title clip-js1 left">
            スタッフ紹介
          </h2>
        </div>
      </div>
      <div class="l-content" id="content">
        <div class="c-container">
          <div class="st-message">
            <div class="st-message__inner appear up">
              <h2 class="c-head01 item">
                <p>専門性を活かしたチーム医療</p>
              </h2>
              <div class="st-message__text item">
                <p class="c-txt-sm">RivRound歯科クリニックでは、スタッフがそれぞれの専門性を活かすことで、最適な医療をご提供いたします。</p>
              </div>
            </div>
          </div>
          <!-- /st-message -->
          <div class="st-staff">
            <div class="st-staff__inner appear up">
              <div class="heading-group item">
                <h2 class="heading-en">DOCTOR</h2>
                <h3 class="heading-normal">歯科医師</h3>
              </div>
              <div class="st-staff__block item">
                <figure class="doctor__photo staff__photo"><img src="<?php echo get_template_directory_uri(); ?>/images/home/staff__1@sp.jpg"></figure>
                <div class="st-staff__profile">
                  <div class="st-staff__name">
                    <h3>院長</h3>
                    <h4>利部 翔太</h4>
                  </div>
                  <div class="st-staff__item">
                    <h5>出身</h5>
                    <p>福岡県福岡市</p>
                  </div>
                  <div class="st-staff__item">
                    <h5>担当</h5>
                    <p>一般歯科治療全般</p>
                  </div>
                  <div class="st-staff__item">
                    <h5>経歴</h5>
                    <ul>
                      <li>東京医科歯科大学歯学部歯学科卒業</li>
                      <li>東京医科歯科大学歯学部付属病院インプラント科</li>
                      <li>医療法人ADCアップルデンタルセンター勤務</li>
                    </ul>
                  </div>
                  <div class="st-staff__item">
                    <h5>所属学会</h5>
                    <ul>
                      <li>日本インプラント学会（専門医取得：1112号）</li>
                      <li>日本こども学会</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="heading-group item">
                <h2 class="heading-en">STAFF</h2>
                <h3 class="heading-normal">スタッフ</h3>
              </div>
              <div class="st-staff__block item">
                <figure class="doctor__photo staff__photo"><img src="<?php echo get_template_directory_uri(); ?>/images/home/staff__2@sp.jpg"></figure>
                <div class="st-staff__profile">
                  <div class="st-staff__name">
                    <h3>歯科衛生士</h3>
                    <h4>利部 美紀</h4>
                  </div>
                  <div class="st-staff__item">
                    <h5>出身</h5>
                    <p>福岡県北九州市</p>
                  </div>
                  <div class="st-staff__item">
                    <h5>経歴</h5>
                    <p>北九州歯科衛生士専門学校</p>
                  </div>
                  <div class="st-staff__item">
                    <h5>資格</h5>
                    <p>歯周病認定歯科衛生士（日本歯周病学会）</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="btn-category appear up">
            <ul class="item">
              <li><a href=" <?php echo esc_url( home_url('/first')); ?>"><span class="btn-category__first"></span><i>初めての方へ</i></a></li>
              <li><a href=" <?php echo esc_url( home_url('/treatment')); ?>"><span class="btn-category__care"></span><i>診療について</i></a></li>
              <li><a href=" <?php echo esc_url( home_url('/staff')); ?>"><span class="btn-category__staff"></span><i>スタッフ紹介</i></a></li>
              <li class="u-hidden-pc"><a href=" <?php echo esc_url( home_url('/faq')); ?>"><span class="btn-category__faq"></span><i>よくあるご質問</i></a>
              </li>
            </ul>
          </nav>
          <nav class="btn-topicpath">
            <ul>
              <li><a href=" <?php echo esc_url( home_url('/')); ?>">TOP</a></li>
              <li>スタッフ紹介</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- ./staff-contents -->
    <footer class="p-footer">
      <div class="p-footer__label">
        <h2 class="p-footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" />
        </h2>
        <p class="p-footer__subject">
          一般歯科 / 歯科口腔外科 / 矯正歯科 / 小児歯科
        </p>
      </div>
      <div class="p-footer__wrap">
        <address>
          <p class="c-txt-sm">
            〒812-0011<br>福岡県福岡市博多区博多駅前3-27-25-9F
          </p>
          <p class="c-txt-sm">
            <span>Google Map</span>
          </p>
        </address>
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
      </div>
      <!-- /.p-open-time -->
      <nav class="p-footer__nav">
        <ul>
          <li><a href=" <?php echo esc_url( home_url('/first')); ?>" class="animsition-link m-button-arrow-l">初めての方へ</a></li>
          <li><a href=" <?php echo esc_url( home_url('/treatment')); ?>" class="animsition-link m-button-arrow-l">診療について</a></li>
          <li><a href=" <?php echo esc_url( home_url('/staff')); ?>" class="animsition-link m-button-arrow-l">スタッフ紹介</a></li>
          <li><a href=" <?php echo esc_url( home_url('/faq')); ?>" class="animsition-link m-button-arrow-l">よくあるご質問</a></li>
          <li><a href=" <?php echo esc_url( home_url('/news')); ?>" class="animsition-link m-button-arrow-l">お知らせ</a></li>
          <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="animsition-link m-button-arrow-l">採用情報</a></li>
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
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/first')); ?>">初めての方へ</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/staff')); ?>">スタッフ紹介</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
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
  <!-- /.staff-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <?php get_template_part('includes/c-footer');
      ?>      
</body>

</html>