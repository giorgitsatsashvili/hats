var btnNext = document.getElementById("btn-next");
var btnPrev = document.getElementById("btn-prev");
var wrap = document.querySelector(".owl-div");
var boxes = document.querySelectorAll(".product-box");
var pix = 0;

// var demo = document.getElementById("demo");
// var bttt = document.getElementById("bttt");
// var pressed = document.getElementById("pressed");

//console.log(pix);
btnNext.addEventListener("click", function () {
	if(pix === -2) pix = 1;
	wrap.style.transform = "translateX(" + (--pix) * (300) + "px)";
	
	//console.log(pix);
});

btnPrev.addEventListener("click", function () {
	if(pix === 0) pix = -3;
	wrap.style.transform = "translateX(" + (++pix) * (300) + "px)";
	
	//console.log(pix);
});
