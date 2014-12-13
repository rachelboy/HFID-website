function add_ingredient()
{
    var name=document.getElementById('ingredientname');
    var num=document.getElementById('ingredientnum');
    var units=document.getElementById('ingredientunits')
    var added_names = document.getElementById('names');
    var added_nums = document.getElementById('quantities');

    added_names.innerHTML = added_names.innerHTML + "<p>" + name.value + "</p>";
    added_nums.innerHTML = added_nums.innerHTML + "<p>" + String(num.value) + " " + units.value + "\n</p>";

    name.value="";
    num.value ="";
    units.value="";

    name.placeholder = "next ingredient";
    num.placeholder = 0;
    units.placeholder = "units";
}