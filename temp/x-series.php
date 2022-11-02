<section class="sv products-sv" id="products">
  <h1 class="sv__page-title">
    <span class="jp">Xシリーズ</span>
    <span class="en">X SERIES</span>
  </h1>
</section>

<section class="series-nav">
  <div class="wrap">
    <ul class="series-nav__list">
      <li class="series-nav__single"><a href="#products">商品トップ</a></li>
      <li class="series-nav__single bar"></li>
      <li class="series-nav__single"><a href="#special">特長</a></li>
      <li class="series-nav__single bar"></li>
      <li class="series-nav__single"><a href="#spec">製品スペック</a></li>
      <li class="series-nav__single bar"></li>
      <li class="series-nav__single"><a href="#option">オプション</a></li>
    </ul>
  </div>
</section>

<?php include(dirname(__FILE__).'/../parts/bread.php');?>

<section class="series-instructions">
  <div class="wrap">
    <figure class="series-instructions__btn">
      <a href="<?php echo get_template_directory_uri();?>/assets/pdf/x.pdf">
        <?php echo webp('x_series', 'instructions');?>
      </a>
    </figure>
  </div>
</section>

<section class="series-first">
  <div class="wrap">
    <h2 class="series-first__title">
      この1台で<span>授業が変わる</span>
    </h2>
    <p class="series-first__text">
      業界初となる「実物投影機」を内蔵した次世代型の電子黒板。従来モデルの使いやすさはそのままに、更なる進化を遂げた新シリーズです。
    </p>
    <article class="series-first__flex">
      <figure class="series-first__main">
        <?php echo webp('x_series', 'main');?>
      </figure>
      <figure class="series-first__sub">
        <?php echo webp('x_series', 'sub');?>
      </figure>
    </article>
    <figure class="series-first__icons">
      <picture>
        <?php echo webp2('x_series', 'icons');?>
      </picture>
    </figure>
  </div>
</section>

<section class="series-special" id="special">
  <div class="wrap">
    <h2 class="series-special__title">
      Xシリーズの特長
    </h2>
    <article class="series-special__contena">
      <h3 class="series-special__midashi">
        実物投影機
      </h3>
      <div class="series-special__icons">
        <div class="series-special__icons--single">
          <figure class="icons">
            <?php echo svg('x_series', 'icon1');?>
          </figure>
          <p class="text">
            高解像度1300万画素<br>
            SONY製センサ採用
          </p>
          <p class="caption">
            ※専用スタンドが書画台になります<br>（特許第6785022号）
          </p>
        </div>
        <div class="series-special__icons--single">
          <figure class="icons">
            <?php echo svg('x_series', 'icon2');?>
          </figure>
          <p class="text">
            A3サイズの<br>
            撮影が可能
          </p>
        </div>
        <div class="series-special__icons--single">
          <figure class="icons">
            <?php echo svg('x_series', 'icon3');?>
          </figure>
          <p class="text">
            QRリーダー搭載<br>
            教科書のバーコードを<br>
            読み取り可能
          </p>
        </div>
      </div>
    </article>

    <article class="series-special__contena">
      <h3 class="series-special__midashi">
        授業支援ソフト<span>Tiles</span>
      </h3>
      <p class="series-special__text">
        「Tiles」はユーザー登録やアプリインストール不要で授業に参加している生徒のタブレット画面を<br>
        電子黒板上に一覧で表示できる授業支援ソフトです。
      </p>
      <div class="series-special__tiles">
        <figure class="illust">
          <?php echo webp('x_series', 'illust');?>
          <figcaption>生徒全員のPC画面を電子黒板上へ一覧表示。生徒1人1人をきめ細かくフォローすることができます。</figcaption>
        </figure>
        <figure class="taiou">
          <?php echo webp('x_series', 'taiou');?>
        </figure>
      </div>
    </article>

    <article class="series-special__contena">
      <h3 class="series-special__midashi">
        ホワイトボード機能
      </h3>
      <p class="series-special__text">
        現行モデルの書き味、使いやすさはそのままに。更なるアップデートをとげたホワイトボード機能。
      </p>
      <div class="series-special__kinou">
        <figure class="series-special__kinou--single">
          <?php echo webp('x_series', 'white-board1');?>
        </figure>
        <figure class="series-special__kinou--single">
          <?php echo webp('x_series', 'white-board2');?>
        </figure>
        <figure class="series-special__kinou--single">
          <?php echo webp('x_series', 'white-board3');?>
        </figure>
        <figure class="series-special__kinou--single">
          <?php echo webp('x_series', 'white-board4');?>
        </figure>
      </div>
    </article>

    <article class="series-special__contena">
      <h3 class="series-special__midashi">
        レコーディング機能
      </h3>
      <p class="series-special__text">
        電子黒板の画面・音声をボタン1つで丸ごとレコーディングすることができます。
      </p>
      <div class="series-special__can">
        <figure class="series-special__can--image">
          <?php echo webp('x_series', 'recording');?>
        </figure>
        <div class="series-special__can--text-box">
          <p class="text">専用の機材や技術は不要で録画が可能。</p>
          <p class="border-text">
            活用方法
          </p>
          <ul>
            <li>● 授業の振り返り</li>
            <li>● オンライン授業で配信</li>
            <li>● 欠席した生徒へ配布</li>
          </ul>
        </div>
      </div>
      <div class="series-special__tsushin">
        <div class="single usb">
          <p class="title">Type-C</p>
          <p class="text">
            Type-Cケーブル1本で<br>
            「画像・音声」出力&タッチ制御が可能
          </p>
        </div>
        <div class="single secure">
          <p class="title">セキュリティ機能</p>
          <p class="text">
            専用のUSBを使い、<br>
            電子黒板のロック解除が可能
          </p>
        </div>
        <div class="single wifi">
          <p class="title">Wi-Fi6</p>
          <p class="text">
            高速通信が可能な<br>
            最新のWi-Fi規格に対応
          </p>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="series-shere">
  <div class="wrap">
    <h2 class="series-shere__title">
      ファイル管理ソフト<span class="en">Share</span>
    </h2>
    <picture class="series-shere__image">
      <?php echo webp2('x_series', 'share');?>
    </picture>
  </div>
</section>

<section class="series-mirror">
  <div class="wrap">
    <h2 class="series-mirror__title">
      ミラーリングソフト
    </h2>
    <p class="series-mirror__text">
      GIGAスクール端末に対応した、マルチOSミラーリングソフトです。<br>
      先生・生徒のタブレット画面を簡単に電子黒板上へ投影することができます。
    </p>
    <picture class="series-mirror__image">
      <?php echo webp2('x_series', 'mirror');?>
    </picture>
    <article class="series-mirror__flex">
      <div class="series-mirror__single">
        <p class="title">資料表示</p>
        <figure class="image">
          <?php echo svg('x_series', 'mirror-icon1');?>
        </figure>
        <p class="text">
          普段使っているOfficeが<br>
          そのまま使える
        </p>
      </div>
      <div class="series-mirror__single">
        <p class="title">オンライン対応</p>
        <figure class="image">
          <?php echo svg('x_series', 'mirror-icon2');?>
        </figure>
        <p class="text">
          会議ソフトZOOMを<br>
          アプリインストール
        </p>
      </div>
      <div class="series-mirror__single">
        <p class="title">ブラウザ</p>
        <figure class="image">
          <?php echo svg('x_series', 'mirror-icon3');?>
        </figure>
        <p class="text">
          電子黒板上で<br>
          インターネット閲覧が可能
        </p>
      </div>
      <div class="series-mirror__single">
        <p class="title">セキュリティソフト</p>
        <figure class="image">
          <?php echo svg('x_series', 'mirror-icon4');?>
        </figure>
        <p class="text">
          電子黒板専用の
          アンチウイルスソフトを搭載
          <span>※ライセンスの有効期限は5年間です</span>
        </p>
      </div>
    </article>
  </div>
</section>

<section class="series-spec" id="spec">
  <div class="wrap">
    <h2 class="series-spec__title">
      スペック
    </h2>
    <div class="series-spec__overview">
      <picture class="series-spec__list">
        <?php echo svg2('x_series', 'spec');?>
      </picture>
    </div>
  </div>
</section>

<?php include(dirname(__FILE__).'/../parts/options.php');
?>
