$(function(){
	
})

    $(function () {
        $('#nav-toggle').on('click', function() {
            $('body').toggleClass('open');
            $('#nav-toggle').toggleClass('open');
            if (document.getElementById("nav-toggle").classList.contains('open')) {
                var elem = document.getElementById("nav-toggle");
                elem.innerHTML = "Close";
            } else {
                var elem = document.getElementById("nav-toggle");
                elem.innerHTML = "MENU";
            }
        });
    });