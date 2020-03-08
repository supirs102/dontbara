<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="content-language" content="ja">
<meta name="description" content="長崎県多良見町にある、伸明窯のサイトです。">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title>伸明窯</title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"type="text/css" media="screen and (min-width: 426px)">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/media.css" type="text/css" media="screen and (max-width: 425px)">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</head>
<body>
<div id="1">
<div id="wrapper">
<div id="contents1">
<header>
	<h1><a><img id="headerlogo" src="<?php echo get_template_directory_uri(); ?>/images/shinmeigama.svg"></a></h1>
	<div class="toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<nav class="global_nav">
		<ul><li class="nav_li"><a href="#"><img id="navlogo" src="<?php echo get_template_directory_uri(); ?>/images/shinmeigama.svg" width="150" height="43"></a></li>
			<li class="nav_li"><a href="#">はじめに</a></li>
			<li class="nav_li"><a href="#">料理と器</a></li>
			<li class="nav_li"><a href="#">伸明窯・岸川明美のこと</a></li>
			<li class="nav_li"><a href="#">お知らせ・教室のこと</a></li>
			<li class="nav_li"><a href="#">岸川明美のブログ</a></li>
			<li class="nav_li"><a href="#">伸明窯までの地図	</a></li>
		</ul>
	</nav>
	<div id="mainimage"></div>
</header>
<div id="intro">
	<h2>伸明窯のこと</h2>
	<img id="introleft" src="<?php echo get_template_directory_uri(); ?>/images/1.png">
	<p>
		我流で始めた陶芸の世界<br>
		技術も知識も乏しい中　多くの人に<br class="br-sp">お世話になりながら作陶に励んできました<br>
		これからも土とのふれあいを楽しみながら<br>
		初窯の時の期待と不安の入り混じった初心を忘れず<br>
		さらに精進して生きたいと思います
	</p>
	<img id="introright" src="<?php echo get_template_directory_uri(); ?>/images/2.png">
</div><!-- /intro -->
<div id="cuisines">
	<h2>料理と器</h2>
	<div id="cuisines01">
		<div class="cuisine01sm" id="cuisines0101"></div><div class="cuisine01sm" id="cuisines0102"></div><div class="cuisine01bg" id="cuisines0103"></div><div class="cuisine01sm" id="cuisines0104"></div>
	</div>
	<div id="cuisines02">
		<div class="cuisine02bg" id="cuisines0201"></div><div class="cuisine02sm" id="cuisines0202"></div><div class="cuisine02sm" id="cuisines0203"></div><div class="cuisine02bg" id="cuisines0204"></div>
	</div>
	<div id="cuisines-sp">
	<div id="cuisines03">
		<div class="cuisine03sm" id="cuisines0301"></div><div class="cuisine03bg" id="cuisines0302"></div>
	</div>
	<div id="cuisines04">
		<div class="cuisine03sm" id="cuisines0401"></div><div class="cuisine03sm" id="cuisines0402"></div><div class="cuisine03sm" id="cuisines0403"></div>
	</div>
	<div id="cuisines05">
		<div class="cuisine03bg" id="cuisines0501"></div><div class="cuisine03sm" id="cuisines0502"></div>
	</div>
	<!-- <a href="#">◀ その他の写真を見る ▶</a> -->
	</div>
</div><!-- /cuisines -->
<div id="potter">
	<h2>岸川明美のこと</h2>
	<img id="potterimage" src="<?php echo get_template_directory_uri(); ?>/images/3.png">
	<div id="pottercontents">
	<p>
		<span id="pottershop">伸明窯</span><br>
		<span id="pottername">岸川 明美 ／ Akemi Kishikawa</span><br>
		山で見つけた野の花をこんな花瓶に飾りたい<br>
		自分で作った料理をこんな器にもりつけたい<br>
		そんなどこにでもいる主婦の気持ちで始めてから２５年<br>
		我流で始めた陶芸の世界<br>
		技術も知識も乏しい中<br>
		多くの人にお世話になりながら作陶に励んできました<br>
		これからも土とのふれあいを楽しみながら<br>
		初窯の時の期待と不安の入り混じった初心を忘れず<br>
		さらに精進して生きたいと思います<br>
		<a href="https://ameblo.jp/shinmeigama/">◀ 岸川明美のブログ ▶</a>
	</p>
	</div><!-- /pottercontents -->
</div><!-- /potter -->
</div><!-- /contents1 -->
<div id="contents2">
	<div id="photos">
	<ul>
	<li><img class="photosm" src="<?php echo get_template_directory_uri(); ?>/images/gallery01.png" ></li>
	<li><img class="photobg" src="<?php echo get_template_directory_uri(); ?>/images/gallery02.png" ></li>
	<li><img class="photosm" src="<?php echo get_template_directory_uri(); ?>/images/gallery03.png" ></li>
	<li><img class="photobg" src="<?php echo get_template_directory_uri(); ?>/images/gallery04.png" ></li>
	</ul>
	</div><!-- /photos -->
<div id="big">
</div><!-- /big -->
<div id="post">
<div id="news">
	<h2>伸明窯からのお知らせ</h2>
	<ul>
		<?php
		query_posts('showposts=6');
		if (have_posts()) :
		while (have_posts()) :
		the_post();
		?>
		<li><a class="eModal-post-<?php the_ID();?>" href="<?php the_permalink() ?>"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time><?php the_title(); ?></a><?php echo do_shortcode("[modal id='post-". get_the_ID() ."' size='small' title='". get_the_title() ."']". get_the_content() . "[/modal]");?></li>
		<?php
		endwhile;
		endif;
		?>
		<!-- <li><a data-target="con3" class="modal-open"><span id="newsdate03">2018.01.31</span><span class="newscon">ウェブサイトのリニューアルのお知らせ</span></a></li>
		<li><a data-target="con4" class="modal-open"><span id="newsdate04">2018.01.31</span><span class="newscon">ウェブサイトのリニューアルのお知らせ</span></a></li>
		<li><a data-target="con5" class="modal-open"><span id="newsdate05">2018.01.31</span><span class="newscon">ウェブサイトのリニューアルのお知らせ</span></a></li>
		<li id="news-sp"><a data-target="con6" class="modal-open"><span id="newsdate06">2018.01.31</span><span class="newscon">ウェブサイトのリニューアルのお知らせ</span></a></li>
		<li><a href="#">◀ 過去のお知らせ ▶</a></li> -->
	</ul>
</div><!-- /news -->
<div id="calendar">
	<h2>陶芸教室のこと</h2>
	<?php echo do_shortcode('[sbc title="no"]'); ?>
	<!-- <a href="#">◀ 陶芸教室について ▶</a> -->
</div><!-- /calendar -->
</div><!-- /post -->
<div id="article">
	<div id="con1" class="modal-content">
		<h2>伸明窯からのお知らせ</h2>
		<a class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/images/batten.svg" width="67" height="67"></a>
		<div class="articlecontent">
			<img class="articleimg1" src="<?php echo get_template_directory_uri(); ?>/images/3.png" width="360" height="370">
			<!-- <p class="articlep2">秋にオープンのお知らせから長らくお待たせしましたが<br>ようやくウェブサイトのリニューアルが終わりました</p>
			<img class="articleimg2" src="images/gallery02.png">
			<img class="articleimg3" src="images/gallery02.png">
			<p class="articlep3">秋にオープンのお知らせから長らくお待たせしましたが<br>ようやくウェブサイトのリニューアルが終わりました</p> -->
		</div><!-- /articlecontent -->
<!-- 		<div class="articlecate">
			<p>カテゴリー</p>
			<ul>
				<li>お知らせ</li>
				<li>陶芸教室</li>
				<li>展示会</li>
			</ul>
		</div> --><!-- /articlecate -->
<!-- 		<div class="articlearchi">
			<p>アーカイブ</p>
			<ul>
				<li>2018-01</li>
				<li>2018-02</li>
				<li>2018-03</li>
			</ul>
		</div> --><!-- /articlearchi -->
	</div>

	<div id="con2" class="modal-content">
		<h2>伸明窯からのお知らせ</h2>
		<a class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/images/batten.svg" width="67" height="67"></a>
		<div class="articlecontent">
			<h3><span><?php the_time('y-m-d'); ?></span><br><?php the_title(); ?></h3>
			<p class="articlep1">イベント出展のお知らせです<br>4月14日(土)~15日(日)に護国神社で行われる<br>第6回NAGASAKI護国神社の庭フェスに出展いたします<br>日常で使う陶器・器を揃えています<br>お越しの際は、ぜひ伸明窯へお立ち寄り下さいませ</p>
			<img class="articleimg1" id="articleimg1-1" src="<?php echo get_template_directory_uri(); ?>/images/poster.jpg" width="237" height="348">
			<!-- <img class="articleimg1" src="images/poster.jpg" width="237" height="348"> -->
			<!-- <p class="articlep2">秋にオープンのお知らせから長らくお待たせしましたが<br>ようやくウェブサイトのリニューアルが終わりました</p>
			<img class="articleimg2" src="images/gallery02.png">
			<img class="articleimg3" src="images/gallery02.png">
			<p class="articlep3">秋にオープンのお知らせから長らくお待たせしましたが<br>ようやくウェブサイトのリニューアルが終わりました</p> -->
		</div><!-- /articlecontent -->
	</div>

	<div id="con3" class="modal-content">
		<p>3つ目のモーダルウィンドウです。</p>
		<p><a class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/images/batten.svg" width="67" height="67"></a></p>
	</div>

	<div id="con4" class="modal-content">
		<p>4つ目のモーダルウィンドウです。</p>
		<p><a class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/images/batten.svg" width="67" height="67"></a></p>
	</div>

	<div id="con5" class="modal-content">
		<p>5つ目のモーダルウィンドウです。</p>
		<p><a class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/images/batten.svg" width="67" height="67"></a></p>
	</div>

	<div id="con6" class="modal-content">
		<p>6つ目のモーダルウィンドウです。</p>
		<p><a class="modal-close"><img src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/images/batten.svg" width="67" height="67"></a></p>
	</div>
</div><!-- /article -->
</div><!-- /contents2 -->
<div id="contents3">
<div id="dishes">
	<img src="<?php echo get_template_directory_uri(); ?>/images/35.png">
</div><!-- /dishes -->
<div id="instagram">
	<h2>インスタグラム</h2>
	<p><a href="https://www.instagram.com/shinmeigama/">@shinmeigama</a></p>
	<div id="insta01"><a href="https://www.instagram.com/p/Be9wxhmBrEb/?taken-by=shinmeigama"><img src="<?php echo get_template_directory_uri(); ?>/images/instaglam2.png"></a><a href="https://www.instagram.com/p/BepXAGQl916/?taken-by=shinmeigama"><img src="<?php echo get_template_directory_uri(); ?>/images/instaglam.png"></a><img src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"><img class="insta-sp" src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"></div>
	<div id="insta02"></a><img src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"><img class="insta-sp" src="<?php echo get_template_directory_uri(); ?>/images/noimage2.png"></div>
</div><!-- /instagram -->
<footer>
	<img id="footerlogo" src="<?php echo get_template_directory_uri(); ?>/images/shinmeigama.svg">
	<nav>
		<ul>
			<li><a href="#1">はじめに</a></li>
			<li>料理と器</li>
			<li>伸明窯・岸川明美のこと</li>
			<li>お知らせ・教室のこと</li>
			<li><a href="https://ameblo.jp/shinmeigama/">岸川明美のブログ</a></li>
			<li><a href="https://goo.gl/maps/5g5j9FSJyqK2">伸明窯までの地図</a></li>
			<li id="footertel">0957(43)2277</li>
			<li id="footeradd">info@shinmeigama.com</li>
		</ul>
	</nav>
	<img id="footerdishes" src="<?php echo get_template_directory_uri(); ?>/images/34.png">
	<p>&copy; 2017 SHINMEIGAMA . All rights reserved.</p>
</footer>
</div><!-- /contents3 -->
</div><!-- /wrapper -->
<?php wp_footer(); ?>
</body>
</html>
