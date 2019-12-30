$(document).ready(function () {
    $('.burger').click(function () {
        $(this).toggleClass('open');
        $(".nav-m").toggle(300);
    });
});