


function load_content(name, files) {
	
	$.getJSON("json/creatrice.json", function(crea_data) {
		

		
		
		document.getElementById("crea_title").innerHTML = crea_data[name].title;
		document.getElementById("crea_sub").innerHTML = crea_data[name].subtitle;
		document.getElementById("crea_link").href = crea_data[name].link;
		document.getElementById("nav-logo").src = 'img/acceuil/logo-' + name + '.png';
		
		if (crea_data[name].facebook != undefined) {
			
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			document.getElementById("crea_like").setAttribute("class", "fb-page");
			document.getElementById("crea_like").setAttribute("data-href", crea_data[name].facebook);
		}
		
		if (crea_data[name].instagram != undefined) {
			document.getElementById("crea_insta").setAttribute("class", "");
			document.getElementById("crea_insta").href=crea_data[name].instagram;
		}
		
		$('*[data-crea=' +name+ ']').addClass('d-none');
		
		var arr_text = crea_data[name].text;
		nb_par = arr_text.length;
		
		for (var i=0; i<nb_par; i++) {
			const temp_p = document.createElement("p");
			temp_p.innerHTML = arr_text[i]
			document.getElementById("crea_text").appendChild(temp_p)
			
		}
		
	});

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
		
		temp_img.setAttribute("src", 'img/'+ name + '/thumb/thumb-'+ thumb_files);
		
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
		temp_img.setAttribute("src", 'img/'+ name + '/thumb/thumb-'+ thumb_files);
		
		temp_a.appendChild(temp_img)
		temp_fig.appendChild(temp_a)
		temp_div.appendChild(temp_fig)
		
		new_img.push(temp_div)
	}
	
	return(new_img)
	
	
}

function get_items() {
	var items = [];
	$( ".grid-item" ).each( function() {
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

function load_news() {
	
	$.getJSON("json/news.json", function(news_data) {
		
		var nb_news = Object.keys(news_data).length;
		console.log(nb_news)
		for (var i = 1; i <= nb_news; i++) { 
			console.log(i)
			
			var local_news = news_data[i];
			
			const temp_img = document.createElement("img");
			temp_img.setAttribute("src", 'img/news/' + local_news.img);
			
			
			const temp_crea = document.createElement("h3");
			nb_crea = local_news.creatrice.length;
			var list_crea= local_news.creatrice[0];
			
			for (var j=1; j < nb_crea; j++) {
				
				list_crea = list_crea + ((j == (nb_crea-1)) ? " et " : ", ") + local_news.creatrice[j];
			}
			temp_crea.innerHTML = list_crea
			
			const temp_title = document.createElement("h5");
			temp_title.innerHTML = local_news.title
			
			nb_par = local_news.text.length;
			
			const temp_p = document.createElement("p");
			var temp_desc = local_news.text[0];
			
			for (var j=1; j<nb_par; j++) {
				
				temp_desc = temp_desc + "<br />" + local_news.text[j];
			}
			temp_p.innerHTML = temp_desc;
			
			const temp_col_img = document.createElement("div");
			temp_col_img.setAttribute("class", "col-4 text-center align-self-center");
			
			const temp_info = document.createElement("div");
			temp_info.setAttribute("class", "info");
			
			const temp_text = document.createElement("div");
			temp_text.setAttribute("class", "col-8 align-self-center");
			

			
			const temp_row = document.createElement("div");
			temp_row.setAttribute("class", "row");
			
			const temp_base= document.createElement("div");
			temp_base.setAttribute("class", "col-12 col-lg-6  mt-4");
			
			temp_col_img.appendChild(temp_img)
			
			temp_info.appendChild(temp_crea)
			temp_info.appendChild(temp_title)
			temp_info.appendChild(temp_p)
			temp_text.appendChild(temp_info)
			
			temp_row.appendChild(temp_col_img)
			temp_row.appendChild(temp_text)
			temp_base.appendChild(temp_row)
			document.getElementById("div_marche").appendChild(temp_base)
			
		}
		
	});
	
	
}


