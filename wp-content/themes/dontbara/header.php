<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="ja">
	<meta name="description" content="どんばら">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<title>どんばら</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'txt2myw',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
	<link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">
	<?php if( is_mobile()) : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css">
	<?php elseif( is_tablet()) : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/tablet.css">
	<?php else: ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<?php endif; ?>
</head>
<body>