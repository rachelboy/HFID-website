function toggle(element)
{
    var menu=document.getElementById(element);
    menu.style.display = (menu.style.display === 'block') ? 'none':'block';
}

function show(element)
{
    console.log("hello");
    var menu=document.getElementById(element);
    menu.style.display = 'block';
}

function add(image){
	var image=document.getElementById(image);
  	image.src = (image.src.slice(-7,-4)==="add") ? 'images/check.png': 'images/add.png';
 }

function get_all_ingredients(){
	all_ingredients = []
	for(var i=1; i<=6; i++){
		all_ingredients.push("ingredientimage" + i);
	}
	return(all_ingredients);
}
	
function add_all_ingredients(all_ingredients){
	for(var i=0; i<=all_ingredients.length; i++){
		add(all_ingredients[i]);
	}
}


