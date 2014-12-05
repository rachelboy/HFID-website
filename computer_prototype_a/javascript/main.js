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
  console.log(image.src.slice(-7,-4));
  image.src = (image.src.slice(-7,-4)==="add") ? 'images/check.png': 'images/add.png';
 }


 









 