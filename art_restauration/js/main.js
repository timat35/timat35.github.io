
function load_galery() {

	$.getJSON("json/galery.json", function(data) {

	var nb_img = Object.keys(data).length;
		for (var i = 1; i <= nb_img; i++) { 
			
			var img_data = data[i];


			const div_text = document.createElement("div");

			const p_title = document.createElement("p");
			p_title.setAttribute("class", "image_comp_title");
			var temp_title = img_data.title;
			p_title.innerHTML = temp_title;

			const temp_p = document.createElement("p");
			temp_p.setAttribute("class", "image_comp_desc");
			nb_par = img_data.text.length;
			var temp_desc = img_data.text[0];
			
			for (var j=1; j<nb_par; j++) {
				
				temp_desc = temp_desc + "<br />" + img_data.text[j];
			}

			temp_p.innerHTML = temp_desc;
			
			div_text.appendChild(p_title)
			div_text.appendChild(temp_p)
			
			const div_image = document.createElement("div");
			div_image.setAttribute("class", "image_comp");

			const temp_a_base = document.createElement("a");
			temp_a_base.setAttribute("href", 'img/galery/' + img_data.img + '_base.jpg')
			temp_a_base.setAttribute("data-size", "0x0");
			temp_a_base.setAttribute("data-index", 0);
			const temp_img_base = document.createElement("img");
			temp_img_base.setAttribute("src", 'img/galery/thumb/thumb-' + img_data.img + '_base.jpg');
			temp_img_base.setAttribute("ind", (i-1)*2);
			temp_a_base.appendChild(temp_img_base)

			const temp_a_fix = document.createElement("a");
			temp_a_fix.setAttribute("href", 'img/galery/' + img_data.img + '_fix.jpg')
			temp_a_fix.setAttribute("data-size", "0x0");
			temp_a_fix.setAttribute("data-index", 0);
			const temp_img_fix = document.createElement("img");
			temp_img_fix.setAttribute("src", 'img/galery/thumb/thumb-' + img_data.img + '_fix.jpg');
			temp_img_fix.setAttribute("ind", (i-1)*2+1);
			temp_a_fix.appendChild(temp_img_fix)
						
			div_image.appendChild(temp_a_base)
			div_image.appendChild(temp_a_fix)
			div_image.appendChild(div_text)
			document.getElementById("galery").appendChild(div_image)
			
		}
		
	});
	
}


function get_items() {
	var items = [];
	$(".image_comp").each( function() {
		var temp = [];
		var $pic     = $(this)
		$pic.find('a').each(function() {
			var $href   = $(this).attr('href'),
						$size   = $(this).data('size').split('x'),
						$width  = $size[0],
						$height = $size[1];
	 
			var temp = {
				src : $href,
				w   : $width,
				h   : $height
					}
			
			temp.el = $(this).find("img")[0];
			items.push(temp)
		});
	});
	
	return(items)
	
}

