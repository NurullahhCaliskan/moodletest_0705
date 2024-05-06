$(document).ready(function() {
    $('#accordion').on('show.bs.collapse', function (e) {
        var heading = $(e.target).prev('.card-header');
        $(heading).addClass('active');
    });

    $('#accordion').on('hide.bs.collapse', function (e) {
        var heading = $(e.target).prev('.card-header');
        $(heading).removeClass('active');
    });
});
