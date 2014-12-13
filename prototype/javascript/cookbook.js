meals = [];

meals[0] = [prep_for_compare("Stovetop Lasagna"), "images/lasagna.jpg", "affordable",4, 3,"lasagna_recipe.html", "ingredients_lasagna.html"];
meals[1] = [prep_for_compare("Tomato Soup"), "images/soup.png", "price",4, 3,"tomato_soup_.html", ]
meals[2] = [prep_for_compare("Braised Red Cabbage"), "images/cabbage.jpg", "healthy", 4, 2, "cabbage_recipe.html","ingredients_cabbage.html"];
meals[3] = [prep_for_compare("Barbecue Steak"), "images/bbqsteak.jpg", "coupons", 4, 5, "bbqsteak_recipe.html","ingredients_bbqsteak.html"];
meals[4] = [prep_for_compare("Black Bean Burger"), "images/veggieburger.jpg", "healthy", 4, 3, "veggieburger_recipe.html","ingredients_veggieburger.html"];
meals[5] = [prep_for_compare("Insalata Caprese"), "images/caprese.jpg", "Favorites", 4, 1, "caprese_recipe.html","ingredients_caprese.html"];
meals[6] = [prep_for_compare("Egg in a Boat"), "images/egginaboat.jpg", "affordable", 1, 0, "egginaboat_recipe.html","ingredients_egginaboat.html"];
meals[7] = [prep_for_compare("Chicken Enchiladas"), "images/enchiladas.jpg", "coupons", 4, 3, "enchiladas_recipe.html","ingredients_enchiladas.html"];
meals[8] = [prep_for_compare("Pumpkin Pie"), "images/pumpkinpie.jpg", "Favorites", 4, 2, "pumpkinpie_recipe.html","ingredients_pumpkinpie.html"];
meals[9] = [prep_for_compare("Feta Omelette"), "images/omelette.jpg", "coupons", 4, 5, "omelette_recipe.html","ingredients_omelette.html"];
meals[10] = [prep_for_compare("Spaghetti Squash"), "images/squash.jpg", "coupons", 4, 5, "squash_recipe.html","ingredients_squash.html"];



function prep_for_compare(str){
	return str.toLowerCase().split(" ");
}

function get_query(){
	var form = document.getElementById('form');
	var query = prep_for_compare(form.query.value);
	return query;
};


function eliminateDuplicates(arr) {
	dup_free = []
	for(var i=0; i<arr.length; i++){
		if (dup_free.indexOf(arr[i]) == -1){
			dup_free.push(arr[i])
		}
	}
	return dup_free
}
 

function search(meals, query){
	results = [];
	for(var i=0; i<query.length; i++)
	for(var j=0;j<meals.length; j++)
	for(var z=0; z<meals[j][0].length; z++){
		if(query[i] == meals[j][0][z])
			results.push(meals[j]);
	}

	return eliminateDuplicates(results);
};

function sort(meals){
	results = [];
	category = document.getElementById("top_button_one").value;
	for(var i=0; i<meals.length; i++){
		if (meals[i][2] == category){
			results.push(meals[i])
		}
	}
	return results;
}

function clear_page(){
	var parent = document.getElementById("screen");
	var child = document.getElementById("meals");
	parent.removeChild(child);
};

function set_content(){
	var parent = document.getElementById("screen");
	var child = document.createElement("div");
	child.id = "meals";
	parent.appendChild(child);
}

function no_results(){
	set_content();
	var parent = document.getElementById("meals");
	var message = document.createElement("p");
	message.innerHTML = "No results found";
	parent.appendChild(message);
	return;
}

function add_meal(food){
	var meals = document.getElementById("meals");
	var meal = document.createElement("div");
	meal.className = "meal";
	
	var recipe_link = document.createElement("a");
	recipe_link.href = food[5];
	
	var meal_description = document.createElement('div');
	meal_description.className = "meal_description";
	var image = document.createElement('img');
	image.src = food[1];
	meal_description.appendChild(image);
	
	var meal_desc_text = document.createElement('div');
	meal_desc_text.className = "meal_desc_text";
	var title = document.createElement("h2");
	title.innerHTML = food[0].join(" ");
	var coupons = document.createElement('p');
	coupons.innerHTML = "Availble Coupons:" + food[4];
	var servings = document.createElement('p');
	servings.innerHTML = "Servings:" + food[3];
	meal_desc_text.appendChild(title);
	meal_desc_text.appendChild(coupons);
	meal_desc_text.appendChild(servings);
	
	meal_description.appendChild(meal_desc_text);
	recipe_link.appendChild(meal_description);
	meal.appendChild(recipe_link);
	
	
	
	var final_div = document.createElement('div');
	final_div.className = "add_button";
	

	var button_link = document.createElement("a");
	button_link.href = food[6];
	
	var add_to_list = document.createElement('button');
	add_to_list.innerHTML = "Add to List";
	
	button_link.appendChild(add_to_list);
	meal.appendChild(button_link);
	meal.appendChild(final_div);
	

	
	
	meals.appendChild(meal);
	
	
}

function publish(results){
	clear_page();
	if (results.length === 0){
		no_results();
	}
	set_content();
	for(var i=0; i<results.length; i++){
		add_meal(results[i]);
	}
}

function print(x){
	console.log(x);
}