<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/thanks.css">
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
    </header>
    <div class="thanks">
        <img src="img/thanks.png" alt="thanks" width="300" height="70" />
        <p style="color:forestgreen;">お問い合わせありがとうございました。</p>
        <p style="color:forestgreen;">追ってご連絡させていただきますので、回答までしばらくお待ちください。</p>
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
                            <dd>〒810-0041 福岡県福岡市中央区大名１丁目３−41</dd>
                            <dd>プリオ大名ビル2F</dd>
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