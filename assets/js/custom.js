
$(function () {
  $(document).scroll(function () {
	 var $nav = $(".bg-clear");
	 $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
