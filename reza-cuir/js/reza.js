

function load_article(type) {

	$.getJSON("json/article.json", function(data) {

		const keys = Object.keys(data[type])

		for (const article_key of keys) {
		  	
		  	let item = data[type][article_key];

			const div_article = document.createElement("div");
			div_article.setAttribute("class", "col-12 article");

			// first row
			const div_row_article = document.createElement("div");
			div_row_article.setAttribute("class", "row article_img");

			// image 
			const div_galery = document.createElement("div");
			div_galery.setAttribute("class", "photoswipe");
			div_galery.setAttribute("id", "galery-"+ article_key);

			nb_img = item.img[1];


			for (var k=1; k<=nb_img; k++) {

				const a_galery = document.createElement("a");
				a_galery.setAttribute("href", "/media/photo-"+type+"/" + item.img[0] + "-" + k + ".jpg");
				a_galery.setAttribute("data-size","0x0")
				a_galery.setAttribute("data-index","0")

				const img_main = document.createElement("img");
				img_main.setAttribute("id","img-main-"+article_key+"-"+k)
				img_main.setAttribute("src", "/media/photo-"+type+"/" + item.img[0] + "-" + k + "-320.jpg");
				img_main.setAttribute("alt", article_key+"-"+k);
				img_main.setAttribute("ind", k-1);
				img_main.setAttribute("galery", "galery-" + article_key);

				if (k == 2)
				{
					img_main.setAttribute("class", "articleMain borderClass");
					

				}
				else {
					img_main.setAttribute("class", "d-none");
				}
				a_galery.appendChild(img_main)
				div_galery.appendChild(a_galery)

			}

			// text part
			const div_text = document.createElement("div");
			div_text.setAttribute("class", "col-4");

			const div_text_title = document.createElement("div");
			div_text_title.setAttribute("class", "h5");
			const p_title = document.createElement("p");
			p_title.innerHTML = item.title;
			div_text_title.appendChild(p_title)


			const div_text_desc = document.createElement("div");
			div_text_desc.setAttribute("class", "article_text");
			const p_desc = document.createElement("p");
			p_desc.innerHTML = item.text;
			const p_dim = document.createElement("p");
			if (item.text_dimension !== undefined)
			{
				p_dim.innerHTML = "Dimensions: " + item.text_dimension;
			}
			div_text_desc.appendChild(p_desc)
			div_text_desc.appendChild(p_dim)

			div_text.appendChild(div_text_title)
			div_text.appendChild(div_text_desc)

			div_row_article.appendChild(div_galery)
			div_row_article.appendChild(div_text)


			// thumb

			const div_thumb = document.createElement("div");
			div_thumb.setAttribute("class", "row  article_thumb");


			for (var k=1; k<=nb_img; k++) {

				const img_thumb = document.createElement("img");
				img_thumb.setAttribute("src", "/media/photo-"+type+"/" + item.img[0] + "-" + k + "-100.jpg");
				img_thumb.setAttribute("alt", article_key + "-" + k);
				img_thumb.setAttribute("class", "article_thumb_img borderClass");
				img_thumb.setAttribute("onclick", "updateThumb(this)");
				img_thumb.setAttribute("key", article_key);
				div_thumb.appendChild(img_thumb)



			}




			div_article.appendChild(div_row_article)
			div_article.appendChild(div_thumb)

			document.getElementById("article_list").appendChild(div_article)


		}

	});
	
}


function updateThumb(thumb) 
{	

	key = $(thumb).attr('key');
	alt = $(thumb).attr('alt');
	$("#galery-"+key).each( function() {
		var $gal = $(this)

		$gal.find('img').each(function() {
			console.log($(this).attr('alt'))
			console.log(alt)
			if ($(this).attr('alt') == alt)
			{
				$(this).attr('class',"article_thumb_img borderClass")
			}
			else 
			{
				$(this).attr('class',"d-none")
			}
		});
	});


}


// page atelier
function load_content(files) {

	console.log(files)
	
 	nb_img = files.length;
	for (var i=0; i<3; i++) {
		const temp_div = document.createElement("div");
		temp_div.setAttribute("class", "grid-item");
		
		const temp_fig = document.createElement("figure");
		temp_fig.setAttribute("ind", i);
		
		const temp_a = document.createElement("a");
		temp_a.setAttribute("href", files[i]);
		temp_a.setAttribute("data-size", "0x0");
		temp_a.setAttribute("data-index", 0);
		
		const temp_img = document.createElement("img");
		
		var thumb_files =  files[i].split("/").pop();
		
		temp_img.setAttribute("src", 'media/photo-atelier/thumb/thumb-'+ thumb_files);
		
		temp_a.appendChild(temp_img)
		temp_fig.appendChild(temp_a)
		temp_div.appendChild(temp_fig)
		
		document.getElementById("div_grid").appendChild(temp_div)
	}

	if (nb_img < 4) {
		
		document.getElementById("btn_more").outerHTML=''
		
	}
}

function load_more(name, files) {
	
	var new_img = [];
 	nb_img = files.length;

	for (var i=3; i<nb_img; i++) {
		const temp_div = document.createElement("div");
		temp_div.setAttribute("class", "grid-item more ");
		
		const temp_fig = document.createElement("figure");
		temp_fig.setAttribute("ind", i);
		
		const temp_a = document.createElement("a");
		temp_a.setAttribute("href", files[i]);
		temp_a.setAttribute("data-size", "0x0");
		temp_a.setAttribute("data-index", 0);
		
		const temp_img = document.createElement("img");
		
		var thumb_files =  files[i].split("/").pop();
		temp_img.setAttribute("src", 'media/photo-atelier/thumb/thumb-'+ thumb_files);
		
		temp_a.appendChild(temp_img)
		temp_fig.appendChild(temp_a)
		temp_div.appendChild(temp_fig)
		
		new_img.push(temp_div)
	}
	
	return(new_img)
	
	
}




