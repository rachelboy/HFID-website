function toggle(element)
{
    var menu=document.getElementById(element);
    menu.style.display = (menu.style.display === 'block') ? 'none':'block';
}

function show(element)
{
    var menu=document.getElementById(element);
    menu.style.display = 'block';
}

function add(image){
	var image=document.getElementById(image);
    image.src = (image.src="images/add.png") ? 'images/check.png': 'images/add.png'
 }


 







 /* the uncheck isn't working, tried this, but no go :(  var image=document.getElementById('ingredientimage1');
   if(image.src = menu.src="images/add.png"){
   		image.src="images/check.png"
   } 
   else{
   	uncheck(image)
   }
 }

function uncheck(image){
	if(image.src="images/check.png"){
		image.src='images/add.png'
	}
}

*/


 