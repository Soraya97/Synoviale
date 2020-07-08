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

// 
// $(".menu li").on("click", evt => {
//   let btn = $(evt.currentTarget);
//   $('li').removeClass('active');
//   btn.addClass('active');
// });
