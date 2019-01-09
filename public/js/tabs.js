function hideAllTabs() {
	var content = $(".tab-content-container");
	var btn = $(".tab-link");

	for(var i = 0; i < content.length; i++) {
		content.css("display", "none");
	}
	for(var i = 0; i < btn.length; i++) {
		btn[i].classList.remove("tab-link-active");
	}
}

hideAllTabs();

function initTab() {
	var tab = $(".tab-content-container");
	var btn = $(".tab-link");
	tab[0].style.display = "block";
	btn[0].classList.add("tab-link-active");
}

initTab();

function switchTabs(index) {
	
		var tab = $(".tab-content-container");
		var btn = $(".tab-link");
		hideAllTabs();
		tab[index].style.display = "block";
		btn[index].classList.add("tab-link-active");	
}