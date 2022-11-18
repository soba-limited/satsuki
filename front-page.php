<?php get_header(); ?>


<main class="index">
  <section class="index-mv">
    <div class="index-mv__image">
      <picture>
        <?php echo webp2('index', 'mv');?>
      </picture>
    </div>
    <div class="index-mv__title">
      <picture class="fadein">
        <?php echo svg2('index', 'mv-title');?>
      </picture>
    </div>
    <div class="index-mv__bottom">
      <figure class="index-mv__bottom--image fadein">
        <?php echo webp('index', 'mv-image');?>
      </figure>
    </div>
  </section>

  <section class="index-first">
    <div class="wrap">
      <h2 class="index-first__title slidein">
        <p class="dn-max-s">
          <span>今、全国の学校で選ばれています。</span>
        </p>
        <p class="dn-max-s">
          <span>徹底した現場目線で生まれた<i>電子黒板「ミライタッチ」</i>。</span>
        </p>
        <p class="dn-min-s">
          <span>今、全国の学校で選ばれています。</span>
        </p>
        <p class="dn-min-s">
          <span>徹底した現場目線で生まれた</span>
        </p>
        <p class="dn-min-s">
          <span><i>電子黒板「ミライタッチ」</i>。</span>
        </p>
      </h2>
      <article class="index-first__flex">
        <p class="index-first__flex--text slidein">
          全国の教育現場でミライタッチが評価される点は、操作性の良さ。健常者や障がい者、IT機器の操作が苦手な方など関係なく、誰でも簡単に、使いやすいと感じてもらえる電子黒板です。一度使っていただければ、その良さは分かっていただけます。ぜひ体験してください。
        </p>
        <figure class="index-first__flex--image slidein rag1">
          <?php echo webp('index', 'touch');?>
        </figure>
      </article>
    </div>
  </section>

  <section class="index-series">
    <div class="wrap">
      <article class="index-series__head">
        <h2 class="index-series__head--title slidein">
          ミライタッチは、<span>オールインワン</span>。<br>
          複雑な配線をしなくても、<br>
          1台で<span>全てが完結</span>します。
        </h2>
        <p class="index-series__head--text slidein rag1">
          電源をつなぐだけで、何でも書けるホワイトボード機能はもちろん、実物投影機、PC・サーバー・クラウドへの接続、マルチOS対応のソフトウェア、TV視聴などがこの1台で完結。複雑な配線や準備をする必要は一切ナシ。画面操作はアイコンで直感的に操作できるので、テンポ良く授業の進行ができます。
        </p>
      </article>
      <article class="index-series__flex">
        <div class="index-series__flex--single slidein">
          <figure class="index-series__flex--thumbs">
            <a href="<?php echo urls('information/x-series');?>">
              <?php echo webp('index', 'x-series');?>
            </a>
          </figure>
          <p class="index-series__flex--title">
            <a href="<?php echo urls('information/x-series');?>">Xシリーズ</a>
          </p>
          <p class="index-series__flex--text">
            業界初となる「実物投影機」を内蔵。<br>
            多機能を搭載した次世代型の電子黒板。
          </p>
        </div>
        <div class="index-series__flex--single slidein rag1">
          <figure class="index-series__flex--thumbs">
            <a href="<?php echo urls('information/c-series');?>">
              <?php echo webp('index', 'c-series');?>
            </a>
          </figure>
          <p class="index-series__flex--title">
            <a href="<?php echo urls('information/c-series');?>">Cシリーズ</a>
          </p>
          <p class="index-series__flex--text">
            2014年の発売から長年愛されてきた、<br>ミライタッチのスタンダードモデル。
          </p>
        </div>
        <div class="index-series__flex--single slidein rag2">
          <figure class="index-series__flex--thumbs">
            <a href="<?php echo urls('information/p-series');?>">
              <?php echo webp('index', 'p-series');?>
            </a>
          </figure>
          <p class="index-series__flex--title">
            <a href="<?php echo urls('information/p-series');?>">Pシリーズ</a>
          </p>
          <p class="index-series__flex--text">
            学校現場の要望によって誕生。<br>
            豊富な本体サイズで、欲しい機能を集約し搭載。
          </p>
        </div>
      </article>
    </div>
  </section>

  <section class="index-graf">
    <div class="wrap-mini">
      <article class="index-graf__flex">
        <div class="index-graf__flex--text-box slidein">
          <h2 class="index-graf__flex--title">
            全国各地の教育関係者が高評価！<br>
            トップクラスの導入数を誇ります。
          </h2>
          <p class="index-graf__flex--text">
            累計導入台数
          </p>
          <p class="index-graf__flex--counts">
            <span class="count" id="numCount">0</span>台以上
          </p>
        </div>
        <div class="index-graf__flex--canvas">
          <canvas id="chart01"></canvas>
        </div>
      </article>
    </div>
  </section>

  <section class="index-concept">
    <div class="wrap">
      <h2 class="index-concept__title slidein">
        <span class="jp">私たちが目指すこと</span>
        <span class="en">Concept</span>
      </h2>
      <article class="index-concept__head">
        <div class="index-concept__head--text-box slidein">
          <h3 class="index-concept__head--title">
            使う人誰もが<span>主役になれる、電子黒板。</span><br>
            夢を叶えて、<span>豊かな未来を創造</span>してほしい。
          </h3>
          <p class="index-concept__head--text">
            教育をもっと自由に、もっと楽しく、もっとアクティブに。私たちが目指すのは、あらゆる立場・状況にある人たちが個性を尊重し合い、学び合えること。インクルーシブな教育現場です。そのためには、電子黒板の機能性や操作性の向上はもちろん、使用する先生や子ども達の声や想いに寄り添い、反映することで、理想の電子黒板へと日々進化させていきます。皆の夢を叶えて、豊かな未来の創造のお手伝いをすることが、私たちの使命でもあります。
          </p>
        </div>
        <div class="index-concept__head--image slidein rag2">
          <figure>
            <?php echo webp('index', 'concept');?>
          </figure>
        </div>
      </article>
      <article class="index-concept__content">
        <h3 class="index-concept__content--title slidein">
          ミライタッチは、<br class="dn-min-s"><span>1931年創業の“社会貢献事業”会社</span><br class="dn-min-s">が開発しています。
        </h3>
        <p class="index-concept__content--text slidein">
          さつき株式会社は創業以来、社会貢献につながる価値ある事業を展開してきました。<br>
          長年培ってきた信頼と歴史を基盤とし、今後も社会に必要とされる使命を全うしていきます。
        </p>
        <div class="index-concept__content--flex">
          <figure class="index-concept__content--icon fadein rag1">
            <?php echo svg('index', 'birth');?>
          </figure>
          <figure class="index-concept__content--icon fadein rag2">
            <?php echo svg('index', 'send');?>
          </figure>
          <figure class="index-concept__content--icon fadein rag3">
            <?php echo svg('index', 'cased');?>
          </figure>
        </div>
      </article>
    </div>
  </section>

  <section class="index-case">
    <div class="wrap">
      <h2 class="index-case__title slidein">
        導入事例
        <span class="en">Cases</span>
      </h2>
      <article class="index-case__list slick-slider slidein" id="slider">
        <?php include(dirname(__FILE__).'/parts/index-case-loop.php');?>
      </article>
    </div>
  </section>

  <section class="index-features">
    <div class="wrap">
      <h2 class="index-features__title slidein">
        ミライタッチの特長
        <span class="en">Features</span>
      </h2>
      <article class="index-features__card fadein rag1">
        <div class="index-features__card--title">
          <p class="num">01</p>
          <h3 class="text">
            一人ひとりの個性を尊重する、<br class="dn-min-s"><span>インクルーシブ</span>な電子黒板。
          </h3>
        </div>
        <div class="index-features__card--flex">
          <div class="index-features__card--text-box">
            <p class="index-features__card--text">
              健常者や障がい者、IT機器の操作が苦手な方など関係なく、誰でも簡単に使える操作性と機能性が特長。それぞれの個性を尊重し、学び合う授業のために、ミライタッチは自由な表現ツールとして活躍します。
            </p>
            <ul class="index-features__card--list">
              <li>黒板と変わらない感覚の書き味と直感的な操作性</li>
              <li>全モデル高解像度4K対応で画像が鮮明</li>
              <li>一人ひとりの個性に対応したスタンド設計</li>
            </ul>
          </div>
          <figure class="index-features__card--image">
            <?php echo webp('index', 'feature-image1');?>
          </figure>
        </div>
      </article>
      <article class="index-features__card fadein rag1">
        <div class="index-features__card--title">
          <p class="num">02</p>
          <h3 class="text">使用者の声を反映し日々進化。<br class="dn-min-s"><span>バージョンアップする</span>電子黒板。</h3>
        </div>
        <div class="index-features__card--flex rev">
          <div class="index-features__card--text-box">
            <p class="index-features__card--text">
              製品自体にOSが入っており、定期的に機能や利便性などがバージョンアップ。使う人の声や利用シーン、日々変わる教育現場に合わせて、進化し続けます。時代の変化に柔軟に対応できる、高いフレキシブル性が特長です。
            </p>
            <ul class="index-features__card--list">
              <li>利用者の声を反映したバージョンアップ</li>
              <li>クラウド連携や授業支援ソフトなど様々なICT機器との連携</li>
              <li>アンチウイルスソフト搭載。<br>定期更新でセキュリティ対策万全</li>
            </ul>
          </div>
          <figure class="index-features__card--image">
            <?php echo webp('index', 'feature-image2');?>
          </figure>
        </div>
      </article>
      <article class="index-features__card fadein rag1">
        <div class="index-features__card--title">
          <p class="num">03</p>
          <h3 class="text">教室を拡張し、世界とつながる。<span>情報をシェアできる</span>電子黒板。</h3>
        </div>
        <div class="index-features__card--flex">
          <div class="index-features__card--text-box">
            <p class="index-features__card--text">
              ミライタッチがあれば、いつでもネットでつながり、学校、地域、国を超えたコミュニケーションを実現。個人の学びを他者とシェアし、意見交換し、さらに考えを深めていける教育が可能です。
            </p>
            <ul class="index-features__card--list">
              <li>ZOOM搭載だから、オンライン授業も容易に実現</li>
              <li>GIGAスクール構想で使用する端末との連携が可能</li>
              <li>電子黒板から直接クラウド・PC・サーバにアクセス</li>
            </ul>
          </div>
          <figure class="index-features__card--image">
            <?php echo webp('index', 'feature-image3');?>
          </figure>
        </div>
      </article>

      <p class="hover-btn index-features__more fadein">
        <a href="<?php echo urls('/information');?>">製品をみる</a>
      </p>
    </div>
  </section>

  <section class="index-problem">
    <div class="wrap">
      <h2 class="index-problem__title slidein">
        <span class="jp">こんなお悩みありませんか?</span>
        <span class="en">Problem</span>
      </h2>
      <article class="index-problem__card fadein">
        <div class="index-problem__card--single">
          <p class="index-problem__card--text">
            GIGAスクール端末を<br>もっと活用した授業をしたい。
          </p>
          <figure class="index-problem__card--image">
            <?php echo svg('index', 'problem1');?>
          </figure>
        </div>
        <div class="index-problem__card--single">
          <p class="index-problem__card--text">
            最新のICT機器は便利そうだけど、<br>使いこなせるか不安。
          </p>
          <figure class="index-problem__card--image">
            <?php echo svg('index', 'problem2');?>
          </figure>
        </div>
        <div class="index-problem__card--single">
          <p class="index-problem__card--text">
            子どもたちにも、より一層<br>主体的に授業へ望んでほしい。
          </p>
          <figure class="index-problem__card--image">
            <?php echo svg('index', 'problem3');?>
          </figure>
        </div>
      </article>
    </div>
    <div class="wrap-mini">
      <figure class="index-problem__delta fadein">
        <?php echo svg('index', 'delta');?>
      </figure>
      <div class="index-problem__sub-title slidein">
        <h3>教育現場でのお悩みは、<span>ミライタッチで解決</span>可能！</h3>
      </div>
      <p class="index-problem__text slidein">
        ミライタッチが常に考えているのは、すべての人にとって“いい電子黒板”になること。授業の中心となる黒板が使いにくい物であっては、意味がありません。ミライタッチはすべての人に喜んでもらえるように、日々進化を続けています。もし教育現場でのお困りごとがございましたら、お気軽にご相談ください。ミライタッチを活用した解決策をご提案します。
      </p>
    </div>
  </section>

  <section class="index-news">
    <div class="wrap-mini">
      <article class="index-news__head">
        <h2 class="index-news__head--title slidein">
          お知らせ
          <span class="en">News</span>
        </h2>
        <p class="hover-btn index-news__head--more dn-max-s fadein">
          <a href="<?php echo urls('news');?>">一覧をみる</a>
        </p>
      </article>
      <article class="index-news__list">
        <?php include(dirname(__FILE__).'/parts/index-news-loop.php');?>
      </article>
      <p class="index-news__more hover-btn dn-min-s fadein">
        <a href="<?php echo urls('news');?>">一覧をみる</a>
      </p>
    </div>
  </section>

  <section class="index-menu">
    <div class="wrap">
      <article class="index-menu__card">
        <h2 class="index-menu__title slidein">各種メニュー</h2>
        <div class="index-menu__flex">
          <div class="index-menu__single fadein">
            <a href="<?php echo urls('information');?>">
              <div class="index-menu__icon">
                <figure>
                  <?php echo svg('index', 'menu-icon1');?>
                </figure>
              </div>
              <p class="index-menu__text">
                製品情報
              </p>
            </a>
          </div>
          <div class="index-menu__single fadein">
            <a href="<?php echo urls('contact');?>">
              <div class="index-menu__icon">
                <figure>
                  <?php echo svg('index', 'menu-icon2');?>
                </figure>
              </div>
              <p class="index-menu__text">
                お問い合わせ
              </p>
            </a>
          </div>
          <div class="index-menu__single fadein">
            <a href="<?php echo urls('document');?>">
              <div class="index-menu__icon">
                <figure>
                  <?php echo svg('index', 'menu-icon3');?>
                </figure>
              </div>
              <p class="index-menu__text">
                資料ダウンロード
              </p>
            </a>
          </div>
          <div class="index-menu__single fadein">
            <a href="<?php echo urls('software-download');?>">
              <div class="index-menu__icon">
                <figure>
                  <?php echo svg('index', 'menu-icon4');?>
                </figure>
              </div>
              <p class="index-menu__text">
                ソフトウェア<br class="dn-min-s">ダウンロード
              </p>
            </a>
          </div>
        </div>
      </article>
    </div>
  </section>
</main>


<?php get_footer();
?>