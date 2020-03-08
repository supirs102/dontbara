$(function(){
	// #headscroll
    $('#headscroll').each(function(){
        var headscrollWidth = $(this).width();
        var headscrollHeight = $(this).height();
        $(this).children('ul').wrapAll('<div id="headscroll_wrap"></div>');
        var listWidth = $('#headscroll_wrap').children('ul').children('li').width();
        var listCount = $('#headscroll_wrap').children('ul').children('li').length;
        var loopWidth = (listWidth)*(listCount);
        $('#headscroll_wrap').css({
            top: '0',
            left: '0',
            width: ((loopWidth) * 2),
            height: (headscrollHeight),
            overflow: 'hidden',
            position: 'absolute'
        });
        $('#headscroll_wrap ul').css({
            width: (loopWidth)
        });
        headscrollPosition();
        function headscrollPosition(){
            $('#headscroll_wrap').css({left:'0'});
            $('#headscroll_wrap').stop().animate({left:'-' + (loopWidth) / 6 + 'px'},30000,'linear');
            setTimeout(function(){
                headscrollPosition();
            },30000);
        };
        $('#headscroll_wrap ul').clone().appendTo('#headscroll_wrap');
    });

    // #tenantall
    var	active = [];
	var	allArr = [];
    var showClass,
		href,
		param = '';
    var activeClass = 'active',
		sortControl = $('.sortControl'),
        sortTarget = $('.itemList > .col'),
		groupLength = 3;		
	if(location.search){
        var onload = location.search.slice(1).replace(/group.=/g,"").split('?');
        var defArr = [];
        for(var i=0;i<onload.length;i++){
            var filter = onload[i].split(',');
            defArr.push(filter);
        }
        var defCheck = '#' +  defArr.join(',').replace(/,/g,',#');
        $(defCheck).prop('checked','checked');
        defArr = '.' + defArr.join('|.').replace(/,/g,',.');
        defArr = defArr.split('|');
        showClass = sortTarget;
        for(var i=0;i<defArr.length;i++){
            var filter = defArr[i];
            showClass = showClass.filter(filter);
        }
        showClass.addClass(activeClass);
			sortTarget.each(function(){
				if($(this).hasClass(activeClass)){
					$(this).show();
				} else {
					$(this).hide();
				}
			});        
    } else {
		sortTarget.find('.col').addClass('active');
	}
	sortControl.find('input[type="checkbox"]').change(function(){
		active = [];
		allArr = [];
		param = '';
		for(i=0;i<groupLength;i++){
			var arr = [];
			var filterArr = [];
			if(sortControl.find('input[type="checkbox"][data-group="' + i + '"]:checked').length){
				sortControl.find('input[type="checkbox"][data-group="' + i + '"]:checked').each(function(){
					arr.push($(this).attr('id'));
					filterArr.push('.' + $(this).attr('id'));
				});
			}
			active[i] = arr;
			if(filterArr.length){
				allArr.push(filterArr);
			}
			param += (active[i].length) ? '?group' + i + '=' + active[i] : '';
		}		
		showClass = sortTarget;		
		if(allArr.length){
			for(j=0;j<allArr.length;j++){
				var filter = allArr[j].join(',');
				showClass = showClass.filter(filter);
			}
		}		
		if($.isEmptyObject(param) !== true){
			history.pushState(null,null,param);
		}
		if(sortControl.find('input[type="checkbox"]:checked').length){
			sortTarget.removeClass(activeClass);
			showClass.addClass(activeClass);
			sortTarget.each(function(){
				if($(this).hasClass(activeClass)){
					if(!$(this).is(':visible')){
						$(this).show().css({
							'z-index':'1'
						}).animate(
							{
								'z-index':'100'
							},
							{
								duration:300,
								step:function(now){
									$(this).css({
										transform:'scale('+ now/100 +')'
									});
								}
							}
						);
					}
				} else {
					$(this).css({
						'z-index':'100'
					}).animate(
						{
							'z-index':'0'
						},
						{
							duration:300,
							step:function(now){
								$(this).css({
									transform:'scale('+ now*0.01 +')'
								});
							},
							complete:function(){
								$(this).hide();
							}
						}
					);
				}
			});
		} else {
			sortTarget.show().addClass(activeClass).show().css({
				'z-index':'1'
			}).animate(
				{
					'z-index':'100'
				},
				{
					duration:300,
					step:function(now){
						$(this).css({
							transform:'scale('+ now/100 +')'
						});
					}
				}
			);
			var defHref = location.href.replace(/\?.*$/,"");
			history.pushState(null,null,defHref);
		}
	});

	 // //"div.categoryの要素毎に処理する
	 // $("div#tenantall").each(function () {
	 // //"div.categoryの要素内のliの数をカウント
	 // var num = $(this).find('ul.itemList col').length;
	 // //"div.category内のul.catlist liが0件だったら
	 // if(num > 10){

	 // });



	//  $(".itemList").each(function(){
	// 	$(this).find("li:gt(9)").each(function(){$(this).hide();});
	// 	$(this).append('<p>» もっと見る</p>');
	// 	$(this).find("p:last").click(function(){$(this).parent().find("li").show(400); $(this).remove();});
	// });


})