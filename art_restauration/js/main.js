
function load_galery() {

	$.getJSON("json/galery.json", function(data) {

		var nb_data = Object.keys(data).length;
		var ind = 0;
		for (var i = 1; i <= nb_data; i++) { 
			
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
			div_image.setAttribute("class", "image_comp photoswipe");


			nb_img = img_data.img.length;




			for (var k=0; k<nb_img; k++) {
				
				const temp_a = document.createElement("a");
				temp_a.setAttribute("href", 'img/galery/' + img_data.img[k] + '.jpg')
				temp_a.setAttribute("data-size", "0x0");
				temp_a.setAttribute("data-title", temp_title);
				temp_a.setAttribute("data-index", 0);
				const temp_img = document.createElement("img");
				temp_img.setAttribute("src", 'img/galery/thumb/thumb-' + img_data.img[k] + '.jpg');
				temp_img.setAttribute("ind", ind);
				temp_a.appendChild(temp_img)
				div_image.appendChild(temp_a)

				ind +=1;
			}

			div_image.appendChild(div_text)
			document.getElementById("galery").appendChild(div_image)
			
		}
			
	});
	
}


function get_items() {
	var items = [];
	$(".photoswipe").each( function() {
		var temp = [];
		var $pic     = $(this)
		$pic.find('a').each(function() {
			var $href   = $(this).attr('href'),
						$size   = $(this).data('size').split('x'),
						$width  = $size[0],
						$height = $size[1],
						$title = $(this).data('title');
	 
			var temp = {
				src : $href,
				w   : $width,
				h   : $height,
				title : $title
					}
			
			temp.el = $(this).find("img")[0];
			items.push(temp)
		});
	});
	
	return(items)
	
}

