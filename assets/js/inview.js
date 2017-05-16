$(document).ready(function() {
    $('.inview').bind('inview', function (event, visible) {
        if (visible) {
            $(this).removeClass('offview');
        }
    });
});
