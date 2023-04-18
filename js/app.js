// slider 

autoSlider();
var timer;
var left = 0;

function autoSlider(){
    timer = setTimeout(function(){
        const polosa = document.querySelector(".slider-line");
        left = left - 400;
        if(left < -1200){
            left = 0;
        };
        polosa.style.left = left + "px";
        autoSlider();
    },5000)
};

// arrowUp прокрутка страницы вверх


window.onload = function(){
    document.getElementById('arrowUp').onclick = function(){
        window.scrollTo(0, 0);
    }    
};

// form to email

$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "send.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Савсибо!Ваш запрос отправлен");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});

// burger menu

let burgerbtn = document.querySelector(".burger-btn");
let burgermenu = document.querySelector(".burger-menu");

burgerbtn.addEventListener('click', function(){
    burgerbtn.classList.toggle ('active');
    burgermenu.classList.toggle ('active');
});

