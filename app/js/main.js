 "use strict";

/*---------------------------------------------------------------

						next question
						
----------------------------------------------------------------*/
function nextButton(button, form) { 

	var list = document.querySelectorAll(".test-questions > li");
	
		list[0].classList.add('active');
		var current = 0;


 	function forward() {

 		var radiosVisible = document.querySelectorAll('.test-questions li.active input');

 		if (radiosVisible[0].checked == false && radiosVisible[1].checked == false ) {alert('Выберите ответ!');}

		if (radiosVisible[0].checked || radiosVisible[1].checked ) {

			var activeLi = document.querySelector('.test-questions li.active');
 			activeLi.classList.remove('active');

 			var nextLi = activeLi.nextElementSibling;
 			nextLi.classList.add('active');
 			current++;
		}

		if (current == (list.length - 1)) {
			document.querySelector(button).classList.add('hidden');
		}

	}

	document.querySelector(button).onclick = forward;
		
// enter key  
	document.querySelector(form).onkeypress = function(e) {
		var key = e.charCode || e.keyCode || 0;     
		if (key == 13) {
			//forward();
			e.preventDefault();
		}
	}
}