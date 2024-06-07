jQuery(document).ready(function($) { 
	$('ul.top-menu li:has(ul.sub-menu) > a').append('<i class="fas fa-chevron-down"></i>');
	$('ul.menu_with_border li:last-child a').addClass('btn-border');
});


window.onload = () => {
	let buttons = document.getElementsByClassName("button_popup");
	let titles = document.getElementsByClassName("popup_title");
	let texts = document.getElementsByClassName("popup_text");
	let texts_below = document.getElementsByClassName("popup_text_below");
	let title = document.getElementById("popup_title");
	let text = document.getElementById("popup_text");
	let text_below = document.getElementById("popup_text_below");
	if (buttons.length > 0) {
		for (let i = 0; i < buttons.length; i++) {
			buttons[i].onclick = function(){
				title.innerHTML = titles[i].innerHTML;
				text.innerHTML = texts[i].innerHTML;
				text_below.innerHTML = texts_below[i].innerHTML;
			};
		}
	}
};