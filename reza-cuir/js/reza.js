

	function changeArticleMaro(article, mobil) {
		
		$("#menu_maro_1").removeClass("activeMobil");
		$("#menu_maro_2").removeClass("activeMobil");
		$("#menu_maro_3").removeClass("activeMobil");
		$("#menu_maro_4").removeClass("activeMobil");
		$("#menu_maro_5").removeClass("activeMobil");
		$("#menu_maro_6").removeClass("activeMobil");
		$("#menu_maro_7").removeClass("activeMobil");
		
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#cabas_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");
		
		var temp_thumb = document.getElementsByClassName("articleView");
		var nb_thumb = temp_thumb.length;		
		var source = [];
		for (var i = 1; i <= nb_thumb; ++i) {
			source[i] = "";
		}

		var nb_article = 3;
		
		if (article == 'portemonnaie_3poche') {
			
			source[1] = "/media/photo-maroquinerie/1-portemonnaie-noire.jpg";
			source[2] = "/media/photo-maroquinerie/2-portemonnaie-jaune-bleu.jpg";
			source[3] = "/media/photo-maroquinerie/3-portemonnaie-rouge-vert.jpg";
			var articleTitle= "Porte-monnaie 3 poches",
			articleDescription="Fermeture \340 pression, cuir vachette ou veau.",
			articleDimension="Dimensions: 10,5cm X 7cm.";	
			
			$("#menu_maro_3").addClass("activeMobil");
			$("#porteMonnaie_btnCouleur").removeClass("noDisplay");

		} else if (article == 'portemonnaie_5poche') {
			source[1] = "/media/photo-maroquinerie/1-portemonnaie-multiple.jpg";
			source[2] = "/media/photo-maroquinerie/2-portemonnaie-marron.jpg";
			source[3] = "/media/photo-maroquinerie/3-portemonnaie-interieur.jpg";
			var	articleTitle= "Porte-monnaie 5 poches",
				articleDescription="Fermeture \340 pression, cuir vachette ou veau.",
				articleDimension="Dimensions: 10,5cm X 7cm.";	
			
		$("#menu_maro_4").addClass("activeMobil");
		$("#porteMonnaie_btnCouleur").removeClass("noDisplay");
			
		} else if (article == 'portefeuille') {
			source[1] = "/media/photo-maroquinerie/portefeuille-multiple.jpg";
			source[2] = "/media/photo-maroquinerie/portefeuille-2017.jpg";
			source[3] = "/media/photo-maroquinerie/portefeuille-bleue-marine-doublure.jpg";
			source[4] = "/media/photo-maroquinerie/portefeuille-jaune.jpg";
			source[5] = "/media/photo-maroquinerie/portefeuille-couleur.jpg";
			source[6] = "/media/photo-maroquinerie/portefeuille-marron.jpg";
			source[7] = "/media/photo-maroquinerie/portefeuille-vert.jpg";
			source[8] = "/media/photo-maroquinerie/portefeuille-noir.jpg";
			source[9] = "/media/photo-maroquinerie/portefeuille-rouge.jpg";
			source[10] = "/media/photo-maroquinerie/portefeuille-marron-fonce.jpg";
			var	articleTitle= "Portefeuille",
				articleDescription="Fermeture \340 pression, \340 l'int\351rieur 2 emplacements pour cartes et 4 poches dont une zipp\351e pour porte monnaie, format passeport, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15,5cm X 10cm.";	
				
			var nb_article = 10;
			
			$("#menu_maro_1").addClass("activeMobil");
				
		} else if (article == 'portechequier') {
			source[1] = "/media/photo-maroquinerie/portechequier-noir-tissu-wax.jpg";
			source[2] = "/media/photo-maroquinerie/portechequier-bleue-marine-marron.jpg";
			source[3] = "/media/photo-maroquinerie/portechequier-bleue-doublure.jpg";
			var	articleTitle= "Porte-ch\351quier",
				articleDescription="Fermeture \340 pression, \340 l'int\351rieur 3 emplacements pour cartes et 4 poches dont une double zipp\351e pour porte monnaie et billets, format ch\351quier, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 20,5cm X 11,5cm.";
				
			$("#menu_maro_5").addClass("activeMobil");
			
		} else if (article == 'bracelet') {
			source[1] = "/media/photo-maroquinerie/bracelet.jpg";
			source[2] = "/media/photo-maroquinerie/bracelet-cuir-rouge.jpg";
			source[3] = "/media/photo-maroquinerie/bracelet-cuir-tissu.jpg";
			var	articleTitle= "Bracelets",
				articleDescription="Bande de cuir en vachette ou en veau, biais en tissu, fermoir aimant\351 pour les bracelets double et triple tours, fermoir crochet\351 pour les bracelets en simple tour.",
				articleDimension="";
			
			$("#menu_maro_6").addClass("activeMobil");
				
					
		
				
		} else if (article == 'etui_lunette') {
			source[1] = "/media/photo-maroquinerie/etui-lunette-6.jpg";
			source[2] = "/media/photo-maroquinerie/etui-lunette-4.jpg";
			source[3] = "/media/photo-maroquinerie/etui-lunette-rouge-interieur.jpg";
			var	articleTitle= "Etui \340 lunettes",
				articleDescription="Fermeture \340 pression, coque plastique int\351gr\351e, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 16cm X 6cm pour une \351paisseur de 2,5cm.";
			
			$("#menu_maro_6").addClass("activeMobil");
				
					
		} else if (article == 'pochette') {
			source[1] = "/media/photo-maroquinerie/pochette-de-face.jpg";
			source[2] = "/media/photo-maroquinerie/pochette-marron-jaune.jpg";
			source[3] = "/media/photo-maroquinerie/pochette-multiples-ouvert.jpg";
			var	articleTitle= "Pochette",
				articleDescription="Format pour blague \340 tabac ou autre, fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15.5cm X 9cm.";
			
			$("#menu_maro_7").addClass("activeMobil");
				
					
		}

			
		var source_low = [];
		for (var i = 1; i <= nb_thumb; ++i) {
			source_low[i] = source[i].slice(0,-4)+ "-100.jpg";
		}
		
		var	source2_medium = source[2].slice(0,-4) + "-320.jpg";
			
		if (document.getElementById("fancy_1").href != source[1]) {
			
			for (var i = 1; i <= nb_thumb; ++i) {
				document.getElementById("fancy_"+i).href = source[i];
				document.getElementById("fancy_r"+i).href = source[i];
			}	
			

			$.each(temp_thumb, function(index){
				
				$(this).fadeTo(200,0.0,function() {
					$(this).attr("src",source_low[index+1]);
				}).fadeTo(400,1);
			})

			$("#img_base").fadeTo(200,0.0, function() {
				$("#img_base").attr("src",source2_medium);
			}).fadeTo(400,1);
			  
			  
			
			document.getElementById("fancy_base").href= source[2];
			document.getElementById("fancy_r1").rel = "fancybox";

			for (i=2; i <= nb_article; ++i){
				document.getElementById("fancy_r"+i).rel = "NO";
			}
			
			document.getElementById("fancy_1").rel = "NO";
			document.getElementById("fancy_2").rel = "NO";
			
			for (i=3; i <= nb_article; ++i){
				document.getElementById("fancy_"+i).rel = "fancybox";
			}
			
			
			$("img_base").addClass("borderClass");
			$.each(temp_thumb, function(index){
				$(this).addClass("borderClass");
				if (index > (nb_article-1)) {
					$(this).addClass("noDisplay");
				} else {
					$(this).removeClass("noDisplay");
				}
			})
			
			
			document.getElementById("articleTitle").innerHTML = articleTitle;
			document.getElementById("articleTitleMobil").innerHTML = articleTitle;
			document.getElementById("articleDescription").innerHTML = articleDescription;
			document.getElementById("articleDescriptionMobil").innerHTML = articleDescription;
			document.getElementById("articleDimension").innerHTML = articleDimension;
			document.getElementById("articleDimensionMobil").innerHTML = articleDimension;
				
		}
		
		var temp_after = document.getElementsByClassName("fancyfake_after");
		
		for (i=nb_article; i < temp_after.length; i++) {
			temp_after[i].rel= "NO"
		}
		
		
		if (article == 'pochette') {
			
		$("#thumb_img_1").removeClass("borderClass");
			
		}	
		
		
		if (mobil) {
			
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");
	
		var $body = $( 'body' ),
			$content = $( '#content' ),
			transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';
			
		$body.addClass( 'animating' );
		$body.addClass( 'up anim7' );
		$('#toggle-menu').removeClass('noDisplay')
		
		$content.on( transitionEnd, function() {
			$body
			.removeClass( 'animating down up anim7' )
			.removeClass( 'menu-visible anim7' );
		$content.off( transitionEnd );
			});
			
		setTimeout( function(){
				 $body.removeClass( 'animating down up anim7' );
				 $body.removeClass( 'menu-visible anim7' );
				}, 300);			
		}	
		

	}
	
	function changeArticleSac(article, mobil) {
		
		$("#menu_sac_1").removeClass("activeMobil");
		$("#menu_sac_2").removeClass("activeMobil");
		$("#menu_sac_3").removeClass("activeMobil");
		$("#menu_sac_4").removeClass("activeMobil");


		$("#porteMonnaie_btnCouleur").addClass("noDisplay");
		
		var temp_thumb = document.getElementsByClassName("articleView");
		var nb_thumb = temp_thumb.length;
		var source = [];
		for (var i = 1; i <= nb_thumb; ++i) {
			source[i] = "";
		}
			
		var nb_article = 3;

		if (article == 'sac_marron') {
			source[2] = "/media/photo-sac/Sac-besace-marron-face-2.jpg";
			source[1] = "/media/photo-sac/Sac-besace-marron-doublure.jpg";
			source[3] = "/media/photo-sac/Sac-besace-noire-face.jpg";
			source[4] = "/media/photo-sac/Sac-besace-noire-doublure.jpg";
			source[5] = "/media/photo-sac/sac-besace-rouge.jpg";
			source[6] = "/media/photo-sac/sac-besace-rouge-doublure.jpg";
			var	articleTitle= "Sac Besace",
				articleDescription="4 compartiments: poche principale, poche int\350rieure zipp\351e et 2 poches plaqu\351es sur le devant; fermeture rabat par 2 tops magn\351tiques plac\351s sous les boucles de r\351glages, porte clef, bandouli\350re ajustable par boucles, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 18cm, largeur 26cm, \351paisseur 6cm.";
			
			var nb_article = 6;
				
			$("#menu_sac_1").addClass("activeMobil");
			
		} else if (article == 'sac_rabat') {
			source[1] = "/media/photo-sac/sac-rabat-marron-clair.jpg";
			source[2] = "/media/photo-sac/sac-rabat-marron-fonce.jpg";
			source[3] = "/media/photo-sac/sac-rabat-marron-fonce-ouvert.jpg";
			source[4] = "/media/photo-sac/sac-rabat-jaune.jpg";
			source[5] = "/media/photo-sac/sac-rabat-rouge.jpg";
			var	articleTitle= "Sac Rabat",
			
			 articleDescription="3 compartiments: poche principale, poche int\351rieure zipp\351e et poche zipp\351e plaqu\351e à l'arri\350re; fermeture par rabat et lani\350re, taille de la bandouli\350re r\351glable, cuir vachette ou veau, doublure poche int\351rieure en cuir.",
			 articleDimension="";
			
			$("#menu_sac_2").addClass("activeMobil");
			var nb_article = 5;
				
		} else if (article == 'sac_cabas') {
			source[2] = "/media/photo-sac/sac-cabas-marron-face.jpg";
			source[1] = "/media/photo-sac/sac-cabas-noir.jpg";
			source[4] = "/media/photo-sac/sac-cabas-marron-fonce-dessus.jpg";
			source[3] = "/media/photo-sac/sac-cabas-marron-fonce.jpg";
			source[5] = "/media/photo-sac/sac-cabas-marron-fonce-doublure.jpg";
			var	articleTitle= "Sac Cabas",
				articleDescription="Grand volume, 3 compartiments: grande poche principale avec fermeture par top magn\351tique, une poche int\351rieure zipp\351e et une poche ext\351rieure plaqu\351e avec fermeture par top magn\351tique, grande anse pour porter \340 l'\351paule, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 36cm, largeur 30cm, \351paisseur 8cm (peut contenir des formats A4).";
			
			$("#menu_sac_3").addClass("activeMobil");
			var nb_article = 5;
			
		} else if (article == 'sac_bandou_jaune') {
			source[5] = "/media/photo-sac/sac-bandouliere-noir-doublure.jpg";
			source[4] = "/media/photo-sac/sac-bandouliere-noir.jpg";
			source[6] = "/media/photo-sac/sac-bandouliere-cuir-jaune.jpg";
			source[1] = "/media/photo-sac/sac-bandouliere-cuir-marron-fonce.jpg";
			source[2] = "/media/photo-sac/sac-bandouliere-cuir-marron-tissu-japonais.jpg";
			source[3] = "/media/photo-sac/sac-bandouliere-cuir-noir-tissu-japonais.jpg";
			source[7] = "/media/photo-sac/sac-bandouliere-jaune-ouvert-poche.jpg";
			source[8] = "/media/photo-sac/sac-bandouliere-cuir-noir-wax-2.jpg";
			source[9] = "/media/photo-sac/sac-bandouliere-marron-claire-tissu-vague-rouge.jpg";
			source[10] = "/media/photo-sac/sac-bandouliere-marron-vague-rouge.jpg";
			

			var articleTitle= "Sac Bandouli\350re \340 noeud",
				articleDescription="3 compartiments dont une poche int\351rieure zipp\351 et une poche ext\351rieure plaqu\351e, fermeture par top magn\351tique, bandouli\350re ajustable par simple noeud, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 22cm, largeur 27cm, \351paisseur 5cm.";
		
			$("#menu_sac_4").addClass("activeMobil");
			
			var nb_article = 10;
					
		}
		
		var source_low = [];
		for (var i = 1; i <= nb_thumb; ++i) {
			source_low[i] = source[i].slice(0,-4)+ "-100.jpg";
		}
		
		var	source2_medium = source[2].slice(0,-4) + "-320.jpg";

		
		if (document.getElementById("fancy_1").href != source[1]) {
			
			
			
			for (var i = 1; i <= nb_thumb; ++i) {
				document.getElementById("fancy_"+i).href = source[i];
				document.getElementById("fancy_r"+i).href = source[i];
			}			
			
			
			$.each(temp_thumb, function(index){
				$(this).fadeTo(200,0.0,function() {
					$(this).attr("src",source_low[index+1]);
				}).fadeTo(400,1);
			})

			$("#img_base").fadeTo(200,0.0, function() {
				$("#img_base").attr("src",source2_medium);
			}).fadeTo(400,1);
			  
			  
			
			document.getElementById("fancy_base").href= source[2];
			document.getElementById("fancy_r1").rel = "fancybox";

			for (i=2; i <= nb_article; ++i){
				document.getElementById("fancy_r"+i).rel = "NO";
			}
			
			document.getElementById("fancy_1").rel = "NO";
			document.getElementById("fancy_2").rel = "NO";
			
			for (i=3; i <= nb_article; ++i){
				document.getElementById("fancy_"+i).rel = "fancybox";
			}
			
			
			$("img_base").addClass("borderClass");
			
			$.each(temp_thumb, function(index){
				$(this).addClass("borderClass");
				if (index > (nb_article-1)) {
					$(this).addClass("noDisplay");
				} else {
					$(this).removeClass("noDisplay");
				}
			})
			
			document.getElementById("articleTitle").innerHTML = articleTitle;
			document.getElementById("articleTitleMobil").innerHTML = articleTitle;
			document.getElementById("articleDescription").innerHTML = articleDescription;
			document.getElementById("articleDescriptionMobil").innerHTML = articleDescription;
			document.getElementById("articleDimension").innerHTML = articleDimension;
			document.getElementById("articleDimensionMobil").innerHTML = articleDimension;
				
		}
		
		var temp_after = document.getElementsByClassName("fancyfake_after");
		
		for (i=nb_article; i < temp_after.length; i++) {
			temp_after[i].rel= "NO"
		}
		
		$("#img_base").addClass("borderClass");
		
		if (article == 'sac_cabas') {
			
			$("#thumb_img_1").removeClass("borderClass");
			$("#thumb_img_2").removeClass("borderClass");
			$("#thumb_img_3").removeClass("borderClass");
			$("#img_base").removeClass("borderClass");
			
		}
		
		
		if (mobil) {
					
		
		var $body = $( 'body' ),
			$content = $( '#content' ),
			transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';
	
			$body.addClass( 'animating' );
			$body.addClass( 'up anim4' );
			
		$('#toggle-menu').removeClass('noDisplay')

		$content.on( transitionEnd, function() {
			$body
			.removeClass( 'animating  up anim4' )
			.removeClass( 'menu-visible anim4' );
		$content.off( transitionEnd );
			});
			
		setTimeout( function(){
				 $body.removeClass( 'animating down up anim4' );
				 $body.removeClass( 'menu-visible anim4' );
				}, 300);

		}
	}

    function changeImage(object) {
		
		var url_medium = object.src.slice(0,-8)+"-320.jpg";
		var url_high = object.src.slice(0,-8)+".jpg";
		
		
        if (document.getElementById("img_base").src != url_medium) 
        {
            document.getElementById("img_base").src = url_medium;
            document.getElementById("fancy_base").href= url_high;
        }
	var temp_before = document.getElementsByClassName("fancyfake_before");
	var temp_after = document.getElementsByClassName("fancyfake_after");
	var temp_thumb = document.getElementsByClassName("articleView");
	var i;
	var str_fancy = "fancybox"; 
	var str_no = "NO"; 
	var bool_fancy = false; 
	for (i=0; i < temp_before.length; i++) {
		
		if (temp_before[i].href == url_high) {
			
			bool_fancy = true
			temp_before[i].rel= str_no
			temp_after[i].rel= str_no
			
			
		}
		else 
		{
			if (!bool_fancy) {
				temp_before[i].rel= str_fancy
				temp_after[i].rel= str_no
			}
			else {
				temp_before[i].rel= str_no
				temp_after[i].rel= str_fancy
			}	
		}
		
		if ($("#".concat(temp_thumb[i].id)).hasClass("noDisplay")) {
			temp_before[i].rel= str_no
			temp_after[i].rel= str_no
		}
		
	}
	
	
	
	
	if ($(object).hasClass("borderClass")) {
		$("#img_base").addClass("borderClass");
	}
	else {
		$("#img_base").removeClass("borderClass");
	}
	
    }
	


	 
	 