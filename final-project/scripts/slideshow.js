$(document).ready(function() {
	var images = ["images/cover-photo1.jpg", "images/cover-photo2.jpg", "images/cover-photo3.jpg", "images/cover-photo4.jpg"];

	var currentImageIndex = 0;

	var FIRST_IMAGE_INDEX = 0;
	var LAST_IMAGE_INDEX = images.length - 1;

	$("#left").click(function() {
		if (currentImageIndex > FIRST_IMAGE_INDEX) {
			currentImageIndex = currentImageIndex - 1;
		} else {
			currentImageIndex = LAST_IMAGE_INDEX;
		}
		$("#current_img").attr("src", images[currentImageIndex]);
	});

	$("#right").click(function() {
		if (currentImageIndex < LAST_IMAGE_INDEX) {
			// move to next image
			currentImageIndex = currentImageIndex + 1;
		} else {
			currentImageIndex = FIRST_IMAGE_INDEX;
		}
		$("#current_img").attr("src", images[currentImageIndex]);
	});
});
