<?php get_header(); ?>

<main class="life-page">
    <!-- タイトル -->
    <section class="section-life fade-in">
        <div class="life-page-inner">
            <h1 class="page-life-title">園の生活</h1>
        </div>
    </section>

    <!-- 1日の流れ -->
    <section class="daily-schedule fade-in">
        <div class="inner">
            <h2 class="section-title">1日の流れ</h2>

            <table class="schedule-table">
                <tr>
                    <th>時間</th>
                    <td>内容</td>
                </tr>
                <tr>
                    <th>7:15~9:30</th>
                    <td>登園時間<br>自由遊び</td>
                </tr>
                <tr>
                    <th>9:30~11:30</th>
                    <td>午前の保育活動</td>
                </tr>
                <tr>
                    <th>11:30~12:30</th>
                    <td>給食準備</br>給食</td>
                </tr>
                <tr>
                    <th>12:30~14:30</th>
                    <td>午睡</td>
                </tr>
                <tr>
                    <th>14:30~15:00</th>
                    <td>おやつ</td>
                </tr>
                <tr>
                    <th>15:00~16:00</th>
                    <td>降園準備</td>
                </tr>
                <tr>
                    <th>16:00~19:15</br>（土曜日は18:30まで）</th>
                    <td>順次降園</td>
                </tr>

            </table>
        </div>
    </section>

    <!-- イベント -->
     <section class="events fade-in">
        <div class="inner">
            <h2 class="section-title">イベント</h2>

          <div class="event-list">
                <div class="event-item">
                    <div class="event-image"><img src="<?php echo get_template_directory_uri(); ?>/docs/melodion.JPG" alt=""></div>
                    <h3>メロディオン</h3>
                    <p>音楽の先生が来園してみんなで演奏します</p>
                </div>

                <div class="event-item">
                    <div class="event-image"><img src="<?php echo get_template_directory_uri(); ?>/docs/pool-play.JPG" alt=""></div>
                    <h3>プール遊び</h3>
                    <p>顔つけ、バタ足、ビート板...年齢に合わせて行います</p>
                </div>

                <div class="event-item">
                    <div class="event-image"><img src="<?php echo get_template_directory_uri(); ?>/docs/child-cooking.JPG" alt=""></div>
                    <h3>チャイルドクッキング</h3>
                    <p>みんなでカレー、豚汁作ります。年長は先生のもと、包丁を使います</p>
                </div>

                <div class="event-item">
                    <div class="event-image"><img src="<?php echo get_template_directory_uri(); ?>/docs/birthday-dummy.webp" alt=""></div>
                    <h3>誕生日会</h3>
                    <p>誕生月の子をみんなでお祝いします</p>
                </div>

                <div class="event-item">
                    <div class="event-image"><img src="<?php echo get_template_directory_uri(); ?>/docs/evacuation-drill.jpg" alt=""></div>
                    <h3>避難訓練</h3>
                    <p>みんなで逃げます</p>
                </div>

                <div class="event-item">
                    <div class="event-image"><img src="<?php echo get_template_directory_uri(); ?>/docs/jump-rope-competition.webp" alt=""></div>
                    <h3>なわとび大会</h3>
                    <p>年中から目標の回数を決めて挑戦します</p>
                </div>
          </div>
        </div>
     </section>

     <!--年間行事 -->

     <section class="annual-events fade-in">
  <div class="inner">
    <h2 class="section-title">年間行事</h2>

    <div class="annual-grid">
      <div class="month-card">
        <h3 class="month-title">4月</h3>
        <ul class="month-event-list">
          <li>入園式</li>
          <li>進級式</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">5月</h3>
        <ul class="month-event-list">
          <li>親子遠足</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">6月</h3>
        <ul class="month-event-list">
          <li>さつまいも植え</li>
          <li>プール開き</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">7月</h3>
        <ul class="month-event-list">
          <li>保育参観</li>
          <li>保育園夏祭り</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">8月</h3>
        <ul class="month-event-list">
          <li>科学教室</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">9月</h3>
        <ul class="month-event-list">
          <li>運動会</li>
          <li>遠足</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">10月</h3>
        <ul class="month-event-list">
          <li>芋掘り</li>
          <li>展覧会</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">11月</h3>
        <ul class="month-event-list">
          <li>音楽指導</li>
          <li>チャイルド<br>クッキング</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">12月</h3>
        <ul class="month-event-list">
          <li>お遊戯会</li>
          <li>クリスマス会</li>
          <li>終業式</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">1月</h3>
        <ul class="month-event-list">
          <li>年初めの会</li>
          <li>餅つき大会</li>
          <li>なわとび大会</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">2月</h3>
        <ul class="month-event-list">
          <li>節分会</li>
          <li>科学教室</li>
        </ul>
      </div>

      <div class="month-card">
        <h3 class="month-title">3月</h3>
        <ul class="month-event-list">
          <li>保育参観</li>
          <li>終業式</li>
          <li>卒園式</li>
        </ul>
      </div>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>