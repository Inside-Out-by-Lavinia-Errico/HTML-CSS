$(document).ready(function(e) {
	
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 700);
			return false;
		  }
		}
	  });
	});

	// menu and logo functionality
	var logoUrl = "images/icons/"
	var deafultLogo = $('#ham-menu').attr('data-logo');
	var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	
	$('#ham-menu').click(function(){
		$(this).toggleClass('open');
		
		// menu functions
		if($(this).hasClass('open')) {
			$('#menubar').show();
			$('#io_logo').attr('src', logoUrl + 'logo_pink.png');
			$('html').addClass('ishidden');

			scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
			scrollTop = window.pageYOffset || document.documentElement.scrollTop;

			window.scrollTo(0,0);

		}else {

			$('#menubar').hide();
			$('#io_logo').attr('src', logoUrl + deafultLogo + '.png');
			$('html').removeClass('ishidden');

			window.scrollTo(scrollLeft, scrollTop);
		}
	});

	/*

	$(window).scroll(function(){
	   
		var currentScroll = $(this).scrollTop();

		if (currentScroll >=45 ) {	
			$("[data-nav-status='toggle']").removeClass("is-chaser fadeInDown fadeOutUp").addClass("is-chaser fadeInDown");
			$("[data-nav-inner='toggle']").removeClass("nav-chaser").addClass("nav-chaser");
			
			$('#io_logo').attr('src', logoUrl + 'logo_black.png');
		}

		if (currentScroll <= 45){
			$("[data-nav-status='toggle']").removeClass("is-chaser fadeOutUp fadeInDown");
			$("[data-nav-inner='toggle']").removeClass("nav-chaser");

			$('#io_logo').attr('src', logoUrl + deafultLogo + '.png');
		}
	
	});

	*/

	// accordion design
	var acc = document.getElementsByClassName("accordion");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
			panel.style.display = "none";
			} else {
			panel.style.display = "block";
			}

			jQuery(window).trigger('resize').trigger('scroll');
		});
	}

	/* Custom selection */
	var x, i, j, selElmnt, a, b, c;
	/*look for any elements with the class "custom-select":*/
	x = document.getElementsByClassName("custom-select");
	for (i = 0; i < x.length; i++) {
	selElmnt = x[i].getElementsByTagName("select")[0];
	/*for each element, create a new DIV that will act as the selected item:*/
	a = document.createElement("DIV");
	a.setAttribute("class", "select-selected");
	a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	x[i].appendChild(a);
	/*for each element, create a new DIV that will contain the option list:*/
	b = document.createElement("DIV");
	b.setAttribute("class", "select-items select-hide");
	for (j = 1; j < selElmnt.length; j++) {
		/*for each option in the original select element,
		create a new DIV that will act as an option item:*/
		c = document.createElement("DIV");
		c.innerHTML = selElmnt.options[j].innerHTML;
		c.addEventListener("click", function(e) {
			/*when an item is clicked, update the original select box,
			and the selected item:*/
			var y, i, k, s, h;
			s = this.parentNode.parentNode.getElementsByTagName("select")[0];
			h = this.parentNode.previousSibling;
			for (i = 0; i < s.length; i++) {
			if (s.options[i].innerHTML == this.innerHTML) {
				s.selectedIndex = i;
				h.innerHTML = this.innerHTML;
				y = this.parentNode.getElementsByClassName("same-as-selected");
				for (k = 0; k < y.length; k++) {
				y[k].removeAttribute("class");
				}
				this.setAttribute("class", "same-as-selected");
				break;
			}
			}
			h.click();
		});
		b.appendChild(c);
	}
	x[i].appendChild(b);
	a.addEventListener("click", function(e) {
		/*when the select box is clicked, close any other select boxes,
		and open/close the current select box:*/
		e.stopPropagation();
		closeAllSelect(this);
		this.nextSibling.classList.toggle("select-hide");
		this.classList.toggle("select-arrow-active");
		});
	}
	
	function closeAllSelect(elmnt) {
		/*a function that will close all select boxes in the document,
		except the current select box:*/
		var x, y, i, arrNo = [];
		x = document.getElementsByClassName("select-items");
		y = document.getElementsByClassName("select-selected");
		for (i = 0; i < y.length; i++) {
			if (elmnt == y[i]) {
			arrNo.push(i)
			} else {
			y[i].classList.remove("select-arrow-active");
			}
		}
		for (i = 0; i < x.length; i++) {
			if (arrNo.indexOf(i)) {
			x[i].classList.add("select-hide");
			}
		}
	}
	/*if the user clicks anywhere outside the select box,
	then close all select boxes:*/
	document.addEventListener("click", closeAllSelect);

	// form submission 
	$('#formsubmit').click(function () {
		var htmlform = document.getElementById('booklavinia');
		var goahead = Validation (htmlform);

		if (goahead) {
			
			$('#formsubmit').addClass('loader');
			$('#formsubmit').html('');

			// form order-> 
			var count = htmlform.elements.length;
			var formdata = [];

			for (i=0; i<count; i++) {
				formdata[i] = htmlform.elements[i].value;
			}

			var jsondata = JSON.stringify(formdata);
			
			/* load new page */
			var url = 'php/contact.php';
			var xhttp;

			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {

					$('#formsubmit').removeClass('loader');
					$('#formsubmit').html('SUBMIT');

					/* success */
					var data = this.response;

					alert('Thank you for contacting us!');

					window.location = "index.php";

				}
			};

			xhttp.open("POST", url, true);
			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
			xhttp.send('mydata='+jsondata);


		}else {
			alert ('Error! Something is missiong!');
		}
	});


	// email subscription 


	// form validation
	function Validation (htmlform) {
		var htmlform, length, i, j, t, v, n, nd, max, min, move=true;
		length = htmlform.elements.length;
		
		for (i=0;i<length;i++) {

			t = htmlform.elements[i].getAttribute('data-type');
			v = htmlform.elements[i].value;
			n = htmlform.elements[i].getAttribute('id');
			nd = document.getElementById(n);

			nd.classList.remove('bl-error', 'bl-success');

			if (t == "len") {
				max = htmlform.elements[i].getAttribute('data-max');
				if (v.length < max) {
					nd.classList.add('bl-error');
					return false;
				}else {
					nd.classList.add('bl-success');
				}
			}else if (t == "select") {
				if (v == "-1") {
					nd.classList.add('bl-error');
					$('.select-selected').addClass('bl-error');
					return false;
				}else {
					nd.classList.add('bl-success');
					$('.select-selected').addClass('bl-success');
				}
			}else if (t == "email") {
				var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
				if (!pattern.test(v)) {
					nd.classList.add('bl-error');
					return false;
				}else {
					nd.classList.add('bl-success');
				}
			}
		}

		return true;
		
	}

	$("#owl-example").owlCarousel({
		items : 6,

		autoPlay : true,
		stopOnHover : false,
		
		navigation : false,
		pagination : false,

		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window

	});

	$("#owl-example-testi").owlCarousel({
		autoPlay : true,
		stopOnHover : false,
		
		navigation : false,
		pagination : true,

		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,

		singleItem:true

	});

	/** experts filter jquery */
	$('ul.exfilter > li').click(function (e) {		
		var type = this.getAttribute('data-type');
		filterExperts (type);

		var li = $('ul.exfilter li');
		li.removeClass('active')
		for (var i = 0; i < li.length; i++) {
			if (li[i].getAttribute('data-type') == type) {
				li[i].classList.add('active');
			}
		}
	});

	function filterExperts (input) {

		var input, filter, ul, li, i, txtValue;
		filter = input.toUpperCase();

		li = $('ul.exrsltfilter li');

		if (input == "all") {
			li.show ();
			return;
		}

		for (i = 0; i < li.length; i++) {
			txtValue = li[i].getAttribute('data-type');
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				li[i].style.display = "";
			} else {
				li[i].style.display = "none";
			}
		}
	}

});