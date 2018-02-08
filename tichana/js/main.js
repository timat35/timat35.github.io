
var transition_img = 200;

function onHover()
{
    //$("#index_reza").attr('src', 'img/acceuil/a-reza-bottom.jpg');
	$("#index_reza").fadeTo(transition_img,0.5,'easeInOutCubic',function(){
		$(this).attr('src','img/acceuil/a-reza-bottom.jpg').fadeTo(transition_img, 1);
	});
}

function offHover()
{
$("#index_reza").fadeTo(transition_img,0.5,'easeInOutCubic',function(){
		$(this).attr('src','img/acceuil/a-reza.jpg').fadeTo(transition_img, 1);
	});
}