var modal = document.querySelector(".modal");

function imageChanger(source) {
	var imageBox = document.querySelector("#main-image");
	imageBox.src = source.src;
}

function fullScreenImage() {
	var modalImage = document.querySelector("#modal-image");
	var mainImage = document.querySelector("#main-image");
	modal.style.display = "block";
	modalImage.src = mainImage.src;
}

function closeModalBox() {
	modal.style.display = "none";
}

