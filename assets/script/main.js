jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 20) {
			$("header").addClass("darkHeader");
		} else if (scroll < 20) {
			$("header").removeClass("darkHeader");
		}
	});

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

	$(".btn-menu").click(function () {
		$(".menu").addClass("open");
	});
});
