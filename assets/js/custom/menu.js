"use strict";

var menuOpen = document.getElementsByClassName("triggerb-container")[0];
menuOpen.addEventListener("click", activateMenu);

function activateMenu() {
	this.classList.toggle("active");
	var erOverlay = document.getElementsByClassName("er-overlay")[0];
	var erOpenpanel = document.getElementById("openpanel");

	if(this.classList.contains("active")) {
		
		erOverlay.classList.add("active");
		erOpenpanel.classList.add("active");
		
	} else {
		
		erOverlay.classList.remove("active");
		erOpenpanel.classList.remove("active");

	}
	
	
}
