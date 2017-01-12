$('.info-button').on('click', function () {
    $(this).toggleClass('active');
    $('.overlay').toggleClass('active');
    $('.container').toggleClass('active');
    $('body').toggleClass('active');
});