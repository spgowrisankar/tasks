
window.onscroll = function(){
  stickyFuntion();
}
var stickyNavbar =  document.getElementById('header-navbar');
var stickyValue = stickyNavbar.offsetTop;
console.log(stickyValue);

function stickyFuntion() {
  if (window.pageYOffset >= stickyValue) {
    stickyNavbar.classList.add("sticky-active");
  }
  else {
    stickyNavbar.classList.remove("sticky-active");

  }
}
function toggleMenu() {
  var menu_toggle = document.querySelector('.hamburger-menu');
  menu_toggle.classList.toggle('menu-open');

  var main_menu = document.getElementById('main-menu');
  var utility_menu = document.getElementById('utility-nav');
  console.log(utility_menu);
  if (main_menu.style.display === "" ) {
    main_menu.style.display = "block";
  }
  else {
    main_menu.style.display = "";
  }

  if (utility_menu.style.display === "" ) {
    utility_menu.style.display = "block";
  }
  else {
    utility_menu.style.display = "";
  }
  console.log(main_menu);
  console.log(utility_menu);
}

function windowSize() {
  var main_menu = document.getElementById('main-menu');
  var utility_menu = document.getElementById('utility-nav');
  var form_search = document.getElementById('search-form');
  var header_value = document.querySelector('.header-top')
  var size = screen.width;
  if (size < 1000) {
    main_menu.append(utility_menu);
    utility_menu.append(form_search);
  }
  else {
    utility_menu.prepend(form_search);
    header_value.append(utility_menu);
  }
}
window.addEventListener("resize", windowSize);
window.addEventListener("load", windowSize);

function subMenu() {
  var sub_menu1 = document.querySelector('.sub-menu-cover');
  if ((sub_menu1.style.display === "") || (sub_menu1.style.display === "none")) {
    sub_menu1.style.display = "block";
  }
  else {
    sub_menu1.style.display = "none";
  }
}
function sprMenu(){
  var sub_menu2 = document.querySelector('.sub-menu-level-2');
  if ((sub_menu2.style.display === "") || (sub_menu2.style.display === "none")) {
    sub_menu2.style.display = "block";
  }
  else {
    sub_menu2.style.display = "none";
  }
}
function megaMenu() {
  var mega_menu = document.querySelector('.mega-menu-cover');
  if ((mega_menu.style.display === "") || (mega_menu.style.display === "none")) {
    mega_menu.style.display = "block";
  }
  else {
    mega_menu.style.display = "none";
  }
}

window.smoothScroll = function(target) {
var scrollContainer = target;
do { //find scroll container
    scrollContainer = scrollContainer.parentNode;
    if (!scrollContainer) return;
    scrollContainer.scrollTop += 1;
} while (scrollContainer.scrollTop == 0);

var header = document.querySelectorAll('.main-header');
console.log(header);
var space = header[0].offsetHeight;
console.log(space);
var targetY = -space;
console.log(targetY);
do { //find the top of target relatively to the container
    if (target == scrollContainer) break;
    targetY += target.offsetTop;
} while (target = target.offsetParent);

scroll = function(c, a, b, i) {
    i++; if (i > 30) return;
    c.scrollTop = a + (b - a) / 30 * i;
    setTimeout(function(){ scroll(c, a, b, i); }, 20);
}
// start scrolling
scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
// var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
// console.log(width);
// if(width >= 1000){
//   alert("hello");
// }
// var x = screen.availWidth;
//   var main_menu = document.getElementById('main-menu');
//   var utility = document.getElementById('utility-nav');
//   var form_search = document.getElementById('search-form');
// if (x < 1000) {
//     utility.appendChild(form_search);
//     main_menu.appendChild(utility);
//   }
// console.log(x);

// document.addEventListener('DOMContentLoaded', init);
//
// function init() {
//   let query = window.matchMedia("(min-width: 1000px)");
//   var main_menu = document.getElementById('main-menu');
//   var utility = document.getElementById('utility-nav');
//   var form_search = document.getElementById('search-form');
//   if (query.matches) {
//     utility.appendChild(form_search);
//     main_menu.appendChild(utility);
//   }
//   else {
//     utility.appendChild(form_search);
//     main_menu.appendChild(utility);
//   }
// };
// var main_menu = document.getElementById('main-menu');
// var utility = document.getElementById('utility-nav');
// var form_search = document.getElementById('search-form');
//
// main_menu.appendChild(utility);
// utility.appendChild(form_search);
// main_menu.prependChild(utility);
//(function() {
	/*function scrollToSimple(element, to, duration) { //FIXME finish this
		if (duration < 0) return;
		var difference = to - element.offsetTop;
		var perTick = difference / duration * 10;
		console.log('perTick', perTick); //DEBUG

		setTimeout(function() {
			console.log('element.scrollTop:', element.scrollTop); //DEBUG
			element.scrollTop += perTick;
			console.log('element.scrollTop:', element.scrollTop); //DEBUG
			scrollTo(element, to, duration - 10);
		}, 10);
	}*/
