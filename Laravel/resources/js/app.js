require('./bootstrap');

// import $ from './jquery.min.js';
require('./materialize.min');

console.log('app.js')

$(document).ready(function() {
    let h = screen.height;

    /*
    This function comes from https://materializecss.com/sidenav.html
    It's used to show the menu on mobile devices, coming from the right of the screen
     */
    $(".sidenav").sidenav({
        edge: 'right'
    });

    /*
    This function comes from https://materializecss.com/dropdown.html
    It's used for the submenus in the navigation
    Two are neccessaires because there's one for browsers and one for mobiles
     */
    $(".dropdown-trigger").dropdown({
        hover: false,
        coverTrigger: false
    });
    $(".dropdown-triggerAccount").dropdown({
        hover: false,
        coverTrigger: false
    });

    /*
    This function comes from https://materializecss.com/collapsible.html
    It's used to hide some contents that turn to be apparent when the user clicks on the title
     */
    $('.collapsible').collapsible();

    /*
    This function comes from https://materializecss.com/carousel.html
    It returns pictures in full page into a carousel with the indicators of the number of pictures
     */
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });

    /*
    This function comes from https://materializecss.com/media.html
    It's used on the welcome page and the height of the pictures is adjusted depending on the height of the screen
     */
    if (h < 800) {
        $('.slider').slider({
            height: h,
            indicators: false
        });
    }
    if (h >= 800) {
        $('.slider').slider({
            height: h * 0.7,
            indicators: false
        });
    }

    /*
    This function comes from https://materializecss.com/select.html
    Some of the forms used are some selected forms
     */
    $('select').formSelect();

    /*
    This function comes from https://materializecss.com/modals.html
    Modals are used when we want the user to confirm an action (like a deletion)
     */
    $('.modal').modal();

    /*
    This function comes from https://materializecss.com/tabs.html
    It's like a second navigation, when we want to show the user the steps he'll have to go through
     */
    $('.tabs').tabs();
});

/*
This code is used on the page of test, when the company wanna start a new test and this one will "go" on the right of the page
 */
$("#scanQR").on("submit", evt => {
    evt.preventDefault();
    let marque = $("#marque").val();
    let nom = $("#nom").val();
    let now = new Date();
    let heure = now.getHours();
    let minute = now.getMinutes();
    let seconde = now.getSeconds();
    let time = heure + 'h' + minute;
    let cardStart = '<div class="row"><div class="col s12"><div class="card greyBackground"><div class="card-content">';
    let cardEnd = '</div><div class="card-action"><a class="btn modal-trigger orange-light black-text" href="#endTest">TERMINER LE TEST</a></div></div></div></div>';
    let test = cardStart + '<p>Nom 2 Prénom 2</p><p>VTT ' + marque + ' ' + nom + '</p><p>' + time + '</p>' + cardEnd;
    $('#tests').append(test);
});

/*
This code is used to search some infos of a bike depending on his brand and his type
 */
$("#bikeAvailable").on("submit", evt => {
    evt.preventDefault();
    $("#selectionBike").empty();
    let marque = $("#marque").val();
    let type = $("#type").val();
    let cardStart = '<li><div class="collapsible-header">';
    let cardEnd = '</p></span></div></li>';
    let test = cardStart + marque + ' Velo ' + type + '</div><div class="collapsible-body"><span><p>' + 'Description' + '</p><p>Le cadre mesure ' + 'Framesize' + ' cm</p><p>Le vélo mesure ' + 'RimSize' + ' cm' + cardEnd;

    for (var i = 0; i < 2; i++) {
        $('#selectionBike').append(test);
    };
});

/*
When the screen is large, like a desktop, the partners' logos are vertically aligned
When on mobile, the logos are on a carousel
 */
if (screen.height < 800) {
  let partners = '<div class="carousel carousel-slider center"><a class="carousel-item" href="#one!"><img src="img/logo-gryon-tourisme.png"></a><a class="carousel-item" href="#two!"><img src="img/skiClubGryon.png"></a></div>';
  $('#partners').append(partners);
}

if (screen.height >= 800) {
  let partners = '<div class=""><img src="img/logo-gryon-tourisme.png"><img src="img/skiClubGryon.png"></div>';
  $('#partners').append(partners);
}
