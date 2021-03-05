(function ($) {
    let body = $('body');
    /*
    body.on('click', '.chatbox-open',function () {
        $('.chatbox-close, .chatbox-popup').css('visibility', 'visible')
        $('#live-chate input').focus();
    })
    body.on('click', '.chatbox-close',function () {
        $('#live-chate div.chatbox-close, .chatbox-popup').css('visibility', 'hidden')
    });
    */
    body.on('click', '.form-border', function (e) {
        e.preventDefault();
    })
})(jQuery);
