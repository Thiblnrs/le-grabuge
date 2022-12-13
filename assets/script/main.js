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
	$("#fermer a").click(function () {
		$(".menu").removeClass("open");
	});

	// Tab page infos pratiques
	$("#btn-billet").click(function () {
		$("section,button").removeClass("active");
		$("#billet").addClass("active");
		$(this).addClass("active");
	});
	$("#btn-handicap").click(function () {
		$("section,button").removeClass("active");
		$("#handicap").addClass("active");
		$(this).addClass("active");
	});
	$("#btn-reglement").click(function () {
		$("section,button").removeClass("active");
		$("#reglement").addClass("active");
		$(this).addClass("active");
	});
	$("#btn-faq").click(function () {
		$("section,button").removeClass("active");
		$("#faq").addClass("active");
		$(this).addClass("active");
	});
	//Accordeon
	$(".accordion").click(function () {
		$(this).toggleClass("acctive");
		$(this).next().toggleClass("ouvert");
	});

	//Filtres genres
	var $btns = $("#titre-programmation span").click(function () {
		if (this.id == "all") {
			$("#filtre > div").fadeIn(450);
		} else {
			var $el = $("." + this.id).fadeIn(450);
			$("#filtre > div").not($el).hide();
		}
		$btns.removeClass("active");
		$(this).addClass("active");
	});
});
