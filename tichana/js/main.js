
var transition_img = 250;

function index_hover(object, dir)
{	
	var new_src = object.src.slice(0,-5)+dir+".jpg";
	console.log(new_src)
	$("#" + object.id).fadeTo(transition_img,0.5,'easeInOutCubic',function(){
		$(this).attr('src',new_src).fadeTo(transition_img, 1);
	});
}

function load_content(name) {
	console.log(name)
}