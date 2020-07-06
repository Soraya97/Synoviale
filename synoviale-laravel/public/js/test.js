console.log('test.js');

$("#reservationStatus .activate").on("click", evt => {
    evt.preventDefault();
    $(".activate").addClass('disabled');
    $('.desactivate').removeClass('disabled');
});

$("#reservationStatus .desactivate").on("click", evt => {
    evt.preventDefault();
    $(".activate").removeClass('disabled');
    $('.desactivate').addClass('disabled');
});
