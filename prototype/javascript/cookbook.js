meals = [];

meals[0] = [prep_for_compare("Stovetop Lasagna"), "images/lasagna.jpg", ["favorites"],4, 3,"lasagna_recipe.html"];
meals[1] = [prep_for_compare("Tomato Soup"), "images/soup.png", ["favorites"],4, 3,"tomato_soup.html"]

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
	var parent = document.getElementById("meals");
	var meal = document.createElement("div");
	meal.class = "meal";
	

	var recipe_link = document.createElement("a");
	recipe_link.href = food[5];
	meal.appendChild(recipe_link);

	
	var meal_description = document.createElement('div');
	meal_description.class = "meal_description";
	meal.appendChild(meal_description);

	var image = document.createElement('img');
	image.src = food[1];
	meal.appendChild(image);
	

	var meal_desc_text = document.createElement('div');
	meal_desc_text.class = "meal_desc_text";
	meal.appendChild(meal_desc_text);
	var title = document.createElement("h2");
	title.innerHTML = food[0].join(" ");
	var coupons = document.createElement('p');
	coupons.innerHTML = "Availble Coupons:" + food[4];
	var servings = document.createElement('p');
	servings.innerHTML = "Servings:" + food[3];
	meal.appendChild(title);
	meal.appendChild(image);
	meal.appendChild(coupons);
	

	var add_to_list = document.createElement('button');
	coupons.innerHTML = "Add to List";
	meal.appendChild(add_to_list);
	
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