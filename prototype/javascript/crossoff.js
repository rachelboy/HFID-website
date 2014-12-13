function crossoff(listitem)
{
    var listitem=document.getElementById(listitem);
    if (listitem.style.color==="silver"){
    	listitem.style.color="black";
    } 

	else{
		listitem.style.color="silver";
	}
}

function cookies_clicked()
{
    //http://stackoverflow.com/questions/20673959/how-to-add-new-li-to-ul-onclick-with-javascript
    //http://jsfiddle.net/wLRwS/1/

    // var stuff = document.getElementById("listDiv")
    // var append = "<div class=\"listItem\" onclick=\"crossoff(id)\">   <h2>"+cookie+"</h2><p class=\"coupons\">"+deal+"</p></div>"
    // stuff.innerHTML = stuff.innerHTML + append

    // var menu=document.getElementById('cookie_popup');
    // menu.style.display = 'none';
    console.log("here");
    console.log(event.keyCode);
    if (event.keyCode == 13) {
        var element = document.createElement("div");
        element.setAttribute("class", "listItem");
        element.setAttribute("onchange","crossoff(id)")
        element.innerHTML = '<h2><input type="checkbox">'+"FOODNAME"+'</h2>
          <p class="coupons"><a href="coupons.html">$3 off</a></p>
          <div style="clear:both"></div>';
    }
      



}



function cross_all(items){
    
}