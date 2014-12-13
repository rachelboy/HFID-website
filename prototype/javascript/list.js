function showDropdown(){
    // console.log("OIOIEWNOWIEFN");
    var inputbox = document.getElementById('form');
    var input = document.getElementById('query').value;
    console.log(input);
    var pos = inputbox.getBoundingClientRect();
    var dropdown=document.getElementById('cookie_popup');
    if (input === ""){
        dropdown.style = 'none';
    }
    else{
        var style = dropdown.style;
    style.top = pos.bottom + 'px';
    style.left = pos.left + 'px';
    style.display = 'block';
    }
}

function addListItem(name, coupons){
    // console.log("WAZZUP");
    // console.log(name);
    
    var element = document.createElement("div");
    element.setAttribute("class", "listItem");
    element.setAttribute("onclick","crossoff(id)");
    element.setAttribute("id",name);
    element.innerHTML = '<h2><input type="checkbox">'+name+'</h2> <div class="extras"> <p class="coupons"><a href="coupons.html">'+coupons+'</a></p> <p class="remove">X</p>  </div> <div style="clear:both"></div>';
    
    var list = document.getElementById('listDiv');
    var lastitem = list.children.length - 1;
    list.insertBefore(element,list.children[lastitem]);

    document.getElementById('cookie_popup').style.display="none";
    document.getElementById('query').value = "";

}

function crossoff(listitem)
{
    var listitem=document.getElementById(listitem);
    if (listitem.checked===true){
        console.log(listitem.checked);
        listitem.style.color="black";
        listitem.checked = false;
        var inputs = listitem.getElementsByTagName("INPUT");
        for (var x=0; x<inputs.length; x++) {
            if (inputs[x].type.toUpperCase()=='CHECKBOX')
                inputs[x].checked = false;
        }
    } 

    else{
        console.log(listitem.checked);
        listitem.style.color="silver";
        listitem.checked = true;
        var inputs = listitem.getElementsByTagName("INPUT");
        for (var x=0; x<inputs.length; x++) {
            if (inputs[x].type.toUpperCase()=='CHECKBOX')
                inputs[x].checked = true;
        }
    }
}

function remove_item(name){
    var list = document.getElementById('listDiv');
    var items = list.children;
    for (var i=items.length-1; i>=0; i--){
        if (items[i].id === name){
            console.log("found one");
            list.removeChild(items[i]);
        }
        else {
            console.log("nope");
        }
    }
}

function remove_checked(){
    console.log("removing checked items");
    var list = document.getElementById('listDiv');
    var items = list.children;
    for (var i=items.length-1; i>=0; i--){
        if (items[i].checked){
            console.log("found one");
            list.removeChild(items[i]);
        }
        else {
            console.log("nope");
        }
    }
}