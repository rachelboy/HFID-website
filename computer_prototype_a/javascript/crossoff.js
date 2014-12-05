function crossoff(listitem)
{
    var listitem=document.getElementById(listitem);
    if (listitem.style.color==="silver"){
    	listitem.style.color="black";
    } 

	else{
		listitem.style.color="silver"
	}
}

function cookies_clicked(cookie,deal)
{
    var stuff = document.getElementById("screen")
    var append = "<div class=\"listItem\" id=\"listItem_five\" onclick=\"crossoff(id)\">   <h2>"+cookie+"</h2><p class=\"coupons\">"+deal+"</p></div>"
    stuff.innerHTML = stuff.innerHTML + append

    var menu=document.getElementById('cookie_popup');
    menu.style.display = 'none';

}