$(function(){

var nowModalshinmei = null;
var modalClassshinmei = "modal-shinmei";
var modals = document.getElementsByClassName( modalClassshinmei );

for(var i=0,l=modals.length; l>i; i++){
    modals[i].onclick = function(){
        this.blur();
        var target = this.getAttribute( "data-target" );

        if( typeof( target )=="undefined" || !target || target==null ){
            return false;
        }

        nowModalshinmei = document.getElementById( target );

        if( nowModalshinmei == null ){
            return false;
        }

        if( $( "#modal-overlay" )[0] ) return false;

        $( "body" ).append( '<div id="modal-overlay"></div>' );
        $( "#modal-overlay" ).fadeIn( "fast" );

        centeringModalshinmei();


        $( nowModalshinmei ).fadeIn( "slow" );
        $( "#modal-overlay,#modal-close" ).unbind().click( function() {
            $( "#" + target + ",#modal-overlay" ).fadeOut( "fast" , function() {
                $( '#modal-overlay' ).remove();
            });
            nowModalshinmei = null;
        });
    }
}

    $( window ).resize( centeringModalshinmei );

    function centeringModalshinmei() {
        if( nowModalshinmei == null ) return false;

        var w = $( window ).width();
        var h = $( window ).height();
        var cw = $( nowModalshinmei ).outerWidth();
        var ch = $( nowModalshinmei ).outerHeight();

        $( nowModalshinmei ).css({"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"});
    }
});


$(function() {
  $('.toggle').click(function() {
    $(this).toggleClass("active");
        if($(this).hasClass('active')) {
            $('.global_nav').addClass('active');
        } else {
            $('.global_nav').removeClass('active');
        }
  });
});


$(function(){
var html = '<div id="overlay">';
html += '<img id="menutriggerlogo" src="images/shinmeigama.svg" width="150" height="43">';
html += '<ul><li><a href="#">はじめに</a></li><li><a href="#">料理と器</a></li><li><a href="#">伸明窯・岸川明美のこと</a></li><li><a href="#">お知らせ・教室のこと</a></li><li><a href="#">岸川明美のブログ</a></li><li><a href="#">伸明窯までの地図</a></li></ul>';
html += '</div>';
html += '<a class="menu-trigger" href="#"><span></span><span></span><span></span></a>';

    $("body").prepend(html);
    $('.menu-trigger').on('click', function() {
      $(this).toggleClass('active');
      $("#overlay").fadeToggle();
      return false;
    });


    // var topBtn = $('#to_top');
    // //スクロールが100に達したらボタン表示
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 100) {
    //         topBtn.fadeIn();
    //     } else {
    //         topBtn.fadeOut();
    //     }
    // });
    // //スクロールしてトップ
    // topBtn.click(function () {
    //     $('body,html').animate({
    //         scrollTop: 0
    //     }, 500);
    //     return false;
    // });
  });


$(function(){
    // スクロールバーの横幅を取得
    $('html').append('<div class="scrollbar" style="overflow:scroll;"></div>');
    var scrollsize = window.innerWidth - $('.scrollbar').prop('clientWidth');
    $('.scrollbar').hide();

    // 「.modal-open」をクリック
    $('.modal-open').click(function(){
        // html、bodyを固定（overflow:hiddenにする）
        $('html, body').addClass('lock');

        // オーバーレイ用の要素を追加
        $('body').append('<div class="modal-overlay"></div>');

        // オーバーレイをフェードイン
        $('.modal-overlay').fadeIn('slow');

        // モーダルコンテンツのIDを取得
        var modal = '#' + $(this).attr('data-target');

         // モーダルコンテンツを囲む要素を追加
        $(modal).wrap("<div class='modal-wrap'></div>");

        // モーダルコンテンツを囲む要素を表示
        $('.modal-wrap').show();

        // モーダルコンテンツの表示位置を設定
        modalResize();

         // モーダルコンテンツフェードイン
        $(modal).fadeIn('slow');

        // モーダルコンテンツをクリックした時はフェードアウトしない
        $(modal).click(function(e){
            e.stopPropagation();
        });

        // 「.modal-overlay」あるいは「.modal-close」をクリック
        $('.modal-wrap, .modal-close').off().click(function(){
            // モーダルコンテンツとオーバーレイをフェードアウト
            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow',function(){
                // html、bodyの固定解除
                $('html, body').removeClass('lock');
                // オーバーレイを削除
                $('.modal-overlay').remove();
                // モーダルコンテンツを囲む要素を削除
                $(modal).unwrap("<div class='modal-wrap'></div>");
           });
        });

        // リサイズしたら表示位置を再取得
        $(window).on('resize', function(){
            modalResize();
        });

        // モーダルコンテンツの表示位置を設定する関数
        function modalResize(){
            // ウィンドウの横幅、高さを取得
            var w = $(window).width();
            var h = $(window).height();

            // モーダルコンテンツの横幅、高さを取得
            var mw = $(modal).outerWidth(true);
            var mh = $(modal).outerHeight(true);

            // モーダルコンテンツの表示位置を設定
            if ((mh > h) && (mw > w)) {
                $(modal).css({'left': 0 + 'px','top': 0 + 'px'});
            } else if ((mh > h) && (mw < w)) {
                var x = (w - scrollsize - mw) / 2;
                $(modal).css({'left': x + 'px','top': 0 + 'px'});
            } else if ((mh < h) && (mw > w)) {
                var y = (h - scrollsize - mh) / 2;
                $(modal).css({'left': 0 + 'px','top': 0 + 'px'});
            } else {
                var x = (w - mw) / 2;
                var y = (h - mh) / 2;
                $(modal).css({'left': x + 'px','top': 0 + 'px'});
            }
        }

    });
});
