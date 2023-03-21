<script src="scripting/aos.js?t=1"></script>

<script type="text/javascript">

// Initialize Animate On Scroll animations
AOS.init();

</script>

<script>
// Projects slider
$(".projects-slider .paging-next").click(function() {
	console.log("Next");
	const parentWidth = $(".projects-slider").width(); // get the width of the parent element
	const $sliderUl = $(".projects-slider ul");
	const currentScroll = $sliderUl.scrollLeft(); // get the current scroll position
	const maxScroll = $sliderUl[0].scrollWidth - parentWidth; // get the maximum scroll position
	
	if (currentScroll >= maxScroll) {
		$sliderUl.animate({scrollLeft: 0}, "fast"); // scroll back to the first item
	} else {
		$sliderUl.animate({scrollLeft: "+=" + parentWidth / 2}, "fast"); // scroll to the next item
	}
});

</script>
