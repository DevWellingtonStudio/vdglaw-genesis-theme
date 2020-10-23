

$('.parallax-window').parallax({
  naturalWidth: 600,
  naturalHeight: 400
});

$(function () {
  $(document).scroll(function () {
	 var $nav = $(".bg-clear");
	 $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
