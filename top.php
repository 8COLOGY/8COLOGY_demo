<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/top.css">
    <title>えころじー | プラスチックごみ削減</title>
    <meta name="keywords" content="えころじー,8cology,ecology,プラスチックリサイクル,プラスチックごみ,廃プラスチック削減">
    <meta name="description" content="8COLOGYは、廃プラスチック削減を推進するサービスです。世の中のもったいないをなくしたい。ごみが少ない世界を作りたい。そんな思いから、8COLOGYは廃プラスチックの再生資源化を推進するためのサービスを提供しています。">

</head>

<body>
    <header id="header">
        <a href="#section_top">
            <img src="img/minilogo.png" alt="logo" />
        </a>
        <div class="menu">
            <nav>
                <ul id="g-navi">
                    <li class="navitext"><a href="#section_about">8COLOGYについて</a></li>
                    <li class="navitext"><a href="#section_infog">数字でみる8COLOGY</a></li>
                    <li class="navitext"><a href="#section_howto">リサイクルのやり方</a></li>
                    <li>
                        <div class="popup_wrap" v-cloak>
                            <input id="trigger" type="checkbox">
                            <div class="popup_overlay">
                                <label for="trigger" class="popup_trigger"></label>
                                <div class="popup_content">
                                    <label for="trigger" class="close_btn">×</label>
                                    <p>QRコードをスキャンするとLINEの友だちに追加されます<br>
                                        <img src="https://qr-official.line.me/sid/M/266kegaz.png"><br>
                                        QRコードをスキャンするには、LINEアプリのコードリーダーをご利用ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <label for="trigger" class="open_btn">ログイン</label>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- <div id=“footer” class=“container”>footer</div> -->
    </header>
    <!-- Topロゴ -->
    <!-- Topイメージ -->
    <section id="section_top">
        <div class="toplogo">
            <img src="img/biglogo.png" alt="toplogo">
        </div>
    </section>
    <div class="box mx-auto"></div>
    <!-- <img id="topimage" class="d-block mx-auto box" src="img/bigimg.png" alt="imagelogo"></div> -->
    <!-- <p><a class="link" href="https://1-notes.com/css/rotate-animation/" target="_blank" rel="noopener">https://1-notes.com/rotate-animation/</a></p> -->
    <label id="btn_center" for="trigger" class="open_btn_now">今すぐリサイクルを始める</label>
    <!-- 8COLOGYについて -->
    <div class="about">
        <section id="section_about">
            <h3 class=”text_title”><span style="color:forestgreen;">ABOUT</span></h3>
            <div class=”text_subtitle_about”>8COLOGYについて</div>
            <div class="text_title_details_about">
                <dl>
                    <dt>8COLOGYは、廃プラスチック削減を推進するサービスです。</dt>
                    <dd>世の中のもったいないをなくしたい。</dd>
                    <dd>ごみが少ない世界を作りたい。</dd>
                    <dd>大きな時代の変化の中で、廃プラスチックの再生資源化を推進していきたい。</dd>
                    <dd>そんな思いから、「8COLOGY」は歩みを始めています。</dd>
                    <dd>廃プラスチックの再生資源化はもちろんのこと、</dd>
                    <dd>エコ活動を推進するためのサービスを提供していきます。</dd>
                </dl>
            </div>
        </section>
    </div>
    <!-- 数字でみる8COLOGY -->
    <div class="infog">
        <section id="section_infog">
            <h3 class=”text_title”><span style="color:forestgreen;">INFOGRAPHICS</span></h3>
            <p>数字でみる8COLOGYの活動</p>
            <p>これまでに回収したプラスチック容器の重さは…</p>
            <h3><span style="color:forestgreen;" class="count">12345</span>kg</h3>
        </section>
    </div>
    <!--リサイクルのやり方  -->
    <div class="howto">
        <section id="section_howto">
            <h3 class="text_title"><span style="color:forestgreen;">HOW TO</span></h3>
            <div class="text_subtitle_howto howto_fonts">リサイクルのやり方</div>
            <div id="howto" class="d-flex justify-content-around">
                <div class=" flex-item1">
                    <p class="step howto_fonts" style="color:forestgreen;">STEP1</p><img src="img/wash.png" alt="news_img" width="400" height="400" class="rounded">
                    <div class="news_details">
                        <dl>
                            <dt class="howto_fonts">1.プラスチック容器をよく洗う</dt>
                        </dl>
                    </div>
                </div>
                <div class=" flex-item1">
                    <p class="step howto_fonts" style="color:forestgreen;">STEP2</p><img src="img/search_dustbox.png" alt="news_img" width="400" height="400" class="rounded">
                    <div class="news_details">
                        <dl>
                            <dt class="howto_fonts">2.近くのリサイクルBOXを探す</dt>
                        </dl>
                    </div>
                </div>
                <div class="flex-item2">
                    <p class="step howto_fonts" style="color:forestgreen;">STEP3</p><img src="img/dustbox.png" alt="news_img" width="460" height="400" class="rounded">
                    <div class="news_details">
                        <dl>
                            <dt class="howto_fonts">3.リサイクルBOXに使用済みプラスチック容器を入れる</dt>
                        </dl>
                    </div>
                </div>
                <div class="flex-item3">
                    <p class="step" style="color:forestgreen;">STEP4</p><img src="img/linepoint.png" alt="news_img" width="430" height="400" class="rounded">
                    <div class="news_details">
                        <dl>
                            <dt>4.LINEポイント獲得！</dt>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <ul class="navbar-nav list-inline">
                        <li><a href="#section_top">ホーム</a></li>
                        <li><a href="about.php">8COLOGYについて</a></li>
                        <li><a href="inquiry_input.php">お問い合わせ</a></li>
                        <li><a href="#">プライバシーポリシー</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3">
                    <address>
                        <dl>
                            <dt>8COLOGY</dt>
                            <dd>〒810-0041</dd>
                            <dd>福岡県福岡市中央区大名1-３−41プリオ大名ビル2F</dd>
                            <dd>Tel 092-123-4567 Fax 092-123-4567</dd>
                            <dd>福岡市営地下鉄天神駅 徒歩10分</dd>
                            <dd>火～日 AM 10:00 ～ PM 6:00 月曜定休</dd>
                        </dl>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright">
            Copyright &copy; 8COLOGY All rights reserved.
        </div>
    </footer>
    <!-- 数字のカウントアップjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.count').each(function() {
            $(this).prop('c', 0).animate({
                c: $(this).text()
            }, {
                duration: 3000,
                easing: 'linear',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <!--bootstrap用js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>