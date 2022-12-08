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
	$("#btn-billet").click(function () {
		$("section").removeClass("active");
		$("#billet").addClass("active");
	});
	$("#btn-handicap").click(function () {
		$("section").removeClass("active");
		$("#handicap").addClass("active");
	});
	$("#btn-reglement").click(function () {
		$("section").removeClass("active");
		$("#reglement").addClass("active");
	});
	$("#btn-faq").click(function () {
		$("section").removeClass("active");
		$("#faq").addClass("active");
	});
	//Accordeon
	$(".accordion").click(function () {
		$(this).toggleClass("acctive");
		$(this).next().toggleClass("ouvert");
	});
	//test apparition
	const alllinks = document.querySelectorAll("ul li");

	alllinks.forEach((link) => {
		const location = link.getAttribute("data-loc");

		link.addEventListener("mouseenter", () => {
			cursor.classlist.add("hovered");
			cursor.style.backgroundImage = "url(img/${location}.webp";
		});
	});
});

