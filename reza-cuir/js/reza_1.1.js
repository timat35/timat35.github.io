

	function changeArticleMaro(article, mobil) {
		
		$("#menu_maro_1").removeClass("activeMobil");
		$("#menu_maro_2").removeClass("activeMobil");
		$("#menu_maro_3").removeClass("activeMobil");
		$("#menu_maro_4").removeClass("activeMobil");
		$("#menu_maro_5").removeClass("activeMobil");
		$("#menu_maro_6").removeClass("activeMobil");
		$("#menu_maro_7").removeClass("activeMobil");
		
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");


		if (article == 'portemonnaie') {
			
			var source1 = "/media/photo-maroquinerie/portemonnaie-multiple.jpg",
				source2 = "/media/photo-maroquinerie/portemonnaie-jaune-rouge-profil.jpg",
				source3 = "/media/photo-maroquinerie/portemonnaie-jaune-rouge-interieur.jpg",
				articleTitle= "Porte-monnaie",
				articleDescription="Fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 10,5cm X 6,5cm.";
			
			
			$("#menu_maro_2").addClass("activeMobil");
			$("#porteMonnaie_btnCouleur").removeClass("noDisplay");
			
		} else if (article == 'portemonnaie_3poche') {
			var source1 = "/media/photo-maroquinerie/porte-monnaie-3-poche-multiple.jpg",
				source2 = "/media/photo-maroquinerie/porte-monnaie-3-poche.jpg",
				source3 = "/media/photo-maroquinerie/porte-monnaie-3-poche-ouvert.jpg",
				articleTitle= "Porte-monnaie 3 poches",
				articleDescription="Fermeture \340 pression, cuir vachette ou veau.",
				articleDimension="Dimensions: 10,5cm X 7cm.";	
			
			$("#menu_maro_3").addClass("activeMobil");
			$("#porteMonnaie_btnCouleur").removeClass("noDisplay");

		} else if (article == 'portemonnaie_demiLune') {
			var source1 = "/media/photo-maroquinerie/porte-monnaie-demi-lune-multiple.jpg",
				source2 = "/media/photo-maroquinerie/porte-monnaie-demi-lune.jpg",
				source3 = "/media/photo-maroquinerie/porte-monnaie-demi-lune-ouvert-2.jpg",
				articleTitle= "Porte-monnaie Demi-lune",
				articleDescription="Double emplacement, Fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 10,5cm X 8cm.";	
			
		$("#menu_maro_4").addClass("activeMobil");
		$("#porteMonnaie_btnCouleur").removeClass("noDisplay");
			
		} else if (article == 'portefeuille') {
			var source1 = "/media/photo-maroquinerie/portefeuille-multiple-couleur.jpg",
				source2 = "/media/photo-maroquinerie/portefeuille-rouge-mauve.jpg",
				source3 = "/media/photo-maroquinerie/portefeuille-bleue-marine-doublure.jpg",
				articleTitle= "Portefeuille",
				articleDescription="Fermeture \340 pression, \340 l'int\350rieur 2 emplacements pour cartes et 4 poches dont une zipp\351e pour porte monnaie, format passeport, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15,5cm X 10cm.";	
			
			$("#menu_maro_1").addClass("activeMobil");
				
		} else if (article == 'portechequier') {
			var source1 = "/media/photo-maroquinerie/portechequier-bleue-marine.jpg",
				source2 = "/media/photo-maroquinerie/portechequier-bleue-marine-marron.jpg",
				source3 = "/media/photo-maroquinerie/portechequier-bleue-doublure.jpg",
				articleTitle= "Porte-ch\351quier",
				articleDescription="Fermeture \340 pression, \340 l'int\350rieur 3 emplacements pour cartes et 4 poches dont une double zipp\351e pour porte monnaie et billets, format ch\351quier, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 20,5cm X 11,5cm.";
				
			$("#menu_maro_5").addClass("activeMobil");
				
		} else if (article == 'etui_lunette') {
			var source1 = "/media/photo-maroquinerie/etui-lunette-jaune-face.jpg",
				source2 = "/media/photo-maroquinerie/etui-lunette-jaune-bleu.jpg",
				source3 = "/media/photo-maroquinerie/etui-lunette-jaune-doublure.jpg",
				articleTitle= "Etui \340 lunettes",
				articleDescription="Fermeture lani\350re \340 enrouler et nouer, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15cm X 6cm.";
			
			$("#menu_maro_6").addClass("activeMobil");
				
					
		} else if (article == 'pochette') {
			var source1 = "/media/photo-maroquinerie/pochette-de-face.jpg",
				source2 = "/media/photo-maroquinerie/pochette-marron-jaune.jpg",
				source3 = "/media/photo-maroquinerie/pochette-multiples-ouvert.jpg",
				articleTitle= "Pochette",
				articleDescription="Format pour blague \340 tabac ou autre, fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15.5cm X 9cm.";
			
			$("#menu_maro_7").addClass("activeMobil");
				
					
		}
		
		var	source1_medium = source1.slice(0,-4) + "-320.jpg",
			source2_medium = source2.slice(0,-4) + "-320.jpg",
			source3_medium = source3.slice(0,-4) + "-320.jpg",
			source1_low = source1.slice(0,-4) + "-100.jpg",
			source2_low = source2.slice(0,-4) + "-100.jpg",
			source3_low = source3.slice(0,-4) + "-100.jpg";
			
		if (document.getElementById("fancy_1").href != source1) {
			
			document.getElementById("fancy_1").href = source1;
			document.getElementById("fancy_2").href = source2;
			document.getElementById("fancy_3").href = source3;

			$("#thumb_img_1").fadeTo(200,0.0, function() {
				  $("#thumb_img_1").attr("src",source1_low);
			  }).fadeTo(400,1);
			$("#thumb_img_2").fadeTo(200,0.0, function() {
				  $("#thumb_img_2").attr("src",source2_low);
			  }).fadeTo(400,1);
			$("#thumb_img_3").fadeTo(200,0.0, function() {
				  $("#thumb_img_3").attr("src",source3_low);
			  }).fadeTo(400,1);
			  
			$("#img_base").fadeTo(200,0.0, function() {
				$("#img_base").attr("src",source2_medium);
			}).fadeTo(400,1);
			  
			  
			
			document.getElementById("fancy_base").href= source2;
			
			document.getElementById("fancy_1").rel = "fancybox";
			document.getElementById("fancy_2").rel = "NO";
			document.getElementById("fancy_3").rel = "fancybox";
			
			$("#thumb_img_1").addClass("borderClass");
			$("#thumb_img_2").addClass("borderClass");
			$("#thumb_img_3").addClass("borderClass");
			
			$("img_base").addClass("borderClass");
			
			document.getElementById("articleTitle").innerHTML = articleTitle;
			document.getElementById("articleTitleMobil").innerHTML = articleTitle;
			document.getElementById("articleDescription").innerHTML = articleDescription;
			document.getElementById("articleDescriptionMobil").innerHTML = articleDescription;
			document.getElementById("articleDimension").innerHTML = articleDimension;
			document.getElementById("articleDimensionMobil").innerHTML = articleDimension;
				
		}
		
		if (article == 'portemonnaie') {
			
		$("#thumb_img_1").removeClass("borderClass");
			
		}	
		
		if (article == 'pochette') {
			
		$("#thumb_img_1").removeClass("borderClass");
			
		}	
		
		if (article == 'portemonnaie_3poche') {
			
		$("#thumb_img_1").removeClass("borderClass");	
		}	
		
		if (article == 'portemonnaie_demiLune') {
			
		$("#thumb_img_1").removeClass("borderClass");	
		$("#thumb_img_3").removeClass("borderClass");	
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
		$("#menu_sac_5").removeClass("activeMobil");
		$("#menu_sac_6").removeClass("activeMobil");
		
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");

		if (article == 'sac_noire') {
			
			var source1 = "/media/photo-sac/Sac-besace-noire-face-portefeuille-rouge.jpg",
				source2 = "/media/photo-sac/Sac-besace-noire-face.jpg",
				source3 = "/media/photo-sac/Sac-besace-noire-doublure.jpg",
				articleTitle= "Sac Besace",
				articleDescription="4 compartiments: poche principale, poche int\350rieure zipp\351e et 2 poches plaqu\351es sur le devant; fermeture rabat par 2 tops magn\351tiques plac\351s sous les boucles de r\351glages, porte clef, bandouli\350re ajustable par boucles, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 18cm, largeur 26cm, \351paisseur 6cm.";
				
			$("#besace_btnCouleur").removeClass("noDisplay");
			$("#menu_sac_2").addClass("activeMobil");
				
		} else if (article == 'sac_marron') {
			var source1 = "/media/photo-sac/Sac-besace-marron-face-doublure.jpg",
				source2 = "/media/photo-sac/Sac-besace-marron-face-2.jpg",
				source3 = "/media/photo-sac/Sac-besace-marron-doublure.jpg",
				articleTitle= "Sac Besace",
				articleDescription="4 compartiments: poche principale, poche int\350rieure zipp\351e et 2 poches plaqu\351es sur le devant; fermeture rabat par 2 tops magn\351tiques plac\351s sous les boucles de r\351glages, porte clef, bandouli\350re ajustable par boucles, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 18cm, largeur 26cm, \351paisseur 6cm.";	
				
			$("#besace_btnCouleur").removeClass("noDisplay");
			$("#menu_sac_1").addClass("activeMobil");
				
		} else if (article == 'sac_cabas') {
			var source1 = "/media/photo-sac/sac-cabas-marron-dessus.jpg",
				source2 = "/media/photo-sac/sac-cabas-marron-face.jpg",
				source3 = "/media/photo-sac/sac-cabas-marron-doublure.jpg",
				articleTitle= "Sac Cabas",
				articleDescription="Grand volume, 3 compartiments: grande poche principale avec fermeture par top magn\351tique, une poche int\350rieure zipp\351e et une poche ext\350rieure plaqu\351e avec fermeture par top magn\351tique, grande anse pour porter \340 l'\351paule, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 36cm, largeur 30cm, \351paisseur 8cm (peut contenir des formats A4).";
				
			$("#menu_sac_3").addClass("activeMobil");
				
		} else if (article == 'sac_pochette') {
			var source1 = "/media/photo-sac/sac-pochette-rouge-portemonnaie.jpg",
				source2 = "/media/photo-sac/sac-pochette-rouge-face-portrait.jpg",
				source3 = "/media/photo-sac/sac-cabas-marron-doublure.jpg",
				articleTitle= "Sac Pochette",
				articleDescription="Petit sac \340 fermeture zipp\351e sur le dessus, bandouli\350re ajustable par simple noeud, cuir vachette ou veau.",
				articleDimension="Dimensions: hauteur 15cm, largeur 20cm.";
			
			$("#menu_sac_6").addClass("activeMobil");
			
				
					
		} else if (article == 'sac_bandou_jaune') {
			var source1 = "/media/photo-sac/sac-bandouliere-jaune-ouvert-poche.jpg",
				source2 = "/media/photo-sac/sac-bandouliere-jaune-face.jpg",
				source3 = "/media/photo-sac/sac-bandouliere-jaune-ouvert.jpg",
				articleTitle= "Sac Bandouli\350re \340 noeud",
				articleDescription="3 compartiments dont une poche int\350rieure zipp\351 et une poche ext\350rieure plaqu\351e, fermeture par top magn\351tique, bandouli\350re ajustable par simple noeud, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 22cm, largeur 27cm, \351paisseur 5cm.";
			
			$("#menu_sac_4").addClass("activeMobil");
			$("#bandou_btnCouleur").removeClass("noDisplay");
				
					
		} else if (article == 'sac_bandou_marron') {
			var source1 = "/media/photo-sac/sac-bandouliere-marron-ouvert-poche.jpg",
				source2 = "/media/photo-sac/sac-bandouliere-marron-face.jpg",
				source3 = "/media/photo-sac/sac-bandouliere-marron-ouvert.jpg",
				articleTitle= "Sac Bandouli\350re \340 noeud",
				articleDescription="3 compartiments dont une poche int\350rieure zipp\351 et une poche ext\350rieure plaqu\351e, fermeture par top magn\351tique, bandouli\350re ajustable par simple noeud, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 22cm, largeur 27cm, \351paisseur 5cm.";
			
			$("#menu_sac_5").addClass("activeMobil");
			$("#bandou_btnCouleur").removeClass("noDisplay");
				
					
		}
		
		var	source1_medium = source1.slice(0,-4) + "-320.jpg",
			source2_medium = source2.slice(0,-4) + "-320.jpg",
			source3_medium = source3.slice(0,-4) + "-320.jpg",
			source1_low = source1.slice(0,-4) + "-100.jpg",
			source2_low = source2.slice(0,-4) + "-100.jpg",
			source3_low = source3.slice(0,-4) + "-100.jpg";
		
		if (document.getElementById("fancy_1").href != source1) {
			
			document.getElementById("fancy_1").href = source1;
			document.getElementById("fancy_2").href = source2;
			document.getElementById("fancy_3").href = source3;

			  $("#thumb_img_1").fadeTo(200,0.0, function() {
				  $("#thumb_img_1").attr("src",source1_low);
			  }).fadeTo(400,1);
			  $("#thumb_img_2").fadeTo(200,0.0, function() {
				  $("#thumb_img_2").attr("src",source2_low);
			  }).fadeTo(400,1);
			  $("#thumb_img_3").fadeTo(200,0.0, function() {
				  $("#thumb_img_3").attr("src",source3_low);
			  }).fadeTo(400,1);
			  
			  if (article == 'sac_pochette') {
				  
				  $("#img_base").fadeTo(200,0.0, function() {
					$("#img_base").attr("src",source1_medium);
				}).fadeTo(400,1);
				  
			  } else {
				
				
				$("#img_base").fadeTo(200,0.0, function() {
					$("#img_base").attr("src",source2_medium);
				}).fadeTo(400,1);
			  }
			  
			
			document.getElementById("fancy_base").href= source2;
			
			document.getElementById("fancy_1").rel = "fancybox";
			document.getElementById("fancy_2").rel = "NO";
			document.getElementById("fancy_3").rel = "fancybox";
			
			$("#thumb_img_1").addClass("borderClass");
			$("#thumb_img_2").addClass("borderClass");
			$("#thumb_img_3").addClass("borderClass");
			
			$("#thumb_img_1").removeClass("twoArticle");
			$("#thumb_img_3").removeClass("noDisplay");
			
			$("img_base").addClass("borderClass");
			
			document.getElementById("articleTitle").innerHTML = articleTitle;
			document.getElementById("articleTitleMobil").innerHTML = articleTitle;
			document.getElementById("articleDescription").innerHTML = articleDescription;
			document.getElementById("articleDescriptionMobil").innerHTML = articleDescription;
			document.getElementById("articleDimension").innerHTML = articleDimension;
			document.getElementById("articleDimensionMobil").innerHTML = articleDimension;
				
		}
		

		
		if (article == 'sac_cabas') {
			
		$("#thumb_img_2").removeClass("borderClass");
		$("#img_base").removeClass("borderClass");
			
		}
		
		if (article == 'sac_bandou_jaune') {
			
		$("#thumb_img_2").removeClass("borderClass");
		$("#img_base").removeClass("borderClass");
			
		}
		
		if (article == 'sac_bandou_marron') {
		$("#thumb_img_1").removeClass("borderClass");
		}
		
		if (article == 'sac_pochette') {
		
		
		$("#thumb_img_1").addClass("twoArticle");
		$("#thumb_img_2").removeClass("borderClass");
		$("#thumb_img_3").addClass("noDisplay");
		
		document.getElementById("fancy_base").href= source1;
		document.getElementById("fancy_1").rel = "NO";
		document.getElementById("fancy_2").rel = "fancybox";
		document.getElementById("fancy_3").rel = "NO";
		
		}
		
		
		
		if (mobil) {
			
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		
		var $body = $( 'body' ),
			$content = $( '#content' ),
			transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';
	
			$body.addClass( 'animating' );
			$body.addClass( 'up anim6' );
			
		$('#toggle-menu').removeClass('noDisplay')

		$content.on( transitionEnd, function() {
			$body
			.removeClass( 'animating  up anim6' )
			.removeClass( 'menu-visible anim6' );
		$content.off( transitionEnd );
			});
			
		setTimeout( function(){
				 $body.removeClass( 'animating down up anim6' );
				 $body.removeClass( 'menu-visible anim6' );
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
	var temp = document.getElementsByClassName("fancyfake");
	var i;
	for (i=0; i < temp.length; i++) {
		if (temp[i].href == url_high) {
			temp[i].rel="NO"
		}
		else {
			temp[i].rel="fancybox"
		}
	}
	
	if ($("#thumb_img_3").hasClass("noDisplay")) {
		document.getElementById("fancy_3").rel = "NO";
	}
	
	if ($(object).hasClass("borderClass")) {
		$("#img_base").addClass("borderClass");
	}
	else {
		$("#img_base").removeClass("borderClass");
	}
	
    }
	


	 
	 