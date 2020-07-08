console.log('test.js');

if (screen.height < 800) {
  let startCard = '<div class="carousel carousel-slider center">';
  let logo1 = '<a class="carousel-item" href="#!"><img src="/img/logo-gryon-tourisme.png"></a>';
  let logo2 = '<a class="carousel-item" href="#!"><img src="/img/logo-skiclubgryon.png"></a>';
  let logo3 = '<a class="carousel-item" href="#!"><img src="/img/logo-gryon.png"></a>';
  let logo4 = '<a class="carousel-item" href="#!"><img src="/img/logo-detgcharlet.jpg"></a>';
  let logo5 = '<a class="carousel-item" href="#!"><img src="/img/logo-cookie.png"></a>';
  let endCard = '</div>';
  let partners = startCard + logo1 + logo2 + logo3 + logo4 + logo5 + endCard;
  $('#partners').append(partners);
}

if (screen.height >= 800) {
  let startCard = '<div class="">';
  let logo1 = '<img src="img/logo-gryon-tourisme.png">';
  let logo2 = '<img src="img/logo-skiclubgryon.png">';
  let logo3 = '<img src="img/logo-gryon.png">';
  let logo4 = '<img src="img/logo-detgcharlet.jpg">';
  let logo5 = '<img src="img/logo-cookie.png">';
  let endCard = '</div>';
  let partners = startCard + logo1 + logo2 + logo3 + logo4 + logo5 + endCard;
  $('#partners').append(partners);
}
