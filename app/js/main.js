 "use strict";

/*---------------------------------------------------------------

						next question
						
----------------------------------------------------------------*/
function nextButton(button, form) { 

	var list = document.querySelectorAll(".test-questions > li");
	
		list[0].classList.add('active');
		var current = 0;


 	function forward() {

 		var activeLi = document.querySelectorAll('.test-questions li.active');
 		//console.log(activeLi);
 		var xx = document.querySelectorAll('.test-questions li.active input');
 		debugger;

		for (var i = 0; i <= list.length; i++) {

					// if nothing selected
					// getting inputs which are visible
				var idRad = "input[id^='q-"+(current+1)+"-";
				
				
				var radiosVisible = document.querySelectorAll(idRad);
				

				if (radiosVisible[0].checked == false && radiosVisible[1].checked == false ) {alert('ddd'); break;}
				

				if (radiosVisible[0].checked || radiosVisible[1].checked ) {

		       		if (list[i].classList.contains('active')) {
						list[i].classList.remove('active');
						current = i + 1;
						//break;
					}


					list[current].classList.add('active');

					if (current == (list.length - 1)) {
						document.querySelector(button).classList.add('hidden');
					}

		    	} 
				
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