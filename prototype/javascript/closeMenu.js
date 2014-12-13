function closeMenu(menu_button)
{
	('../add_ingredients.html').ready( function(){

    	('menu_button').click( function(event){
        	event.stopPropagation();
        	('menu').toggle();
   	 });
    	('../add_ingredients.html').click(function() {
			('menu_button').hide();
		});

    	('../add_ingredients.html').click( function(){
        	('menu_button').hide();
    	});
	});
}