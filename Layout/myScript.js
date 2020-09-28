window.addEventListener('load', function () {

});

/************************ backgroundColor ******************************/
var red = function () { document.body.style.backgroundColor = "red"; }
function green() { document.body.style.backgroundColor = "green"; }
function blue() { document.body.style.backgroundColor = "blue"; }
var orange = function () { document.body.style.backgroundColor = "orange"; }
var init = function () { document.body.style.backgroundColor = "#f1f1f1"; }

/*************************** Font-Size**********************************/
var small = function () { document.body.style.fontSize = "small" }
var medium = function () { document.body.style.fontSize = "medium" }
var big = function () { document.body.style.fontSize = "x-large" }


/******************** Galary slides show for "HOME" page [javaScript] **************************/
var imageArray = ["./images.img1.jpg", "./images/img2.jpg", "./images/img3.jpg","./images/img4.jpg", "./images/img5.jpg", "./images/img6.jpg"];

function image_1(){
  document.getElementById("screen").src = imageArray[0];
}

function image_2(){
  document.getElementById("screen").src = imageArray[1];
}
function image_3(){
  document.getElementById("screen").src = imageArray[2];
}
function image_4(){
  document.getElementById("screen").src = imageArray[3];
}
function image_5(){
  document.getElementById("screen").src = imageArray[4];
}
function image_6(){
  document.getElementById("screen").src = imageArray[5];
}



/******************** Galary animation for "about" page [jQuery] **************************/
var touristSportArray = ["./touristSpot.montreal.jpg", "./touristSpot/quebec.jpg", "./touristSpot/miami.jpg","./images/portugal.jpeg"];

/***************************************************************************************/
$(document).ready(function(){

  

  //mouseenter for montreal
	$('#montreal').mouseenter(function(){		
    $(this).css({'width': '250px','height': '250px'});	
    $('#h4_text').text('I have used "mouseenter()" and "mouseleave()" and css() for Montreal');
  });

   // mouseleave for montreal 
   $('#montreal').mouseleave(function(){	
    $(this).css({'width': '150px','height': '150px',});	
 });
 
/***************************************************************************************/

//mouseup for quebec
$('#quebec').mouseup(function(){
  $(this).css({'border':'red solid 0px','margin-left':'0px'});
  $('#h4_text').text('I have used "mouseup()" and "mousedown()" and "css()" for Quebec City');		
});

//mousedown for quebec
$('#quebec').mousedown(function(){
  $(this).css({'margin-left':'50px','border':'red solid 2px'});
});

/***************************************************************************************/

//fadeTo for miami
$('#miami').click(function(){
  $(this).fadeTo(2000,0.3);
  $('#h4_text').text('I have used "click()" and "fadeTo()" for Miami City');	
});

//come back original color with double click
$('#miami').click(function(){
  $(this).fadeTo(1000,1);
});

/***************************************************************************************/

//Double click to animate decrease width
$('#portugal').dblclick(function(){
  $(this).animate({width:'30px'}, 1000);
  $('#h4_text').text('I have used "dblclick()" and "click()" and "animate()" for Portugal');
    
});	

//click to animate increase width
$('#portugal').click(function(){
  $(this).animate({width:'150px'}, 1000);
    
});	



});

