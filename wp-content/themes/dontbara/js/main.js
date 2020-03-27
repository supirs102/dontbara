$(function () {
    $('.push-button').on('click', function() {
        $('body').toggleClass('open');
        $('#gloval-close').toggleClass('open');
        if (document.getElementById("gloval-close").classList.contains('open')) {
            var elem = document.getElementById("gloval-close");
            elem.innerHTML = "Close";
        } else {
            var elem = document.getElementById("gloval-close");
            elem.innerHTML = "";
        }
    });
});