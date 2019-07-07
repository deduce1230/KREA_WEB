<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>送信フォーム[クレアヴァイオリン教室]</title>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="バイオリン教室,ヴァイオリン教室,東京,品川区,高輪台,港区,白金台,五反田,つくば,茨城県,個人レッスン">
<meta name="description" content="東京都品川区（高輪台駅近く）と茨城県つくば市にあるバイオリン教室（つくば教室は水曜日のみ）">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="style_X.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.scrollshow.js"></script>
<script type="text/javascript" src="js/jquery.rollover.js"></script>


<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body>
<header>
	<h1><a href="index.html">クレアヴァイオリン教室</a></h1>
	<div class="contact"><a href="toiawase.html">お問い合わせ</a></div>
	<p class="summary">
	東京都品川区（高輪台駅近く）と茨城県つくば市にあるバイオリン教室（つくば教室は水曜日のみ）
	</p>
</header>

<nav>
	<h3>ご案内</h3>
	<ul>
		<li><a href="index.html">HOME</a></li>
		<li><a href="course.html">コース案内</a></li>
		<li><a href="concert.html">発表会</a></li>
		<li><a href="profile.html">プロフィール</a></li>
		<li><a href="access.html">アクセス</a></li>
		<li><a href="toiawase.html">お問い合わせ</a></li>
	</ul>
</nav>


<?
require_once("constant/mail_config.inc");

// フォームの値を取得します。
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    foreach($_POST as $k => $v){
        // 「magic_quotes_gpc = On」のときはエスケープ解除
        if (get_magic_quotes_gpc()) {
            $v = stripslashes($v);
        }
        $v = htmlspecialchars($v);
        $$k = $v;
    }
}
else {
    exit();
}

// メール本文
$MailMessage = 
	"お名前：$name\n連絡先：$tel\nメールアドレス：$email\n内容：$textarea\n\n\n\n\n";  


$subject1 = "WEBサイトよりお問い合わせを受け付けました";
sendmail($from1, $from1, $subject1, $MailMessage);

$subject1 = "WEBサイトよりお問い合わせを受け付けました";
$MailMessage .= "お問い合せありがとうございました。２・３日中にご連絡いたします。\n\n";
$MailMessage .= "クレアヴァイオリン教室\n"; 
$MailMessage .= "〒141-0022　東京都品川区東五反田4-3-33";

sendmail($email, $from1, $subject1, $MailMessage);
?>


<div id="contents">

	<div id="main">
		<h2>以下の内容を送信しました</h2>
		<div class="topic">
			<h3>お名前</h3>
			<?= $name ?>
			<h3>連絡先</h3>
			<?= $tel ?>
			<h3>メール</h3>
			<?= $email ?>
			<h3>本文</h3>
			<?= $textarea ?>

		</div>


	</div><!-- /#main -->

	<div id="sub">
		<div class="bnr">
			<h3>教室情報</h3>
			<p>
			クレアヴァイオリン教室<br>電話：03-3447-7478
			</p>
			<ul>
				<li><a href="access.html#takanawa" class="btn-square-so-pop">東京　高輪台教室</a></li>
				<li><a href="access.html#tukuba" class="btn-square-so-pop">茨城　つくば教室</a></li>
			</ul>
		</div><!-- /.bnr -->
	</div><!-- /#sub -->

</div><!-- /#contents -->

<footer>
	<div class="footmenu">
		<ul>
		<li><a href="index.html">HOME</a></li>
		<li><a href="course.html">コース案内</a></li>
		<li><a href="concert.html">発表会</a></li>
		<li><a href="profile.html">プロフィール</a></li>
		<li><a href="access.html">アクセス</a></li>
		<li><a href="toiawase.html">お問い合わせ</a></li>
		</ul>
	</div><!-- /.footmenu -->
	<div class="copyright">Copyright &#169; 2019 KREA VIOLIN SCHOOL All Rights Reserved.</div><!-- /.copyright -->
</footer>

<div class="totop"><a href="#"><img src="images/totop.png" alt="ページのトップへ戻る"></a></div><!-- /.totop -->
</body>
</html>