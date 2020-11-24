//window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 380 || document.documentElement.scrollTop > 380) {
//   	document.getElementById("head").style.backgroundColor ="white";
//   	document.getElementById("head").style.boxShadow = "0 0 5px 3px rgba(0,0,0,.15)";
//     document.getElementById("head").style.padding = "30px 10px";
//     document.getElementById("head").style.fontSize = "15px";
//   } else {
//   	document.getElementById("head").style.backgroundColor ="rgba(255, 255, 255, .5)";
//     /*document.getElementById("head").style.padding = "80px 10px";
//     document.getElementById("head").style.fontSize = "1em";*/
//   }
// }

$('.hamburger').click(function(){
	$(this).find('i').toggleClass('fas fa-bars fa fa-times');
	$('#head').toggleClass('collapse-height');
  $('.navbar-menu').toggle(1000);
})

$('.nav-drop-menu').click(function(){
	$(this).next().toggle();
})

$('.about-img img').on('mouseover', function(){
	$('.founder-description').addClass('show-description')
})
$('.about-img img').on('mouseleave', function(){
	$('.founder-description').removeClass('show-description')
})
