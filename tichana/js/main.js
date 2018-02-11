
var transition_img = 250;

function index_hover(object, dir)
{	
	var new_src = object.src.slice(0,-5)+dir+".jpg";
	$("#" + object.id).fadeTo(transition_img,0.5,'easeInOutCubic',function(){
		$(this).attr('src',new_src).fadeTo(transition_img, 1);
	});
}

function load_content(name) {
	
	$.getJSON("json/creatrice.json", function(crea_data) {
		
		document.getElementById("crea_title").innerHTML = crea_data[name].title;
		document.getElementById("crea_sub").innerHTML = crea_data[name].subtitle;
		document.getElementById("crea_link").innerHTML = crea_data[name].link;
	});

	
	
	

}