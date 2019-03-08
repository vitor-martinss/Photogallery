/*!
 * Minify by http://www.MinifyWeb.com/
 */
function mostra(){estado=document.getElementById('js-bars').style.display;if(estado=='block'){document.getElementById('js-bars').style.display='none';}else{document.getElementById('js-bars').style.display='block';}}
var slideIndex=0;showSlides();function plusSlides(n){showSlides(slideIndex+=n);}
function showSlides(){var i;var slides=document.getElementsByClassName("mySlides");for(i=0;i<slides.length;i++){slides[i].style.display="none";}
slideIndex++;if(slideIndex>slides.length){slideIndex=1}
slides[slideIndex-1].style.display="block";setTimeout(showSlides,5000);}
lightbox.option({'resizeDuration':400,'wrapAround':true,'imageFadeDuration':500,})