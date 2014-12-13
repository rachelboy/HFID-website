function showDropdown(){
    // console.log("OIOIEWNOWIEFN");
    var inputbox = document.getElementById('form');
    var input = document.getElementById('query').value;
    console.log(input);
    var pos = inputbox.getBoundingClientRect();
    var dropdown=document.getElementById('cookie_popup');
    var style = dropdown.style;
    style.top = pos.bottom + 'px';
    style.left = pos.left + 'px';
    style.display = 'block';
}

function addListItem(name, coupons){
    // console.log("WAZZUP");
    // console.log(name);
    
    var element = document.createElement("div");
    element.setAttribute("class", "listItem");
    element.setAttribute("onchange","crossoff(id)");
    element.innerHTML = '<h2><input type="checkbox">'+name+'</h2> <p class="coupons"><a href="coupons.html">'+coupons+'</a></p> <div style="clear:both"></div>';
    
    var list = document.getElementById('listDiv');
    var lastitem = list.children.length - 1;
    list.insertBefore(element,list.children[lastitem]);

    document.getElementById('cookie_popup').style.display="none";
    document.getElementById('query').value = "";

}
