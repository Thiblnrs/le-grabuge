jQuery(document).ready(function ($) {
	// Changement couleur header au scroll
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 20) {
			$("header").addClass("darkHeader");
		} else if (scroll < 20) {
			$("header").removeClass("darkHeader");
		}
	});
	// Paramétrage slider accueil
	$(".multiple-items").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		centerMode: true,
		centerPadding: "60px",
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
	});

	$("#citation").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
	});
	// Affichage du menu au clic bouton
	$(".btn-menu").click(function () {
		$(".menu").addClass("open");
	});
	// Tab page infos pratiques
});
