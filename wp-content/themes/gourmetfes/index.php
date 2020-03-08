<?php get_header(); ?>
<div id="wrapper">
<header>
	<h1>7th&nbsp;ISAHAYA&nbsp;GOURMET&nbsp;FESTIVAL</h1>
	<ul id="headsns">
		<li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
	</ul>
	<ul id="headnav">
		<li><a href="#">諫早グルメフェスティバルとは</a></li>
		<li><a href="#">新着情報</a></li>
		<li><a href="#">グルメ出店店舗情報</a></li>
		<li><a href="#">イベント情報</a></li>
		<li><a href="#">会場アクセス</a></li>
	</ul>
</header>
<div id="headscroll">
	<ul>
		<li><a href="#"><img width="1424" src="<?php echo get_template_directory_uri(); ?>/images/gourmetfess01.png"></a></li>
		<li><a href="#"><img width="1424" src="<?php echo get_template_directory_uri(); ?>/images/gourmetfess01.png"></a></li>
		<li><a href="#"><img width="1424" src="<?php echo get_template_directory_uri(); ?>/images/gourmetfess01.png"></a></li>
		<li><a href="#"><img width="1424" src="<?php echo get_template_directory_uri(); ?>/images/gourmetfess01.png"></a></li>
		<li><a href="#"><img width="1424" src="<?php echo get_template_directory_uri(); ?>/images/gourmetfess01.png"></a></li>
		<li><a href="#"><img width="1424" src="<?php echo get_template_directory_uri(); ?>/images/gourmetfess01.png"></a></li>
	</ul>
</div><!-- #headscroll -->
<div id="about">
	<h2><span>諫早グルメ&amp;島原半島グルメが大集合！！</span><br>GOURMET&nbsp;EVENT</h2>
	<p id="aboutp01">★駐車場が大変混み合いますので、お車のお乗り合わせもしくは<br>公共交通機関をご利用の上お越し下さいますようお願いいたします</p>
	<p id="aboutp02">※ここに掲載している写真は以前のグルメフェスティバル開催時の模様を中心としたイメージです。<br>今回の実際の催しの内容とは若干異なります。</p>
	<div id="aboutnav">
	<ul>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png"><br>グルメ出店店舗</a></li>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png"><br>イベントスケジュール</a></li>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png"><br>会場マップ</a></li>
	</ul>
	</div><!-- #aboutnav -->
</div><!-- #about -->
<div id="news">
	<h2>NEWS<br><span>新着情報</span></h2>
	<ul>
		<?php
		$query = new WP_Query(
		    array(
		        'post_type' => 'custom',
		        'posts_per_page' => 7,
		    )
		);
		?>
		<?php
		if ( $query->have_posts() ) : ?>
		    <?php while ( $query->have_posts() ) : $query->the_post();?>
		    <li>
		        <p><time><?php the_field( 'acf_day' ); ?></time><?php the_field( 'acf_text' ); ?></p>
		    </li>
		    <?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
		<li><a id="past" href="#">もっと情報を見る</a></li>
	</ul>
</div><!-- #news -->
<div id="tenant">
	<h2>GOURMET<br><span>グルメ出店店舗情報</span></h2>
	<div id="tenantall">
	    <div class="sortControl">
	    	<ul class="cond1">
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory01" data-group="0"><label for="shopcategory01"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory02" data-group="0"><label for="shopcategory02"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory03" data-group="0"><label for="shopcategory03"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory04" data-group="0"><label for="shopcategory04"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory05" data-group="0"><label for="shopcategory05"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory06" data-group="0"><label for="shopcategory06"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	            <li><span class="m_radio"><input name="" type="checkbox" id="shopcategory07" data-group="0"><label for="shopcategory07"><img width="85" src="<?php echo get_template_directory_uri(); ?>/images/star.png"></label></span></li>
	        </ul>
	        <!-- /.cond1 -->        
	    </div>
	    <!-- /.sortControl -->
	    <ul class="itemList">
	    	<li class="col shopcategory01">ショップカテゴリー１</li>
	    	<li class="col shopcategory01">ショップカテゴリー１</li>
	    	<li class="col shopcategory01">ショップカテゴリー１</li>
	    	<li class="col shopcategory01">ショップカテゴリー１</li>
	    	<li class="col shopcategory01">ショップカテゴリー１</li>
	    	<li class="col shopcategory02">ショップカテゴリー２</li>
	    	<li class="col shopcategory02">ショップカテゴリー２</li>
	    	<li class="col shopcategory02">ショップカテゴリー２</li>
	       	<li class="col shopcategory03">ショップカテゴリー３</li>
	    	<li class="col shopcategory03">ショップカテゴリー３</li>
	    	<li class="col shopcategory03">ショップカテゴリー３</li>
	    	<li class="col shopcategory03">ショップカテゴリー３</li>
	    	<li class="col shopcategory03">ショップカテゴリー３</li>
	    	<li class="col shopcategory04">ショップカテゴリー４</li>
	    	<li class="col shopcategory04">ショップカテゴリー４</li>
	    	<li class="col shopcategory04">ショップカテゴリー４</li>
	    	<li class="col shopcategory05">ショップカテゴリー５</li>
	    	<li class="col shopcategory05">ショップカテゴリー５</li>
	    	<li class="col shopcategory05">ショップカテゴリー５</li>
	    	<li class="col shopcategory05">ショップカテゴリー５</li>
	    	<li class="col shopcategory05">ショップカテゴリー５</li>
	    	<li class="col shopcategory06">ショップカテゴリー６</li>
	    	<li class="col shopcategory06">ショップカテゴリー６</li>
	    	<li class="col shopcategory06">ショップカテゴリー６</li>
	    	<li class="col shopcategory07">ショップカテゴリー７</li>
	    	<li class="col shopcategory07">ショップカテゴリー７</li>
	    	<li class="col shopcategory07">ショップカテゴリー７</li>
	    	<li class="col shopcategory07">ショップカテゴリー７</li>
	    	<li class="col shopcategory07">ショップカテゴリー７</li>
	    </ul><!-- /.itemList -->
	</div><!-- #tenantall -->
	<a id="tenantmore" href="#">さらに表示する<br><img width="30" src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt=""></a>
</div><!-- #tenant -->
<div id="event">
	<h2>EVENT&nbsp;INFORMATION<br><span>イベント情報</span></h2>
	<ul>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"><p>グルメ出店店舗情報</p></a></li>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"><p>会場イベントブース情報</p></a></li>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"><p>ステージ出演者情報</p></a></li>
		<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"><p>グ〜グ〜マルシェ</p></a></li>
	</ul>
</div><!-- #event -->
<div id="accessface">
	<ul>
		<li><h2>ACCESS<br><span>会場アクセス</span></h2><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li><h2>FACEBOOK<br><span>フェイスブック</span></h2><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
	</ul>
</div><!-- accessface -->
<div id="instagram">
	<h2>INSTAGRAM<br><span>インスタグラム</span><br><span>@isahaya_fes</span></h2>
</div><!-- #instagram -->
<div id="sponsor">
	<h2>SPONSOR<br><span>共催</span></h2>
	<ul>
		<li class="largeimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="largeimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="largeimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="largeimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="largeimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="largeimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="smallimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="smallimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="smallimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
		<li class="smallimg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ひまわり.jpeg"></a></li>
	</ul>
</div><!-- #sponsor -->
<div id="footnav">
	<ul>
		<li><a href="#">トップページ</a></li>
		<li><a href="#">新着情報</a></li>
		<li><a href="#">イベントスケジュール</a></li>
		<li><a href="#">グルメ出店店舗情報</a></li>
		<li><a href="#">会場イベントブース情報</a></li>
		<li><a href="#">ステージ出演者情報</a></li>
		<li><a href="#">会場マップ</a></li>
		<li><a href="#">グ〜グ〜マルシェ</a></li>
		<li><a href="#">会場アクセス</a></li>
	</ul>
	<ul>
		<li><a href="#">諫早グルメフェスティバルについて</a></li>
		<li><a href="#">諫早グルメフェスティバル実行委員会について</a></li>
		<li><a href="#">共催様について</a></li>
		<li><a href="#">お問い合わせ</a></li>
		<li><a href="#">個人情報保護基本方針</a></li>
	</ul>
	<ul>
		<li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
	</ul>
	<p>&copy;&nbsp;2020&nbsp;ISAHAYA&nbsp;GOURMET&nbsp;FESTIVAL.All&nbsp;RIGHTS&nbsp;RESERVED<br>諫早グルメフェスティバル実行委員会<br>アエル中央商店街</p>
</div><!-- #footnav -->
<footer></footer>
</div><!-- #wrapper -->
<?php get_footer(); ?>