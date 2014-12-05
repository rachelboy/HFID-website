function Meal(title,image, categories, coupons) {
  this.meal_title = title;
  this.img = image;
  this.categories = categories;
  this.servings = 4;
  this.coupons = coupons
}

meals = [];

meals[0] = new Meal("Stovetop Lasagna", "images/lasagna.jpg", ["favorites"], 3);
meals[1] = new Meal("Tomato Soup", "images/soup.png", ["favorites"], 3)

function prep_for_compare(str){
	return str.toLowerCase().split(" ");
}

function get_query(){
	var form = document.getElementById('form');
	var query = prep_for_compare(form.query.value);
	return query;
};

function prep_for_search(meals){
	prepped_meals = [];
	for(var i=0; i<meals.length; i++){
		var title = prep_for_compare(meals[i].meal_title);
		var image = meals[i].img;
		var categories = meals[i].categories;
		var servings = meals[i].servings;
		var coupons = meals[i].coupons
		prepped_meals.push([title,image,categories,servings,coupons]);
	}
	return prepped_meals;
}

function eliminateDuplicates(arr) {
  var i,
      len=arr.length,
      out=[],
      obj={};

  for (i=0;i<len;i++) {
    obj[arr[i]]=0;
  }
  for (i in obj) {
    out.push(i);
  }
  return out;
}

function search(meals, query){
	results = [];
	for(var i=0; i<query.length; i++)
	for(var j=0;j<meals.length; j++)
	for(var z=0; z<meals[j][0].length; z++){
		if(query[i] == meals[j][0][z])
			results.push(meals[j]);
	}

	print(eliminateDuplicates(results));
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

function add_meal(title, src, coupons,servings){
	var parent = document.getElementById("meals");
	var meal = document.createElement("div");
	div.class = "meal";
	var title = document.createElemtent("h2");
	title.innerHTML = "title".join();
	var image = document.createElement('img');
	image.src = src;
	var coupons = document.createElement('p');
	coupons.innerHTML = "Availble Coupons:" + coupons;
	var servings = document.createElement('p');
	servings.innerHTML = "Servings:" + servings;
	parent.appendChild(meal);
	meal.appendChild(title);
	meal.appendChild(image);
	meal.appendChild(coupons);
	meal.appendChild(servings);

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