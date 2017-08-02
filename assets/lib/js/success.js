$(document).ready(function () {
	
	ex();

});


function ex(){
	var mar = setTimeout(redirect,2354);
}

function redirect(){
	var _url = $("#_url").val();
	//alert("Hello!");
	window.location = _url;
}
