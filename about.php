<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/top.css">
    <title>えころじー | 8COLOGYについて</title>
</head>

<body>
    <header id="header">
        <a href="top.php">
            <img src="img/minilogo.png" alt="logo" />
        </a>
        <div class="menu">
            <nav>
                <ul id="g-navi">
                    <li class="navitext"><a href="top.php">8COLOGYについて</a></li>
                    <li class="navitext"><a href="top.php">数字でみる8COLOGY</a></li>
                    <li class="navitext"><a href="top.php">リサイクルのやり方</a></li>
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
        <!-- テストハンバーガーメニュー _メニューがはみ出るので要検討-->
        <!-- <div id=“header” class=“container”>
            <a href="#">
                <img src="img/minilogo.png" alt="logo" />
            </a>
        </div>
        <nav class=“navbar navbar-default container”>
            <div class=“navbar-header”>
                <a class=“navbar-brand” href=“”>Menu</a>
            </div>
            <ul class=“nav navbar-nav”>
                <li class=“active”><a href=“”>Link1</a></li>
                <li><a href=“”>Link2</a></li>
                <li><a href=“”>Link3</a></li>
            </ul>
        </nav>
        <div class=“container”>
            <p><a href="#area-1">8COLOGYについて</a></p>
            <p><a href="#area-2">数字でみる8COLOGY</a></p>
            <p><a href="#area-3">リサイクルのやり方</a></p>
            <p> -->
        <!-- LINE_QRコード -->
        <!-- <div class="popup_wrap">
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
            </p> -->
        <!-- <p>5行目</p>
            <p>6行目</p>
            <p>7行目</p>
            <p>8行目</p>
            <p>9行目</p>
            <p>10行目</p>
            <p>11行目</p>
            <p>12行目</p>
            <p>13行目</p>
            <p>14行目</p>
            <p>15行目</p>
            <p>16行目</p>
            <p>17行目</p>
            <p>18行目</p>
            <p>19行目</p>
            <p>20行目</p> 
            <p>END</p>
        </div>
        <div id=“footer” class=“container”>footer</div>-->
    </header>
    <!-- Topロゴ -->
    <!-- Topイメージ -->
    <section id="section_top">
        <div class="toplogo">
            <img src="img/biglogo.png" alt="toplogo">
        </div>
    </section>
    <!-- <img class="d-block mx-auto" src="img/topimage.png" alt="imagelogo"> -->
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
    <!--活動報告  -->
    <div class="howto">
        <section id="section_howto">
            <h3 class=”text_title”><span style="color:forestgreen;">TOPIC</span></h3>
            <!-- <div class=”text_subtitle_howto”>リサイクルのやり方</div> -->
            <section id="section_news">
                <div class="flex_container_news">
                    <div class="flex-item1"><img src="img/petcap.jpeg" alt="news_img" width="300" height="200" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt>2021.7.31</dt>
                                <dd>ペットボトルキャップの回収を開始。</dd>
                                <dd>集めたペットボトルキャップは、</dd>
                                <dd>回収業者に買い取られ、その買取金額の</dd>
                                <dd>一部がワクチンの寄付になります。</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="flex-item2"><img src="img/momochi.jpeg" alt="news_img" width="300" height="200" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt>2021.08.01</dt>
                                <dd>ももち浜の清掃活動を行いました。</dd>
                                <dd>深刻化する海洋ゴミ問題を受けて、</dd>
                                <dd>毎月1回、清掃活動を行います。</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="flex-item3"><img src="img/fence.jpeg" alt="news_img" width="300" height="200" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt>2022.01.01</dt>
                                <dd>福岡市の協力により、回収した</dd>
                                <dd>廃プラスチックから道路脇のフェンス</dd>
                                <dd>を作りました。</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="flex-item4"><img src="img/toys.jpeg" alt="news_img" width="300" height="200" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt>2022.03.01</dt>
                                <dd>幼稚園の新たな遊び道具の選択肢として</dd>
                                <dd>リサイクルプラスチックを使用した</dd>
                                <dd>砂遊び道具を開発しました。</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </section>
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
                            <dd>〒810-0041 福岡県福岡市中央区大名１丁目３−41プリオ大名ビル2F</dd>
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
</body>

</html>